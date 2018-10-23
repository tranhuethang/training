@extends('layouts.index')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                List Timesheet Table
            </h1>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">List Timesheet</h3>
                        </div>
                        <div>
                            <a class="btn btn-add" href="{{ route('getAddTimesheet') }}"> <i
                                        class="fa fa-plus"></i> Add Timesheet
                            </a>
                        </div>
                        <div class="box-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Day</th>
                                    <th>Work</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($timesheets as $item)
                                        <tr>
                                            <td>{{ $item['day'] }}</td>
                                            <td>{{ $item['work'] }}</td>
                                            <td>
                                                <a class="btn btn-info btn-sm" href="{{ route('postEditTimesheet', $item['id']) }}">Edit</a>
                                                <a class="btn btn-danger btn-sm" href="{{ route('getDetailTimesheet', $item['id']) }}">Detail</a>
                                            </td>
                                        </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop