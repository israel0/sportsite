@extends("layouts.admin_overview")

@section("user_content")
<div class="user-content">
    <div class="container">
        <div class="user-data row">
            <div class="login-container">
                <div class="login-form-div">

                    <nav>
                        <ul class="nav nav-tabs">
                            <li><a href="<?php echo url("admin/view_user/$user->userName") ?>">Personal Information</a></li>
                            <li><a href="<?php echo url("admin/change_password/$user->userName") ?>">Change Password</a></li>
                            <li class="active"><a href="<?php echo url("admin/change_pin/$user->userName") ?>">Transaction Pin</a></li>
                        </ul>
                    </nav>

                    <div class="tab-content">


                        <div id="home" class="tab-pane fade in active">
                            <div class="user-main-container col-ms-12">
                                <div class="list-group">
                                    <div class="list-group-item active">
                                        <h4 style="text-transform: uppercase" class="list-group-item-heading">
                                            Change Transaction Pin
                                        </h4>
                                    </div>
                                    <div class="list-group-item">
                                        <form action="<?php echo url("admin/update_pin/$user->userName") ?>" method="post">
                                            @csrf
                                            @if(session('error'))
                                            <div style="margin-bottom: 1rem;" class="label label-danger">
                                                {{ session('error') }}
                                            </div>
                                            @endif
                                            @if(session('success'))
                                            <div style="margin-bottom: 1rem;" class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                            @endif
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="pin" class="control-label">Pin</label>
                                                    <div class="input-group">
                                                        <span class="input-group-btn"><a type="button" class="btn btn-primary">
                                                                <span class="fa fa-lock"></span>
                                                            </a></span>
                                                        <input name="pin" type="pin" id="pin" class="form-control" placeholder="">
                                                        <span class="form-control-feedback glyphicon" aria-hidden="true"></span>
                                                    </div>

                                                    <label for="pin" class="control-label">Confirm Pin</label>
                                                    <div class="input-group">
                                                        <span class="input-group-btn"><a type="button" class="btn btn-primary">
                                                                <span class="fa fa-lock"></span>
                                                            </a></span>
                                                        <input name="confirm_pin" type="pin" id="confirm_pin" class="form-control" placeholder="">
                                                        <span class="form-control-feedback glyphicon" aria-hidden="true"></span>
                                                    </div>

                                                </div>


                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div style="margin-bottom: 0" class="form-group">
                                                        <div class="flex">
                                                            <input type="submit" value="CHANGE PIN" class="btn btn-primary btn-block">
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
@include('js.index')
@stop