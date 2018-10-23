<?php

namespace App\Http\Controllers\Staff;

use App\Http\Requests\PostAddTimesheetRequest;
use App\Models\Timesheets;
use Illuminate\Http\Request;
use App\Services\Interfaces\TimesheetServiceInterface;

class TimesheetController extends Controller
{
    protected $timesheetService;

    public function __construct(TimesheetServiceInterface $timesheetService)
    {
        $this->timesheetService = $timesheetService;
    }

    public function getListTimeSheet()
    {
        $timesheets = Timesheets::all();

        return view('staff.timesheet.index', compact('timesheets'));
    }

    public function getAddTimesheet()
    {
        return view('staff.timesheet.add');
    }

    public function postAddTimesheet(PostAddTimesheetRequest $request)
    {
        if ($this->timesheetService->createNewTimesheet($request->all())) {

            return redirect('timesheet/list');
        }

        abort(500, 'Whoops ! Something went wrong !');
    }

    public function getEditTimesheet($id)
    {
        $timesheet = Timesheets::find($id);

        return view('staff.timesheet.edit', compact('timesheet'));
    }

    public function postEditTimesheet(Request $request, Timesheets $id)
    {
        if ($this->timesheetService->editTimesheet($request->all(), $id)) {

            return redirect('timesheet/list');
        }

        abort(500, 'Whoops ! Something went wrong !');
    }

    public function getDetailTimesheet($id)
    {
        $timesheet = Timesheets::find($id);

        return view('staff.timesheet.detail', compact('timesheet'));
    }
}
