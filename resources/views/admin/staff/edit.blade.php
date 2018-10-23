@extends('layouts.admin.index')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Edit Staff
            </h1>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-10">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Edit Staff Form</h3>
                        </div>
                        <form role="form" action="{{ route('staff.postEditStaff', $staff->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="Email" name="email" value="{{ $staff->email }}">
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="form-control" placeholder="Username" name="username" value="{{ $staff->username }}">
                                </div>
                                <div class="form-group">
                                    <label>Avatar</label>
                                    <input class="form-control" type="file" name="avatar" placeholder="Avatar">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" rows="5" name="description" placeholder="Description" >{{ $staff->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Leader</label>
                                    <select name="leader_id">
                                        @foreach ($data as $d)
                                            <option value="{{ $d->id }}" >{{ $d->username }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="reset-button">
                                <button type="reset" class="btn btn-warning">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop