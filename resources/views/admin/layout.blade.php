<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>


    <link href="{{asset('adminasset/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('adminasset/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('adminasset/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('adminasset/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <link href="{{asset('adminasset/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('adminasset/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('adminasset/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('adminasset/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('adminasset/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('adminasset/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('adminasset/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('adminasset/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('adminasset/css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MOBILE HEADER -->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="dashboard">
                            <h2>Admin</h2>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="{{url('admin/dashboard')}}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        
                        <li class="has-sub">
                            <a class="js-arrow" href="{{url('admin/member/memberlist')}}">
                                <i class="fas fa-users"></i>Member List</a>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="{{url('admin/member/addmember')}}">
                                <i class="fas fa-users"></i>Add Member</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="{{url('admin/book/memberlist')}}">
                                <i class="fas fa-books"></i>Book List</a>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="{{url('admin/book/addbook')}}">
                                <i class="fas fa-books"></i>Add Book</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="{{url('admin/issue/issuebooklist')}}">
                                <i class="fas fa-books"></i>Issue Book List</a>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="{{url('admin/issue/issuebook')}}">
                                <i class="fas fa-books"></i>Issue Book</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="{{ route('auth.logout') }}">
                                <i class="zmdi zmdi-power"></i>Logout</a>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END MOBILE HEADER -->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="dashboard">
                    <h2>Admin</h2>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="{{url('admin/dashboard')}}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        
                        <li>
                            <a href="{{url('admin/member/memberlist')}}">
                                <i class="fas fa-users"></i>Member List</a>
                        </li>
                        <li>
                            <a href="{{url('admin/member/addmember')}}">
                                <i class="fas fa-users"></i>Add Member</a>
                        </li>
                        <li>
                            <a href="{{url('admin/book/booklist')}}">
                                <i class="fas fa-book"></i>Book List</a>
                        </li>
                        <li>
                            <a href="{{url('admin/book/addbook')}}">
                                <i class="fas fa-book"></i>Add Book</a>
                        </li>
                        <li>
                            <a href="{{url('admin/issue/issuebooklist')}}">
                                <i class="fas fa-book"></i>Issue Book List</a>
                        </li>
                        <li>
                            <a href="{{url('admin/issue/issuebook')}}">
                                <i class="fas fa-book"></i>Issue  Book</a>
                        </li>
                        <li>
                            <a href="{{ route('auth.logout') }}">
                                <i class="zmdi zmdi-power"></i>Logout</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            
                                            <h4>LMS</h4>
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="admin/dashboard">Admin</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="dashboard">Admin</a>
                                                    </h5>
                                                </div>
                                            </div>
                                            
                                            <div class="account-dropdown__footer">
                                                <a href="{{ route('auth.logout') }}">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        
                        @section('container')
                        @show
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2021 . All rights reserved by <a href="">Sheeyam</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{asset('adminasset/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('adminasset/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('adminasset/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('adminasset/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('adminasset/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('adminasset/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('adminasset/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('adminasset/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('adminasset/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('adminasset/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('adminasset/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('adminasset/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('adminasset/vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{asset('adminasset/js/main.js')}}"></script>

</body>

</html>
<!-- end document-->