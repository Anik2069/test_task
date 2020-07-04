<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>The News Paper - News &amp; Lifestyle Magazine Template</title>

    <!-- Favicon -->
    <link rel="icon" href="{{"assets/"}}/assets/img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{"assets/"}}/assets/style.css">

</head>

<body>
<!-- ##### Header Area Start ##### -->
@include("public.header")
<div class="featured-post-area">
    <div class="container">

        <div class="row">
            <?php $c = 0 ?>
            <div class="col-12 col-md-8 col-lg-8">

                <div class="row">

                    <!-- Single Featured Post -->
                    @foreach($value as $val)
                        <?php $c = $c + 1 ?>

                        @if($c==1)
                            <div class="col-12 col-lg-6">
                                <div class="single-blog-post featured-post">
                                    <div class="post-thumb">
                                        <a href="#"><img src="img/bg-img/16.jpg" alt=""></a>
                                    </div>
                                    <div class="post-data">
                                        <a href="#" class="post-catagory">Finance</a>
                                        <a href="#" class="post-title">
                                            <h6>Title</h6>
                                        </a>
                                        <div class="post-meta">
                                            <p class="post-author">By <a href="#">Christinne Williams</a></p>
                                            <p class="post-excerp">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit.
                                                Nam
                                                eu metus sit amet odio sodales placerat. Sed varius leo ac leo
                                                fermentum, eu
                                                cursus nunc maximus. Integer convallis nisi nibh, et ornare neque
                                                ullamcorper
                                                ac. Nam id congue lectus, a venenatis massa. Maecenas justo libero,
                                                vulputate
                                                vel nunc id, blandit feugiat sem. </p>
                                            <!-- Post Like & Post Comment -->
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="post-like"><img src="img/core-img/like.png" alt="">
                                                    <span>392</span></a>
                                                <a href="#" class="post-comment"><img src="img/core-img/chat.png"
                                                                                      alt="">
                                                    <span>10</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach

                    <div class="col-12 col-lg-3">
                        <!-- Single Featured Post -->
                        <?php $c = 0 ?>
                        @foreach($value as $val)
                            <?php $c = $c + 1 ?>
                            @if($c==2)
                                <div class="single-blog-post featured-post-2">
                                    <div class="post-thumb">
                                        <a href="#"><img src="img/bg-img/17.jpg" alt=""></a>
                                    </div>
                                    <div class="post-data">
                                        <a href="#" class="post-catagory">Finance</a>
                                        <div class="post-meta">
                                            <a href="#" class="post-title">
                                                <h6>TItile</h6>
                                            </a>
                                            <!-- Post Like & Post Comment -->
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="post-like"><img src="img/core-img/like.png" alt="">
                                                    <span>392</span></a>
                                                <a href="#" class="post-comment"><img src="img/core-img/chat.png"
                                                                                      alt="">
                                                    <span>10</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        <?php $c = 0 ?>
                        @foreach($value as $val)
                            <?php $c = $c + 1 ?>
                            @if($c==3)
                                <div class="single-blog-post featured-post-2">
                                    <div class="post-thumb">
                                        <a href="#"><img src="img/bg-img/17.jpg" alt=""></a>
                                    </div>
                                    <div class="post-data">
                                        <a href="#" class="post-catagory">Finance</a>
                                        <div class="post-meta">
                                            <a href="#" class="post-title">
                                                <h6>TItile</h6>
                                            </a>
                                            <!-- Post Like & Post Comment -->
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="post-like"><img src="img/core-img/like.png" alt="">
                                                    <span>392</span></a>
                                                <a href="#" class="post-comment"><img src="img/core-img/chat.png"
                                                                                      alt="">
                                                    <span>10</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        @endif
                    @endforeach
                    <!-- Single Featured Post -->
                    </div>
                    <div class="col-12 col-lg-3">
                        <!-- Single Featured Post -->
                        <?php $c = 0 ?>
                        @foreach($value as $val)
                            <?php $c = $c + 1 ?>
                            @if($c==4)
                                <div class="single-blog-post featured-post-2">
                                    <div class="post-thumb">
                                        <a href="#"><img src="img/bg-img/17.jpg" alt=""></a>
                                    </div>
                                    <div class="post-data">
                                        <a href="#" class="post-catagory">Finance</a>
                                        <div class="post-meta">
                                            <a href="#" class="post-title">
                                                <h6>TItile</h6>
                                            </a>
                                            <!-- Post Like & Post Comment -->
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="post-like"><img src="img/core-img/like.png" alt="">
                                                    <span>392</span></a>
                                                <a href="#" class="post-comment"><img src="img/core-img/chat.png"
                                                                                      alt="">
                                                    <span>10</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        <?php $c = 0 ?>
                        @foreach($value as $val)
                            <?php $c = $c + 1 ?>
                            @if($c==5)
                                <div class="single-blog-post featured-post-2">
                                    <div class="post-thumb">
                                        <a href="#"><img src="img/bg-img/17.jpg" alt=""></a>
                                    </div>
                                    <div class="post-data">
                                        <a href="#" class="post-catagory">Finance</a>
                                        <div class="post-meta">
                                            <a href="#" class="post-title">
                                                <h6>TItile</h6>
                                            </a>
                                            <!-- Post Like & Post Comment -->
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="post-like"><img src="img/core-img/like.png" alt="">
                                                    <span>392</span></a>
                                                <a href="#" class="post-comment"><img src="img/core-img/chat.png"
                                                                                      alt="">
                                                    <span>10</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        @endif
                    @endforeach
                    <!-- Single Featured Post -->
                    </div>
                </div>

            </div>


            <div class="col-12 col-md-4 col-lg-4">
                <!-- Single Featured Post -->

                <div class="row">


                    <div class="col-md-12 col-xs-3">
                        <div class="single-blog-post featured-post-2">
                            <div class="post-thumb">
                                <a href="#"><img src="img/bg-img/18.jpg" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-catagory">Finance</a>
                                <div class="post-meta">
                                    <a href="#" class="post-title">
                                        <h6>Title</h6></a>
                                    <!-- Post Like & Post Comment -->
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="post-like"><img src="img/core-img/like.png" alt="">
                                            <span>392</span></a>
                                        <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-blog-post featured-post-2">
                            <div class="post-thumb">
                                <a href="#"><img src="img/bg-img/18.jpg" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-catagory">Finance</a>
                                <div class="post-meta">
                                    <a href="#" class="post-title">
                                        <h6>Title</h6></a>
                                    <!-- Post Like & Post Comment -->
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="post-like"><img src="img/core-img/like.png" alt="">
                                            <span>392</span></a>
                                        <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-3">
                        <div class="single-blog-post featured-post-2">
                            <div class="post-thumb">
                                <a href="#"><img src="img/bg-img/18.jpg" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-catagory">Finance</a>
                                <div class="post-meta">
                                    <a href="#" class="post-title">
                                        <h6>Title</h6></a>
                                    <!-- Post Like & Post Comment -->
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="post-like"><img src="img/core-img/like.png" alt="">
                                            <span>392</span></a>
                                        <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="single-blog-post featured-post-2">
                            <div class="post-thumb">
                                <a href="#"><img src="img/bg-img/18.jpg" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-catagory">Finance</a>
                                <div class="post-meta">
                                    <a href="#" class="post-title">
                                        <h6>Title</h6></a>
                                    <!-- Post Like & Post Comment -->
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="post-like"><img src="img/core-img/like.png" alt="">
                                            <span>392</span></a>
                                        <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-3">
                        <div class="single-blog-post featured-post-2">
                            <div class="post-thumb">
                                <a href="#"><img src="img/bg-img/18.jpg" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-catagory">Finance</a>
                                <div class="post-meta">
                                    <a href="#" class="post-title">
                                        <h6>Title</h6></a>
                                    <!-- Post Like & Post Comment -->
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="post-like"><img src="img/core-img/like.png" alt="">
                                            <span>392</span></a>
                                        <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Single Featured Post -->

            </div>


        </div>
    </div>
