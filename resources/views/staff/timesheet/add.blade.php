@extends('layouts.index')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Add Timesheet
            </h1>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-10">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Add Timesheet Form</h3>
                        </div>
                        @if (count($errors) >0)
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="text-danger"> {{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <form role="form" action="{{ route('postAddTimesheet') }}" method="post">
                            {{ csrf_field() }}
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Day</label>
                                    <input class="form-control" type="date" name="day" placeholder="Day">
                                </div>
                                <div class="form-group">
                                    <label>Work</label>
                                    <textarea class="form-control" rows="5" placeholder="Work" name="work"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Difficult</label>
                                    <textarea class="form-control" rows="5" placeholder="Difficult" name="difficult"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Plan Next Day</label>
                                    <textarea class="form-control" rows="5" placeholder="Plan Next Day" name="plannd"></textarea>
                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop