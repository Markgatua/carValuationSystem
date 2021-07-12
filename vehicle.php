<?php
ob_start();
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

    <title>Vehicle Valuation</title>

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
                                        <i class="fa fa-lightbulb-o" aria-hidden="true"></i> Vehicle
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
                                <li><a href="index.html" class="nav-mobile">home</a></li>
                                <li><a href="engine.html" class="waves-effect default">engine</a></li>
                                <li class="active"><a href="vehicle.html" class="waves-effect default">vehicle</a></li>
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

            <div data-scroll='8' class="contact-me-section sec-p100-bg-bs mb-30 clearfix" id="contact">

                <div class="Section-title">
                    <h2>
                        <i class="fa fa-car" aria-hidden="true"></i>
                        Vehicle
                    </h2>

                    <p>
                        Enter The vehicle details
                    </p>
                </div>
                <!-- /.Section-title -->

                <div>

                    <div class="col l7 s13" style="width: 90%; margin-left: 80px;">
                        <div class="contact-right clearfix" style="width: 100%;">

                            <form action="vehicle.php" method="POST">

                                <div class="">
                                    <h2 class="title" style="color: #fff; margin-bottom: 40px; margin-left: 155px;">
                                        Enter Vehicle details</h2>
                                    <table style="margin-left: 150px;">
                                        <tbody>
                                            <tr style="width: 100%;">
                                                <td style="width: 10%; color: #fff;">Vehicle Make</td>
                                                <td style="color: #fff;">:</td>
                                                <td><input name="carMake"
                                                        style="border: solid 1px #fff; background: #fff; padding-left: 40px; width: 60%;"
                                                        type="text" placeholder="Enter Vehicle Make"></td>
                                            </tr>
                                            <tr style="width: 100%;">
                                                <td style="width: 10%; color: #fff;">Vehicle Model</td>
                                                <td style="color: #fff;">:</td>
                                                <td><input name="carModel"
                                                        style="border: solid 1px #fff; background: #fff; padding-left: 40px; width: 60%;"
                                                        type="text" placeholder="Enter Vehicle Model"></td>
                                            </tr>
                                            <tr style="width: 100%;">
                                                <td style="width: 10%; color: #fff;">Number Plate</td>
                                                <td style="color: #fff;">:</td>
                                                <td><input name="numberPlate"
                                                        style="border: solid 1px #fff; background: #fff; padding-left: 40px; width: 60%;"
                                                        type="text" placeholder="Enter Number Plate"></td>
                                            </tr>
                                            <tr style="width: 100%;">
                                                <td style="width: 10%; color: #fff;">Year of Manufacture</td>
                                                <td style="color: #fff;">:</td>
                                                <td><input name="yearOfManufacture"
                                                        style="border: solid 1px #fff; background: #fff; padding-left: 40px; width: 60%;"
                                                        type="text" placeholder="Enter Year of Manufacture"></td>
                                            </tr>
                                            <tr style="width: 100%;">
                                                <td style="width: 10%; color: #fff;">Vehicle Mileage</td>
                                                <td style="color: #fff;">:</td>
                                                <td><input name="carMilage"
                                                        style="border: solid 1px #fff; background: #fff; padding-left: 40px; width: 60%;"
                                                        type="text" placeholder="Enter Vehicle Mileage"></td>
                                            </tr>
                                            <tr style="width: 100%;">
                                                <td style="width: 10%; color: #fff;">Owner Email</td>
                                                <td style="color: #fff;">:</td>
                                                <td><input name="carOwnerEmail"
                                                        style="border: solid 1px #fff; background: #fff; padding-left: 40px; width: 60%;"
                                                        type="text" placeholder="Enter Vehicle Mileage"></td>
                                            </tr>
                                            <tr style="width: 100%;">
                                                <td style="width: 10%; color: #fff;">Vehicle Image</td>
                                                <td style="color: #fff;">:</td>
                                                <td>
                                                    <div
                                                        style="border: solid 1px #fff; background: #fff; padding-left: 40px; width: 63.5%;">
                                                        <div class="sections">

                                                            <section class="active">

                                                                <div class="images">
                                                                    <div class="pic">
                                                                        add image
                                                                    </div>
                                                                </div>

                                                            </section>

                                                        </div>

                                                    </div>
                                                    <!-- <input style="border: solid 1px #fff; background: #fff; padding-left: 40px; width: 40%;" type="text" placeholder="Enter Vehicle Image"> -->
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <input type="submit" value="submit" name="submit" type="button"
                                    class="submitForm custom-btn waves-effect"
                                    style="margin-top: 20px; margin-left: 800px; color: #fff; background-color: rgb(5, 184, 100);" />
                            </form>

                        </div>
                        <!-- /.contact-right -->
                    </div>
                    <!-- colm6 -->
                </div>
                <!-- row -->

            </div>
            <!-- row -->




    </div>
    <?php
    
    include "configure/connect.php";
    if ($_POST['submit']) {
        
        $numberPlate = $_POST['numberPlate'];
        $carModel =$_POST['carModel'];
        $carYearManfucture =$_POST['yearOfManufacture'];
        $carOwnerEmail= $_POST['carOwnerEmail'];
        $carMake =$_POST['carMake'];
        $carMilage =$_POST['carMilage'];

        $sql = "INSERT INTO carDetails (carNumberPlate, carMake, carModel, carYearManfucture, carMilage, carOwnerEmail)
        VALUES ('$numberPlate', '$carMake', '$carModel', $carYearManfucture, $carMilage, '$carOwnerEmail')";

        if ($conn->query($sql) === true) {
            if(isset( $_SESSION['email'] ) ){
                header('Location: engine.php?numberPlate='.$numberPlate.'');
            }

            
        
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
ob_end_flush();
?>

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