</div>

<footer class="footer-area">

    <!-- Main Footer Area -->
    <div class="main-footer-area">
        <div class="container">
            <div class="row">

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="footer-widget-area mt-80">
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
                        </div>
                        <!-- List -->
                        <ul class="list">
                            <li><a href="mailto:contact@youremail.com">contact@youremail.com</a></li>
                            <li><a href="tel:+4352782883884">+43 5278 2883 884</a></li>
                            <li><a href="http://yoursitename.com">www.yoursitename.com</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-2">
                    <div class="footer-widget-area mt-80">
                        <!-- Title -->
                        <h4 class="widget-title">Politics</h4>
                        <!-- List -->
                        <ul class="list">
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Markets</a></li>
                            <li><a href="#">Tech</a></li>
                            <li><a href="#">Luxury</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-4 col-lg-2">
                    <div class="footer-widget-area mt-80">
                        <!-- Title -->
                        <h4 class="widget-title">Featured</h4>
                        <!-- List -->
                        <ul class="list">
                            <li><a href="#">Football</a></li>
                            <li><a href="#">Golf</a></li>
                            <li><a href="#">Tennis</a></li>
                            <li><a href="#">Motorsport</a></li>
                            <li><a href="#">Horseracing</a></li>
                            <li><a href="#">Equestrian</a></li>
                            <li><a href="#">Sailing</a></li>
                            <li><a href="#">Skiing</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-4 col-lg-2">
                    <div class="footer-widget-area mt-80">
                        <!-- Title -->
                        <h4 class="widget-title">FAQ</h4>
                        <!-- List -->
                        <ul class="list">
                            <li><a href="#">Aviation</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Traveller</a></li>
                            <li><a href="#">Destinations</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Food/Drink</a></li>
                            <li><a href="#">Hotels</a></li>
                            <li><a href="#">Partner Hotels</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-4 col-lg-2">
                    <div class="footer-widget-area mt-80">
                        <!-- Title -->
                        <h4 class="widget-title">+More</h4>
                        <!-- List -->
                        <ul class="list">
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Architecture</a></li>
                            <li><a href="#">Arts</a></li>
                            <li><a href="#">Autos</a></li>
                            <li><a href="#">Luxury</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Footer Area -->
    <div class="bottom-footer-area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Copywrite -->
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                        All rights reserved | This template is made with <i class="fa fa-heart-o"
                                                                            aria-hidden="true"></i> by <a
                            href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area Start ##### -->

<!-- ##### All Javascript Files ##### -->
<!-- jQuery-2.2.4 js -->
@include("public.j_s")
</body>

</html>
