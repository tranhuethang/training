<?php

namespace App\Services;

use App\Services\Interfaces\StaffServiceInterface;
use App\Models\Staffs;
use Image;

class StaffService implements StaffServiceInterface
{
    public function createNewStaff(array $data)
    {
        return \DB::transaction(function () use ($data)
        {
            $staff = new Staffs($data);
            if (!empty( $data['avatar'] )) {
                $avatar = $data['avatar'];
                $filename = time().'.'. $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );

                $staff->avatar = '/uploads/avatars/'.$filename;
            }

            $staff->save();

            return $data;
        });
    }

    public function editStaff(array $data, Staffs $staff)
    {
        return \DB::transaction(function () use ($data, $staff) {
            if (!empty( $data['avatar'] )) {
                $avatar = $data['avatar'];
                $filename = time().'.'. $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );

                $data['avatar'] = '/uploads/avatars/'.$filename;
            }

            $staff->update($data);

            return $data;
        });
    }
}