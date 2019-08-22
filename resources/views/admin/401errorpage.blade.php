<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{$site_setting->name}}</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Gradient Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->

    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('admin/files/assets/images/favicon.ico')}}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{asset('admin/files/assets/pages/waves/css/waves.min.css')}}" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/files/bower_components/bootstrap/css/bootstrap.min.css')}}">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{asset('admin/files/assets/pages/waves/css/waves.min.css')}}" type="text/css" media="all">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/files/assets/icon/themify-icons/themify-icons.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/files/assets/icon/font-awesome/css/font-awesome.min.css')}}">

	<!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/files/assets/css/style.css')}}">
</head>

<body themebg-pattern="theme6">
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header" header-theme="theme6">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <div class="mobile-search waves-effect waves-light">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="index.html">
                        <img class="img-fluid" src="{{asset($site_setting->logo2)}}" alt="Theme-Logo" />
                    </a>
                    </div>

                    
                </div>
            </nav>
        </div>
        <!-- Section start -->
        <section class="login-block offline-404">
            <!-- Container-fluid starts -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- auth body start -->
                        <div class="card auth-box">
                            <div class="card-block text-center">
                                <form>
                                    <h2>UnAuthorized Action</h2>
                                    <h2 class="m-b-15 text-muted">Oops! You don't have authorization to this page.</h2>
									<img src="{{asset('errorpage/images/401.png')}}" height="150px" width="150px"><br>
                                    <a href="{{route('dashboard')}}" class="btn btn-inverse m-t-30">Back to Home</a>
                                </form>
                            </div>
                        </div>
                        <!-- auth body end -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Section end -->
    </div>

    
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
	<script type="text/javascript" src="{{asset('admin/files/bower_components/jquery/js/jquery.min.js')}} "></script>
	<script type="text/javascript" src="{{asset('admin/files/bower_components/jquery-ui/js/jquery-ui.min.js')}} "></script>
	<script type="text/javascript" src="{{asset('admin/files/bower_components/popper.js/js/popper.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin/files/bower_components/bootstrap/js/bootstrap.min.js')}} "></script>
   
	<!-- waves js -->
	<script src="{{asset('admin/files/assets/pages/waves/js/waves.min.js')}}"></script>
   <!-- jquery slimscroll js -->
 <script type="text/javascript" src="{{asset('admin/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}} "></script>
 <!-- modernizr js -->
 <script type="text/javascript" src="{{asset('admin/files/bower_components/modernizr/js/modernizr.js')}} "></script>
    <script type="text/javascript" src="{{asset('admin/files/bower_components/modernizr/js/css-scrollbars.js')}}"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="{{asset('admin/files/assets/js/script.js')}}"></script>
</body>

</html>
