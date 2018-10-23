<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PostAddStaffRequest;
use App\Models\Staffs;
use Illuminate\Http\Request;
use App\Services\Interfaces\StaffServiceInterface;

class StaffController extends Controller
{
    protected $staffService;

    public function __construct(StaffServiceInterface $staffService)
    {
        $this->staffService = $staffService;
    }

    public function listStaff()
    {
        $staff = Staffs::all();

        return view('admin.staff.index', compact('staff'));
    }

    public function getAddStaff()
    {
        $staff = Staffs::all();

        return view('admin.staff.add', compact('staff'));
    }

    public function postAddStaff(PostAddStaffRequest $request)
    {
        if ($this->staffService->createNewStaff($request->all())) {
            return redirect('staff/list');
        }

        abort(500, 'Whoops ! Something went wrong !');
    }

    public function getEditStaff($id)
    {
        $staff = Staffs::find($id);
        $data = Staffs::all();

        return view('admin.staff.edit', compact('staff','data'));
    }

    public function postEditStaff(Request $request, Staffs $id)
    {
        if ($this->staffService->editStaff($request->all(), $id)) {

            return redirect('staff/list');
        }

        abort(500, 'Whoops ! Something went wrong !');
    }

    public function getDelete($id)
    {
        $staff = Staffs::find($id);
        $staff->delete();

        return redirect('staff/list');
    }
}
