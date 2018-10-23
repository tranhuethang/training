@extends('layouts.index')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                <div class="col-md-10">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Please Click Send To Send Mail</h3>
                        </div>
                        <form role="form" action="{{ route('postMail') }}" method="post">
                            {{ csrf_field() }}
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @stop