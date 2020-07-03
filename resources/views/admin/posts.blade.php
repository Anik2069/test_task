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
                        <h3 class="page-title">Write Your Post</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Write Your Complain</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">

                        </div>
                        <div class="card-body">
                            <form action="#" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Listed Date</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" value="<?php echo date('d M,Y')?>"
                                               disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Type of Post</label>
                                    <div class="col-md-10">
                                        <select class="form-control" id="mySelect" onclick="myFunction()">
                                            <option value="Choose...">-- Select --</option>
                                            <option value="image">Image Post</option>
                                            <option value="video">Video Post</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Post Title</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div id="image1" style="display:none">
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Image</label>
                                        <div class="col-md-10">
                                            <input type="file" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div id="video" style="display:none">
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Youtube Link</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                </div>


                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Section Select</label>
                                    <div class="col-md-10">
                                        <select class="form-control">
                                            <option>-- Select --</option>
                                            <option>Section 1</option>
                                            <option>Section 2</option>

                                        </select>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Description</label>
                                    <div class="col-md-10">
                                        <textarea rows="5" cols="5" class="form-control"
                                                  placeholder="Enter text here"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <label class="col-form-label col-md-2"> </label>
                                    <div class="col-md-5">
                                        <input class="form-control btn btn-primary" type="submit">
                                    </div>
                                    <div class="col-md-5">
                                        <input class="form-control btn btn-success" type="submit" value="Publish">
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <script>
        function myFunction() {
            var x = document.getElementById("mySelect").value;

            if (x == "image") {
                document.getElementById("image1").style.display = "block";
                document.getElementById("video").style.display = "none";
            }
            if (x == "video") {

                document.getElementById("image1").style.display = "none";
                document.getElementById("video").style.display = "block";
            }

            if (x == "Choose...") {

                document.getElementById("image1").style.display = "none";
                document.getElementById("video").style.display = "none";
            }

        }
    </script>

@endsection
