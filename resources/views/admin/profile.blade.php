@extends("admin.master")
@section("title")
    <title>Admin - Dashboard</title>
@endsection
@section("content")
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Change Password</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Change Password</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        @if ($message = Session::get('error'))
                            <div class="alert alert-danger alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <div class="card-header">

                        </div>
                        <div class="card-body">
                            <form action="/submitchangeadmin" method="post">@csrf

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2"> Email</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" value="{{$pass}}" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Old Password</label>
                                    <div class="col-md-10">
                                        <input type="password" name="passw" class="form-control">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">New Password</label>
                                    <div class="col-md-10">
                                        <input type="password" name="passw1" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Confirm Password</label>
                                    <div class="col-md-10">
                                        <input type="password" name="passw2" class="form-control">
                                    </div>
                                </div>





                                <div class="form-group row">
                                    <label class="col-form-label col-md-2"> </label>
                                    <div class="col-md-10">
                                        <input class="form-control btn btn-primary" type="submit">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- /Main Wrapper -->

@endsection
