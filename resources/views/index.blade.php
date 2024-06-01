<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gallery</title>
    <meta name="keywords" content="Gallery website"/>
    <meta name="description" content="Gallery">
    <meta name="author" content="Gallery">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap Core CSS -->
    <!-- Owl Carousel Assets -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css"/>

    <!--Google Fonts-->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800|Raleway:400,500,700|Roboto:300,400,500,700,900|Ubuntu:300,300i,400,400i,500,500i,700"
        rel="stylesheet">
    <!-- Main CSS -->
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!--======= header =======-->
    <header>
        <div class="container-full">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12">
                    <a id="main-category-toggler" class="hidden-md hidden-lg hidden-md" href="#">
                        <i class="fa fa-navicon"></i>
                    </a>
                    <a id="main-category-toggler-close" class="hidden-md hidden-lg hidden-md" href="#">
                        <i class="fa fa-close"></i>
                    </a>
                    <div id="logo">
                        <a href="/"><img src="img/logo.png" alt="" style="height: 45px;"></a>
                    </div>
                </div><!-- // col-md-2 -->
                <div class="col-lg-3 col-md-3 col-sm-6 hidden-xs hidden-sm">
                </div><!-- // col-md-3 -->
                <div class="col-lg-3 col-md-3 col-sm-5 hidden-xs hidden-sm">
                </div><!-- // col-md-4 -->
                <div class="col-lg-2 col-md-2 col-sm-4 hidden-xs hidden-sm">
                    <!--  -->
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 hidden-xs hidden-sm">
                    <div class="dropdown">
                        <a data-toggle="dropdown" href="#" class="user-area">
                            <div class="thumb"><img
                                    src="https://0.gravatar.com/avatar/6a364e96288458765d7fb94777972d2e95458ddff85c92f5785a827cb5f6304e?s=80" alt="">
                            </div>
                            <h2>میلاد رضائیان</h2>
                            <h3>اشتراک عکس</h3>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu account-menu">
                            <li><a href="#"><i class="fa fa-edit color-1"></i>ویرایش پروفایل</a></li>
                            <li><a href="#"><i class="fa fa-photo color-2"></i>آپلود عکس جدید</a></li>
                            <li><a href="#"><i class="fa fa-sign-out color-4"></i>خروج</a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- // row -->
        </div><!-- // container-full -->
    </header><!-- // header -->

    <div class="site-output">
        <div id="all-output" class="col-md-12">
            <h1 class="new-image-title"><i class="fa fa-bolt"></i> آخرین عکس ها</h1>
            <div class="row">

                <!-- image-item -->
                @foreach ($images as $image)
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="image-item">
                            <div class="thumb">
                                <div class="hover-efect"></div>
                            </div>
                            <div class="image-info">
                                <a href="#" class="title">{{ $image->name }}</a>
                                <a class="channel-name" href="#">میلاد رضائیان<span>
                                            <i class="fa fa-check-circle"></i></span></a>
                                <span class="date"><i class="fa fa-clock-o"></i>{{ $image->created_at }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div><!-- // row -->


    </div>

    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
