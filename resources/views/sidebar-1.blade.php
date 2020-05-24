<!doctype html>
<html lang="en">
<head>
    <title>Sidebar 07</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    {{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">--}}
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="{{asset('css/sidebar.css')}}" rel="stylesheet">
</head>
<body>

<div class="wrapper d-flex align-items-stretch chiller-theme">

    <nav id="sidebar" class="active sidebar-wrapper">
        <h1><a href="index.html" class="logo">M.</a></h1>
       {{-- <div class="sidebar-header">
            <div class="user-pic">
                <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
                     alt="User picture">
            </div>
            <div class="user-info">
          <span class="user-name">Jhon
            <strong>Smith</strong>
          </span>
                <span class="user-role">Administrator</span>
                <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>
            </div>
        </div>
        <!-- sidebar-header  -->--}}
        <div class="sidebar-menu">
        <ul class="list-unstyled components  mb-5">
            <li class="active">
                <a href="#"><span class="fa fa-home"></span> <span class="sidebar-txt">Home</span></a>
            </li>
            <li>
                <a href="#"><span class="fa fa-user"></span> <span class="sidebar-txt">About</span></a>
            </li>
            <li>
                <a href="#"><span class="fa fa-sticky-note"></span><span class="sidebar-txt"> Blog</span></a>
            </li>
            <li class="sidebar-dropdown">
                <a href="#">
                    <span class="fa fa-tachometer-alt"></span>
                    <span class="sidebar-txt">Dashboard</span>
                    <span class="badge badge-pill badge-warning sidebar-txt">New</span>
                </a>
                <div class="sidebar-submenu">
                    <ul>
                        <li>
                            <a href="#"><span class="fa fa-tachometer-alt"></span><span class="sidebar-txt">Dashboard</span>
                                <span class="badge badge-pill badge-success sidebar-txt mr-0">Pro</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"><span class="fa fa-tachometer-alt"></span><span class="sidebar-txt">Team Dashboard</span>
                                <span class="badge badge-pill badge-success sidebar-txt mr-0">26</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>

        </ul>
        </div>

        <div class="footer">
            <p>
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
            </p>
        </div>
    </nav>

    <!-- Page Content  -->
    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-primary col-whi">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only">Toggle Menu</span>
                </button>
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                </form>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="p-4">
            <div class="row">
                <div class="col-sm-6">
                    <ul id="tabs" class="nav nav-tabs">
                        <li class="nav-item"><a href="" data-target="#ongoing" data-toggle="tab" class="nav-link small text-uppercase">ongoing Projects</a></li>
                        <li class="nav-item"><a href="" data-target="#Completed" data-toggle="tab" class="nav-link small text-uppercase active">Completed Projects</a></li>
                        <li class="nav-item"><a href="" data-target="#Archived" data-toggle="tab" class="nav-link small text-uppercase">Archived Projects</a></li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <ul class="nav justify-content-end">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Product-Demo</a>
                        </li>

                        <li class="nav-item">
                            <ul id="tab" class="nav nav-tabs">
                                <li class="nav-item"><a href="" data-target="#grid" data-toggle="tab" class="nav-link small text-uppercase">Grid</a></li>
                                <li class="nav-item"><a href="" data-target="#list" data-toggle="tab" class="nav-link small text-uppercase active">List</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
            <div id="tabsContent" class="tab-content">
                <div id="ongoing" class="tab-pane fade">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header d-inline-flex">
                                        <span><i class="fa fa-book"></i></span>
                                        <span><i class="fa fa-book"></i></span>
                                        <span class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="list_drop" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="list_drop">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </span>
                                    </div>
                                    <h5 class="card-title">Project Name</h5>
                                    <div class="card-footer">
                                        <span><a href="#" class=""><i class="fa fa-book"></i></a></span>
                                        <span><a href="#" class=""><i class="fa fa-book"></i></a></span>
                                        <span><a href="#" class=""><i class="fa fa-book"></i></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Completed" class="tab-pane fade active show">
                    Completed
                </div>
                <div id="Archived" class="tab-pane fade">
                    Archived
                </div>
            </div>
        </div>
    </div>
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
    (function($) {

        "use strict";

        var fullHeight = function() {

            $('.js-fullheight').css('height', $(window).height());
            $(window).resize(function(){
                $('.js-fullheight').css('height', $(window).height());
            });

        };
        fullHeight();

        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');

            if($("#sidebar").hasClass('active')){
                $(".sidebar-txt").hide();
            }
            else{
                $(".sidebar-txt").show();
            }
        });

    })(jQuery);

</script>
<script>
    jQuery(function ($) {

        $(".sidebar-dropdown > a").click(function() {
            $(".sidebar-submenu").slideUp(200);
            if (
                $(this)
                    .parent()
                    .hasClass("active")
            ) {
                $(".sidebar-dropdown").removeClass("active");
                $(this)
                    .parent()
                    .removeClass("active");
            } else {
                $(".sidebar-dropdown").removeClass("active");
                $(this)
                    .next(".sidebar-submenu")
                    .slideDown(200);
                $(this)
                    .parent()
                    .addClass("active");
            }
        });

        $("#close-sidebar").click(function() {
            $(".page-wrapper").removeClass("toggled");
        });
        $("#show-sidebar").click(function() {
            $(".page-wrapper").addClass("toggled");
        });
    });
    $(document).ready(function(){
        if($("#sidebar").hasClass('active')){
            console.log('active');
            $(".sidebar-txt").hide();
        }
        else{
            $(".sidebar-txt").show();
        }

    });
</script>
</body>
</html>
