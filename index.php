<?php
session_start();
if(isset( $_SESSION['email'] ) ){

}else{
    header('location:register.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Porto Resume HTML Template</title>

    <!-- css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/materialize.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">

    <!-- my css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/reset.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="image.css">

</head>

<style>
.loader_bg {
    position: fixed;
    z-index: 999999;
    background: #fff;
    margin-top: 70px;
    margin-left: 30px;
    width: 91.7%;
    height: 100%;
}

.loader {
    margin-top: 325px;
    margin-left: 790px;
    border: 0 solid transparent;
    border-radius: 50%;
    width: 150px;
    height: 150px;
    position: absolute;
    /* top: calc(50vh - 75px);
        left: calc(50vh - 75px); */
}

.loader:before,
.loader:after {
    content: '';
    border: 1em solid #0026ff8c;
    border-radius: 50%;
    width: inherit;
    height: inherit;
    position: absolute;
    top: 0;
    left: 0;
    animation: loader 2s linear infinite;
    opacity: 0;
}

.loader:before {
    animation-delay: .5s;
}

@keyframes loader {
    0% {
        transform: scale(0);
        opacity: 0;
    }

    50% {
        opacity: 1;
    }

    100% {
        transform: scale(1);
        opacity: 0;
    }
}
</style>

<div class="loader_bg">
    <div class="loader">
    </div>

</div>


<body class="clearfix">

    <div data-scroll='0' class="thetop"></div>

    <div class="right-side-body" style="width: 100%;">

        <!-- ==================== header-section start ==================== -->
        <header id="header-section" class="header-section mb-30 clearfix">
            <div class="">
                <nav class="main-nav" style="position: fixed; z-index: 200; width: 91.9%; top: 0; overflow: hidden;">
                    <div class="nav-wrapper main-nav-wrapper">

                        <ul class="alternative-menu ul-li responsive_menu_fixed">

                            <li class="alt-search-area">
                                <form action="#">
                                    <input class="alternative-search" type="search" placeholder="search">
                                    <button><i class="fa fa-search"></i></button>
                                </form>
                            </li>
                            <li class="side-menu-btn right">
                                <a href="#" class="button-collapse waves-effect default" data-activates="mobile-demo">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.alternative-menu -->
                        <div class=" hello_icon_menu hello_single_index_menu1">
                            <ul class="ul-li-block side-nav" id="mobile-demo">

                                <li class="sn-user">
                                    <span class="sn-user-img">
                                        <img src="assets/images/profile.png" alt="Image">
                                    </span>
                                    <span class="sn-user-name">

                                    </span>
                                    <a href="#" class="sn-cv-link common-color">download cv</a>
                                </li>
                                <!-- /.sn-user -->

                                <li class="sn-item">
                                    <a href="http://webstrot.com/html/myporto/light_version/0" class="waves-effect">
                                        <i class="fa fa-home" aria-hidden="true"></i> Home
                                    </a>
                                </li>
                                <li class="sn-item">
                                    <a href="http://webstrot.com/html/myporto/light_version/1" class="waves-effect">
                                        <i class="fa fa-user-o" aria-hidden="true"></i> Engine
                                    </a>
                                </li>
                                <li class="sn-item">
                                    <a href="http://webstrot.com/html/myporto/light_version/2" class="waves-effect">
                                        <i class="fa fa-lightbulb-o" aria-hidden="true"></i> Part 1
                                    </a>
                                </li>
                                <li class="sn-item">
                                    <a href="http://webstrot.com/html/myporto/light_version/3" class="waves-effect">
                                        <i class="fa fa-graduation-cap" aria-hidden="true"></i> Part 2
                                    </a>
                                </li>
                                <li class="sn-item">
                                    <a href="http://webstrot.com/html/myporto/light_version/4" class="waves-effect">
                                        <i class="fa fa-briefcase" aria-hidden="true"></i> Part 3
                                    </a>
                                </li>
                                <li class="sn-item">
                                    <a href="" class="waves-effect">
                                        <div class="item-child-right right-align">
                                            <img src="assets/images/profile.png" alt="Image">
                                        </div>
                                    </a>
                                </li>
                                <li class="sn-item">
                                    <a href="" class="waves-effect default">
                                        Logout
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div class="hello_main_navigation hello_single_index_menu">
                            <ul id="nav-mobile" class="right main-nav-ul">
                                <h1 style="color: black; float: left; margin-right: 680px; margin-top: 40px;">App Name -
                                    <?php echo $_SESSION['email']; ?></h1>
                                <li class="active"><a href="index.html" class="nav-mobile">home</a></li>
                                <li><a href="engine.html" class="waves-effect default">engine</a></li>
                                <li><a href="#" class="waves-effect default">Part 1</a></li>
                                <li><a href="#" class="waves-effect default">Part 2</a></li>
                                <li><a href="#" class="waves-effect default">Part 3</a></li>
                                <li>
                                    <a href="#" class="" style="padding-top: 20px; height: 100px;">
                                        <img src="assets/images/profile.png" alt="Image"
                                            style="width: 55px; height: 55px; border-radius: 50%; margin-top: 5px;">
                                    </a>

                                </li>
                                <li><a href="register.html" class="waves-effect default">Logout</a></li>
                            </ul>
                        </div>


                    </div>
                    <!-- /.main-nav-wrapper -->
                </nav>
            </div>
            <!-- /.
			-->

        </header>
        <!-- /#header-section -->
        <!-- ==================== header-section end ==================== -->

        <!-- ==================== main-slider-section start ==================== -->
        <section id="main-slider-section" class="main-slider-section mb-30 clearfix" style="margin-top: 70px;">

            <div data-scroll='1' class="aboutme-section sec-p100-bg-bs mb-30 clearfix" id="about">
                <div class="Section-title">
                    <h2>
                        <i class="fa fa-user" aria-hidden="true"></i>
                        Welcome <?php echo $_SESSION['email']; ?>
                    </h2>

                    <p>

                        <a class="success" href="valuation.php">Start a Valuation</a>
                    </p>
                </div>


                <div class="personal-details-area">
                    <div class="row">
                        <div data-scroll='3' class="education-section sec-p100-bg-bs mb-30 clearfix"
                            style="width: 100%;">

                            <div class="col l6 m12 s12" style="width: 60%;">
                                <h2 class="title">How to Evaluate ( Score Out of 5 )</h2>
                                <table style="margin-top: 30px;">
                                    <tbody>
                                        <tr>
                                            <td class="td-w25" style="text-align: center; background: #dfebf5;">Score 1
                                                =</td>
                                            <td class="td-w65" style="background: #2196f3; color: #fff;">Very Bad</td>
                                        </tr>
                                        <tr>
                                            <td class="td-w25" style="text-align: center; background: #93cbf8;">Score 2
                                                =</td>
                                            <td class="td-w65">Bad</td>
                                        </tr>
                                        <tr>
                                            <td class="td-w25" style="text-align: center; background: #dfebf5;">Score 3
                                                =</td>
                                            <td class="td-w65" style="background: #2196f3; color: #fff;">Average</td>
                                        </tr>
                                        <tr>
                                            <td class="td-w25" style="text-align: center; background: #93cbf8;">Score 4
                                                =</td>
                                            <td class="td-w65">Good</td>
                                        </tr>
                                        <tr>
                                            <td class="td-w25" style="text-align: center; background: #dfebf5;">Score 5
                                                =</td>
                                            <td class="td-w65" style="background: #2196f3; color: #fff;">Very Good</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col l6 m12 s12" style="width: 40%;">
                                <table>
                                    <tbody>
                                        <div class="col l6 m12 s12" style="width: 100%;">
                                            <div class="personal-details-left">
                                                <ul class="service-list ul-li">
                                                    <li class="logodesign" style="width: 100%;">
                                                        <i class="fa fa-cogs" aria-hidden="true"></i>
                                                        <span class="service-name">Start Valuation</span>
                                                        <a href="valuation.php" class="more"><i
                                                                class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                                    </li>
                                                </ul>
                                                <!-- /.service-list -->
                                            </div>
                                            <!-- /.personal-details-left -->
                                        </div>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- row -->
                </div>
            </div>


    </div>


    <!-- jquery and bootstrap.js -->
    <script src="assets/js/jquery-3.1.1.min.js"></script>
    <script src="assets/js/materialize.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/circle-progress.js"></script>

    <!-- my custom js -->
    <script src="assets/js/custom.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="image.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
    setTimeout(function() {
        $('.loader_bg').fadeToggle();
    }, 1500);
    </script>

</body>


</html>