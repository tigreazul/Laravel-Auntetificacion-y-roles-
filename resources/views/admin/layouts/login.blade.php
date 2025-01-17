
<!DOCTYPE html>
<html lang="es">
<head>

    <title>Login</title>
    <!--[if lt IE 10]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="." />
    <meta name="keywords" content="" />
    <meta name="author" content="zkated" />

    <!-- <link rel="icon" href="../files/assets/images/favicon.ico" type="image/x-icon"> -->

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="{{ asset('theme_admin/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{ asset('theme_admin/css/waves.min.css')}}" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme_admin/css/feather.css')}}">
    

    <!-- <link rel="stylesheet" type="text/css" href="../files/assets/icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="../files/assets/icon/icofont/css/icofont.css"> -->

    <link rel="stylesheet" type="text/css" href="{{ asset('theme_admin/css/font-awesome-n.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('theme_admin/css/style.css')}}">
    <!-- <link rel="stylesheet" type="text/css" href="../files/assets/css/pages.css"> -->
</head>
<body themebg-pattern="theme1">

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

    <section class="login-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <form class="md-float-material form-material">
                        <div class="text-center">

                            SYS.COBRANZA
                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Iniciar Sesión</h3>
                                    </div>
                                </div>
                                <!-- <p class="text-muted text-center p-b-5">Sign in with your regular account</p> -->
                                <div class="form-group form-primary">
                                    <input type="text" name="user-name" class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Email</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="password" name="password" class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Password</label>
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">Remember me</span>
                                            </label>
                                        </div>
                                        <!-- <div class="forgot-phone text-right float-right">
                                            <a href="auth-reset-password.html" class="text-right f-w-600"> Forgot Password?</a>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Entrar</button>
                                    </div>
                                </div>
                                <!-- <p class="text-inverse text-left">Don't have an account?<a href="auth-sign-up-social.html"> <b>Register here </b></a>for free!</p> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- </div> -->
    </section>


    <!--[if lt IE 10]>
    <div class="ie-warning">
        <h1>Warning!!</h1>
        <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
        <div class="iew-container">
            <ul class="iew-download">
                <li>
                    <a href="http://www.google.com/chrome/">
                        <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                        <div>Chrome</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.mozilla.org/en-US/firefox/new/">
                        <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                        <div>Firefox</div>
                    </a>
                </li>
                <li>
                    <a href="http://www.opera.com">
                        <img src="../files/assets/images/browser/opera.png" alt="Opera">
                        <div>Opera</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.apple.com/safari/">
                        <img src="../files/assets/images/browser/safari.png" alt="Safari">
                        <div>Safari</div>
                    </a>
                </li>
                <li>
                    <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                        <img src="../files/assets/images/browser/ie.png" alt="">
                        <div>IE (9 & above)</div>
                    </a>
                </li>
            </ul>
        </div>
        <p>Sorry for the inconvenience!</p>
    </div>
    <![endif]-->


    <script type="text/javascript" src="{{ asset('theme_admin/js/jquery.min.js')}}"></script> 
    <script type="text/javascript" src="{{ asset('theme_admin/js/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('theme_admin/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('theme_admin/js/bootstrap.min.js')}}"></script>

    <script src="{{ asset('theme_admin/js/waves.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('theme_admin/js/jquery.slimscroll.js')}}"></script>

    <script type="text/javascript" src="{{ asset('theme_admin/js/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme_admin/js/css-scrollbars.js') }}"></script>
    <script type="14887099c611f5e9388de7e5-text/javascript" src="../files/assets/js/common-pages.js"></script>

    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/a2bd7673/cloudflare-static/rocket-loader.min.js" data-cf-settings="14887099c611f5e9388de7e5-|49" defer=""></script>
</body>
</html>
