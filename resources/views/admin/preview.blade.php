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
                        <h3 class="page-title">All Posts</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">View All</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="comp-sec-wrapper">

                <!-- Avatar -->

                <!-- Buttons -->

                <!-- Cards -->
                <section class="comp-section comp-cards">
                    <div class="section-header">
                        <h3 class="section-title">View Alls</h3>
                        <div class="line"></div>
                    </div>

                    <div class="row">

                        @foreach($value as $val)
                            <div class="col-12 col-md-6 col-lg-4 d-flex">
                                <div class="card flex-fill">
                                    @if($val["type"]=="image")
                                        <img src="uploads/{{$val['image']}}" width="420" height="345"
                                             alt="No image found" class="card-img-top">
                                    @elseif($val["type"]=="video")
                                        <iframe width="420" height="345"
                                                src="https://www.youtube.com/embed/{{$val["utubeline"]}}">
                                        </iframe>
                                    @endif
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">{{$val['title']}}</h5>
                                        @if($val["approved"]=="1")
                                            <h6>Status : Published</h6>
                                        @elseif($val["approved"]=="0")
                                            <h6>Status : Not Published</h6>
                                        @endif
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">{{$val['des']}}</p>
                                        <a class="btn btn-primary" href="change/{{$val['id']}}">Change Publish Status</a>
                                        <a class="btn btn-danger" href="dlt/{{$val['id']}}">Delete</a>
                                    </div>
                                </div>
                            </div>

                        @endforeach

                    </div>
                    {{ $value->links() }}
                </section>
                <!-- /Cards -->

                <!-- Dropdowns -->

                <!-- /Typography -->
            </div>

        </div>
    </div>
@endsection
