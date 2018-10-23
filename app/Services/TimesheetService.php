<?php

namespace App\Services;

use App\Services\Interfaces\TimesheetServiceInterface;
use App\Models\Timesheets;

class TimesheetService implements TimesheetServiceInterface
{
    public function createNewTimesheet(array $data)
    {
        return \DB::transaction(function () use ($data)
        {
            $timesheet = new Timesheets($data);
            $timesheet->save();

            return $timesheet;
        });
    }

    public function editTimesheet(array $data, Timesheets $timesheet)
    {
        return \DB::transaction(function () use ($data, $timesheet) {

            $timesheet->update($data);

            return $data;
        });
    }
}