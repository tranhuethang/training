@extends('layouts.admin.index')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                List Staff Table
            </h1>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">List Staff</h3>
                        </div>
                        <div>
                            <a class="btn btn-add" href="{{ route('staff.getAddStaff') }}"><i class="fa fa-plus"></i> Add Staff</a>
                        </div>
                        <div class="box-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Email</th>
                                        <th>Username</th>
                                        <th>Avatar</th>
                                        <th>Description</th>
                                        <th>Leader</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($staff as $s)
                                    <tr>
                                        <td>{{ $s['email'] }}</td>
                                        <td>{{ $s['username'] }}</td>
                                        <td>
                                            <img src="{{ $s['avatar'] }}" style="width:32px; height:32px;">
                                        </td>
                                        <td>{{ $s['description'] }}</td>
                                        <td>
                                            <?php
                                                $leader_id = App\Models\Staffs::where('id', $s['leader_id'])->first();
                                            ?>
                                            {{ $leader_id['username'] }}
                                        </td>
                                        <td>
                                            <a class="btn btn-info btn-sm" href="{{ route('staff.getEditStaff', $s['id']) }}">Edit</a>
                                            <a class="btn btn-danger btn-sm" href="{{ route('staff.deleteStaff', $s['id']) }}">Delete</a>
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