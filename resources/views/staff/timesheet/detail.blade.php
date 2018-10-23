@extends('layouts.index')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Detail Timesheet
            </h1>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-10">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Detail Timesheet</h3>
                        </div>
                        <form role="form">
                            {{ csrf_field() }}
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Day</label>
                                    <input class="form-control" type="date" name="day" value="{{ $timesheet->day }}" placeholder="Day" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Work</label>
                                    <textarea class="form-control" rows="10" placeholder="Work" name="work" readonly>{{ $timesheet->work }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Difficult</label>
                                    <textarea class="form-control" rows="10" placeholder="Difficult" name="difficult" readonly>{{ $timesheet->difficult }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Plan Next Day</label>
                                    <textarea class="form-control" rows="10" placeholder="Plan Next Day" name="plannd" readonly>{{ $timesheet->plannd }}</textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop