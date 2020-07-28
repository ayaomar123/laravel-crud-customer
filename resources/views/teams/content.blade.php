
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="" />

    <link rel="icon" href="{{asset('assets/images/favicon.ico')}}">

    <title>Aya | Customer</title>

    <link rel="stylesheet" href="{{asset('assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-icons/entypo/css/entypo.css')}}">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/neon-core.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/neon-theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/neon-forms.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/neon-rtl.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">

    <script src="{{asset('assets/js/jquery-1.11.3.min.js')}}"></script>

    <!--[if lt IE 9]><script src="{{asset('assets/js/ie8-responsive-file-warning.js')}}"></script><![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body class="page-body  page-fade" data-url="http://neon.dev">

<div class="page-container">
    <div class="sidebar-menu">
        <div class="sidebar-menu-inner">
            <header class="logo-env">
                <!-- logo -->
                <div class="logo">
                    <a href="{{route('index')}}">
                        <img src="{{asset('assets/images/logo@2x.png')}}" width="120" alt="" />
                    </a>
                    @yield('sidebar')
                </div>


                <!-- logo collapse icon -->
                <div class="sidebar-collapse">
                    <a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                        <i class="entypo-menu"></i>
                    </a>
                </div>

                <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
                <div class="sidebar-mobile-menu visible-xs">
                    <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
                        <i class="entypo-menu"></i>
                    </a>

                </div>

            </header>
            <ul id="main-menu" class="main-menu">
                <!-- add class "multiple-expanded" to allow multiple submenus to open -->
                <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->

                <li class="has-sub">
                    <a href="layout-api.html">
                        <i class="entypo-layout"></i>
                        <span class="title">Layouts</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{asset('layout-api.html')}}">
                                <span class="title">Layout API</span>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>

    <div class="main-content">
        <div class="row">
            <!-- Profile Info and Notifications -->
            <div class="col-md-6 col-sm-8 clearfix">

                <ul class="user-info pull-left pull-none-xsm">

                    <!-- Profile Info -->
                    <li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{asset('assets/images/thumb-1@2x.png')}}" alt="" class="img-circle" width="44" />
                            Customer Admin
                        </a>


                    </li>

                </ul>



            </div>
            @yield('content')
        </div>
        <hr/>
        <br/>


        <!-- Footer -->
        <footer class="main fixed-bottom" >

            &copy; 2015 <strong>Neon</strong> Admin Theme by <a href="http://laborator.co" target="_blank">Laborator</a>

        </footer>
    </div>

    </div>




<!-- Imported styles on this page -->
<link rel="stylesheet" href="{{asset('assets/js/jvectormap/jquery-jvectormap-1.2.2.css')}}">
<link rel="stylesheet" href="{{asset('assets/js/rickshaw/rickshaw.min.css')}}">

<!-- Bottom scripts (common) -->
<script src="{{asset('assets/js/gsap/TweenMax.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/js/joinable.js')}}"></script>
<script src="{{asset('assets/js/resizeable.js')}}"></script>
<script src="{{asset('assets/js/neon-api.js')}}"></script>
<script src="{{asset('assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>


<!-- Imported scripts on this page -->
<script src="{{asset('assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js')}}"></script>
<script src="{{asset('assets/js/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('assets/js/rickshaw/vendor/d3.v3.js')}}"></script>
<script src="{{asset('assets/js/rickshaw/rickshaw.min.js')}}"></script>
<script src="{{asset('assets/js/raphael-min.js')}}"></script>
<script src="{{asset('assets/js/morris.min.js')}}"></script>
<script src="{{asset('assets/js/toastr.js')}}"></script>
<script src="{{asset('assets/js/neon-chat.js')}}"></script>


<!-- JavaScripts initializations and stuff -->
<script src="{{asset('assets/js/neon-custom.js')}}"></script>
<!-- Demo Settings -->
<script src="{{asset('assets/js/neon-demo.js')}}"></script>

</body>
</html>
