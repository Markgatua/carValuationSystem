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

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="asset/css/vehicle.css">

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


<body class="clearfix" style="width: 103.4%;">


    <div class="right-side-body" style="width: 100%; margin-right: 30px;">

        <!-- ==================== header-section start ==================== -->
        <header id="header-section" class="header-section mb-30 clearfix">
            <div class="">
                <nav class="main-nav" style="position: fixed; z-index: 200; width: 94.5%; top: 0; overflow: hidden;">
                    <div class="nav-wrapper main-nav-wrapper">

                        <ul class="alternative-menu ul-li responsive_menu_fixed">


                            <li class="side-menu-btn right">
                                <a href="#" class="button-collapse waves-effect default" data-activates="mobile-demo">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.alternative-menu -->
                        <div class=" hello_icon_menu hello_single_index_menu1">
                            <ul class="ul-li-block side-nav" id="mobile-demo">

                                <li class="sn-item">
                                    <a href="index.php" class="waves-effect">
                                        <i class="fa fa-home" aria-hidden="true"></i> Home
                                    </a>
                                </li>
                                <li class="sn-item">
                                    <a href="http://webstrot.com/html/myporto/light_version/2" class="waves-effect">
                                        <i class="fa fa-lightbulb-o" aria-hidden="true"></i> Vehicle Evaluation
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
                                <h1 style="color: black; float: left; margin-top: 40px; font-size: 16px;"><b>App Name -
                                        <?php echo$_SESSION['email'] ?></b></h1>
                                <li><a href="index.html" class="nav-mobile" style="margin-left: 800px;">home</a></li>
                                <li class="active"><a href="vehicle.html" class="waves-effect default">vehicle
                                        Evaluation</a></li>
                                <li>
                                    <a href="#" class=""
                                        style="padding-top: 0px; height: 100px; background-color: #fff;">
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
        <section id="main-slider-section" class="main-slider-section mb-30 clearfix" style="margin-top: 40px;">

            <div data-scroll='8' class="contact-me-section sec-p100-bg-bs mb-30 clearfix" id="contact">


                <!-- /.Section-title -->

                <div>

                    <div class="my-portfolio-section mb-30 clearfix" style="margin-right: 13%;">
                        <div class="Section-title">
                            <h2>
                                <i class="fa fa-car" aria-hidden="true"></i>
                                Start Vehicle Evaluation
                            </h2>
                            <span>engine</span>

                        </div>
                        <div class="portfolio-area">
                            <div class="popular-categories">
                                <div class="container">
                                    <div class="row" style=" width: 100%;">
                                        <div class="col-lg-12">
                                            <div class="naccs" style="background: #2196f3;">
                                                <div class="grid">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <div class="menu">
                                                                <div class="first-thumb active">
                                                                    <div class="thumb">
                                                                        Vehicle
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="thumb">
                                                                        Body
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="thumb">
                                                                        Engine
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="thumb">
                                                                        Brakes
                                                                    </div>
                                                                </div>
                                                                <div class="last-thumb">
                                                                    <div class="thumb">
                                                                        Suspension
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-9 align-self-center">
                                                            <form action="valuation.php" method="POST"
                                                                enctype="multipart/form-data">

                                                                <ul class="nacc">
                                                                    <li class="active">
                                                                        <div>
                                                                            <div class="thumb">
                                                                                <div class="Section-title">
                                                                                    <h2 style="color: #fff;">
                                                                                        <i class="fa fa-car"
                                                                                            style="color: #fff;"
                                                                                            aria-hidden="true"></i>
                                                                                        Vehicle
                                                                                    </h2>
                                                                                    <p style="color: #fff;">
                                                                                        Please Enter the correct values
                                                                                        and details.
                                                                                    </p>
                                                                                </div>
                                                                                <!-- /.Section-title -->

                                                                                <div>

                                                                                    <div class="col l7 s13"
                                                                                        style="width: 100%;">
                                                                                        <div class="contact-right clearfix"
                                                                                            style="width: 100%;">


                                                                                            <div
                                                                                                style=" margin-right: 100px;">
                                                                                                <h2 class="title"
                                                                                                    style="color: #fff; margin-bottom: 40px;">
                                                                                                    Enter Vehicle
                                                                                                    details</h2>
                                                                                                <table>
                                                                                                    <tbody>
                                                                                                        <tr
                                                                                                            style="width: 100%;">
                                                                                                            <td
                                                                                                                style="color: #fff;">
                                                                                                                Vehicle
                                                                                                                Make
                                                                                                            </td>
                                                                                                            <td
                                                                                                                style="color: #fff;">
                                                                                                                :</td>
                                                                                                            <td><input
                                                                                                                    name="vehicleMake"
                                                                                                                    style="border: solid 1px #fff; background: #fff; padding-left: 40px; width: 90%;"
                                                                                                                    type="text"
                                                                                                                    placeholder="Enter Vehicle Make"
                                                                                                                    required>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <tr
                                                                                                            style="width: 100%;">
                                                                                                            <td
                                                                                                                style="color: #fff;">
                                                                                                                Vehicle
                                                                                                                Model
                                                                                                            </td>
                                                                                                            <td
                                                                                                                style="color: #fff;">
                                                                                                                :</td>
                                                                                                            <td><input
                                                                                                                    name="vehicleModel"
                                                                                                                    style="border: solid 1px #fff; background: #fff; padding-left: 40px; width: 90%;"
                                                                                                                    type="text"
                                                                                                                    placeholder="Enter Vehicle Model"
                                                                                                                    required>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <tr
                                                                                                            style="width: 100%;">
                                                                                                            <td
                                                                                                                style="color: #fff;">
                                                                                                                Number
                                                                                                                Plate
                                                                                                            </td>
                                                                                                            <td
                                                                                                                style="color: #fff;">
                                                                                                                :</td>
                                                                                                            <td><input
                                                                                                                    name="vehicleNumberPlate"
                                                                                                                    style="border: solid 1px #fff; background: #fff; padding-left: 40px; width: 90%;"
                                                                                                                    type="text"
                                                                                                                    placeholder="Enter Number Plate"
                                                                                                                    required>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <tr
                                                                                                            style="width: 100%;">
                                                                                                            <td
                                                                                                                style="width: 30%; color: #fff;">
                                                                                                                Year of
                                                                                                                Manufacture
                                                                                                            </td>
                                                                                                            <td
                                                                                                                style="color: #fff;">
                                                                                                                :</td>
                                                                                                            <td><input
                                                                                                                    name="vehicleYearOfManufacture"
                                                                                                                    style="border: solid 1px #fff; background: #fff; padding-left: 40px; width: 90%;"
                                                                                                                    type="int"
                                                                                                                    placeholder="Enter Year of Manufacture"
                                                                                                                    required>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <tr
                                                                                                            style="width: 100%;">
                                                                                                            <td
                                                                                                                style="color: #fff;">
                                                                                                                Vehicle
                                                                                                                Mileage
                                                                                                            </td>
                                                                                                            <td
                                                                                                                style="color: #fff;">
                                                                                                                :</td>
                                                                                                            <td><input
                                                                                                                    name="vehicleMilage"
                                                                                                                    style="border: solid 1px #fff; background: #fff; padding-left: 40px; width: 90%;"
                                                                                                                    type="text"
                                                                                                                    placeholder="Enter Vehicle Mileage"
                                                                                                                    required>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <tr
                                                                                                            style="width: 100%;">
                                                                                                            <td
                                                                                                                style="color: #fff;">
                                                                                                                Price of
                                                                                                                a Brand
                                                                                                                New Car
                                                                                                                of this
                                                                                                                Model
                                                                                                            </td>
                                                                                                            <td
                                                                                                                style="color: #fff;">
                                                                                                                :</td>
                                                                                                            <td><input
                                                                                                                    name="newCarPrice"
                                                                                                                    style="border: solid 1px #fff; background: #fff; padding-left: 40px; width: 90%;"
                                                                                                                    type="int"
                                                                                                                    placeholder="Enter Vehicle Mileage"
                                                                                                                    required>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <tr
                                                                                                            style="width: 100%;">
                                                                                                            <td
                                                                                                                style="color: #fff;">
                                                                                                                Vehicle
                                                                                                                Image
                                                                                                            </td>
                                                                                                            <td
                                                                                                                style="color: #fff;">
                                                                                                                :</td>
                                                                                                            <td>
                                                                                                                <div
                                                                                                                    style="border: solid 1px #fff; background: #fff; padding-left: 40px; width: 98%;  margin-bottom: 30px">
                                                                                                                    <div
                                                                                                                        class="sections">

                                                                                                                        <section
                                                                                                                            class="active">

                                                                                                                            <div
                                                                                                                                class="images">
                                                                                                                                <div>

                                                                                                                                    <input
                                                                                                                                        class="pic"
                                                                                                                                        type="file"
                                                                                                                                        name="uploadfile"
                                                                                                                                        value="" />
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


                                                                                        </div>
                                                                                        <!-- /.contact-right -->
                                                                                    </div>
                                                                                    <!-- colm6 -->
                                                                                </div>

                                                                                <!-- </div> -->
                                                                            </div>

                                                                        </div>
                                                                        <div class="naccs"
                                                                            style="background: transparent; margin-top: 975px;">
                                                                            <div class="menu">
                                                                                <div class="first-thumb active"
                                                                                    style="height: 0px; width: 0px;">
                                                                                </div>
                                                                                <div class="thumb"
                                                                                    style="height: 65px; width: 230px; margin-bottom: 40px; margin-left: 75.5%; background: rgb(5, 184, 100);">
                                                                                    <h5
                                                                                        style="text-align: center; padding-top: 20px; font-size: 20px;">
                                                                                        Next Part</h5>
                                                                                </div>
                                                                                <div
                                                                                    style="height: 1px; width: 0px; background: transparent;">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div>
                                                                            <div class="thumb">
                                                                                <!-- <div class="row"> -->
                                                                                <div data-scroll='8'
                                                                                    class="contact-me-section"
                                                                                    style="background: #2196f3; padding-right: 35px;"
                                                                                    id="contact">
                                                                                    <div class="Section-title">
                                                                                        <h2 style="color: #fff;">
                                                                                            <i style="color: #fff;"
                                                                                                class="fa fa-delicious"
                                                                                                aria-hidden="true"></i>
                                                                                            body
                                                                                        </h2>
                                                                                        <span>body</span>
                                                                                        <p style="color: #fff;">
                                                                                            Enter the details on the
                                                                                            Car's body based on the
                                                                                            level of damage.
                                                                                        </p>
                                                                                        <div class="naccs"
                                                                                            style="background: #2196f3;">
                                                                                            <div class="menu">
                                                                                                <div class="first-thumb"
                                                                                                    style="height: 40px; width: 130px;">
                                                                                                    <h5
                                                                                                        style="text-align: center; padding-top: 12px; font-size: 15px;">
                                                                                                        back</h5>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- /.Section-title -->

                                                                                    <div class="row">
                                                                                        <div class="col l7 s13">
                                                                                            <div
                                                                                                class="contact-right clearfix">



                                                                                                <h2 class="title mb-30">
                                                                                                    enter details</h2>
                                                                                                <div class="contact-left"
                                                                                                    style="height: 10px; margin-bottom: 150px;">

                                                                                                    <div class="cont-item phone"
                                                                                                        style="height: 1px; padding-top: 20px; padding-bottom: 20px; color: black;">
                                                                                                        <h2 class="title mb-30"
                                                                                                            style="color: rgb(0, 0, 0);">
                                                                                                            enter score
                                                                                                            out of 5
                                                                                                        </h2>
                                                                                                        <div class="cont-numbers"
                                                                                                            style="height: 0px; margin-bottom: 50px;">
                                                                                                            <div
                                                                                                                class="input-field">
                                                                                                                <input
                                                                                                                    name="bodyScore"
                                                                                                                    type="text"
                                                                                                                    style="color: black;"
                                                                                                                    required>
                                                                                                                <label
                                                                                                                    style="color: rgb(160, 128, 128);">Score</label>
                                                                                                                <div
                                                                                                                    class="response">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>

                                                                                                <div
                                                                                                    class="contact-left">

                                                                                                    <div class="cont-item phone"
                                                                                                        style="background-color: transparent;">
                                                                                                        <h2
                                                                                                            class="title mb-30">
                                                                                                            In Detail,
                                                                                                            Describe the
                                                                                                            Condition of
                                                                                                            This Part
                                                                                                        </h2>
                                                                                                        <div
                                                                                                            class="cont-numbers">
                                                                                                            <div
                                                                                                                class="input-field">

                                                                                                                <textarea
                                                                                                                    name="bodyDetails"
                                                                                                                    rows="7"
                                                                                                                    class="materialize-textarea"
                                                                                                                    required></textarea>
                                                                                                                <label
                                                                                                                    style="color: rgb(234, 239, 247);">Description</label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>

                                                                                                <div class="contact-left"
                                                                                                    style="height: 10px; margin-bottom: 150px;">

                                                                                                    <div
                                                                                                        style="border: solid 1px #fff; background: #fff; padding-left: 40px; width: 100%; margin-bottom: 30px; margin-top: 50px;">
                                                                                                        <div
                                                                                                            class="sections">

                                                                                                            <section
                                                                                                                class="active">

                                                                                                                <div
                                                                                                                    class="images">
                                                                                                                    <div
                                                                                                                        class="pic">
                                                                                                                        add
                                                                                                                        image
                                                                                                                    </div>
                                                                                                                </div>

                                                                                                            </section>

                                                                                                        </div>

                                                                                                    </div>

                                                                                                </div>



                                                                                            </div>

                                                                                        </div>

                                                                                    </div>

                                                                                </div>

                                                                                <div class="naccs"
                                                                                    style="background: transparent; margin-top: 40px;">
                                                                                    <div class="menu">
                                                                                        <div class="first-thumb active"
                                                                                            style="height: 0px; width: 0px;">
                                                                                        </div>
                                                                                        <div class="first-thumb active"
                                                                                            style="height: 0px; width: 0px;">
                                                                                        </div>
                                                                                        <div class="thumb"
                                                                                            style="height: 65px; width: 230px; margin-bottom: 40px; margin-left: 73.5%; background: rgb(5, 184, 100);">
                                                                                            <h5
                                                                                                style="text-align: center; padding-top: 20px; font-size: 20px;">
                                                                                                Next Part</h5>
                                                                                        </div>
                                                                                        <div
                                                                                            style="height: 1px; width: 0px; background: transparent;">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div>
                                                                            <div class="thumb">
                                                                                <!-- <div class="row"> -->
                                                                                <div data-scroll='8'
                                                                                    class="contact-me-section"
                                                                                    style="background: #2196f3; padding-right: 35px;"
                                                                                    id="contact">

                                                                                    <div class="Section-title">
                                                                                        <h2 style="color: #fff;">
                                                                                            <i style="color: #fff;"
                                                                                                class="fa fa-cogs"
                                                                                                aria-hidden="true"></i>
                                                                                            Engine
                                                                                        </h2>
                                                                                        <span>Engine</span>
                                                                                        <p style="color: #fff;">
                                                                                            Enter the engine details in
                                                                                            a brief description.
                                                                                        </p>
                                                                                        <div class="naccs"
                                                                                            style="background: #2196f3;">
                                                                                            <div class="menu">
                                                                                                <div class="first-thumb active"
                                                                                                    style="height: 0px; width: 0px;">
                                                                                                </div>
                                                                                                <div class="first-thumb"
                                                                                                    style="height: 40px; width: 130px;">
                                                                                                    <h5
                                                                                                        style="text-align: center; padding-top: 12px; font-size: 15px;">
                                                                                                        Back</h5>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- /.Section-title -->

                                                                                    <div class="row">
                                                                                        <div class="col l7 s13">
                                                                                            <div
                                                                                                class="contact-right clearfix">



                                                                                                <h2 class="title mb-30">
                                                                                                    enter details</h2>
                                                                                                <div class="contact-left"
                                                                                                    style="height: 10px; margin-bottom: 150px;">

                                                                                                    <div class="cont-item phone"
                                                                                                        style="height: 1px; padding-top: 20px; padding-bottom: 20px; color: black;">
                                                                                                        <h2 class="title mb-30"
                                                                                                            style="color: rgb(0, 0, 0);">
                                                                                                            enter score
                                                                                                            out of 5
                                                                                                        </h2>
                                                                                                        <div class="cont-numbers"
                                                                                                            style="height: 0px; margin-bottom: 50px;">
                                                                                                            <div
                                                                                                                class="input-field">
                                                                                                                <input
                                                                                                                    name="engineScore"
                                                                                                                    type="text"
                                                                                                                    style="color: black;">
                                                                                                                <label
                                                                                                                    style="color: rgb(160, 128, 128);">Score</label>
                                                                                                                <div
                                                                                                                    class="response">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>

                                                                                                <div
                                                                                                    class="contact-left">

                                                                                                    <div class="cont-item phone"
                                                                                                        style="background-color: transparent;">
                                                                                                        <h2
                                                                                                            class="title mb-30">
                                                                                                            In Detail,
                                                                                                            Describe the
                                                                                                            Condition of
                                                                                                            This Part
                                                                                                        </h2>
                                                                                                        <div
                                                                                                            class="cont-numbers">
                                                                                                            <div
                                                                                                                class="input-field">

                                                                                                                <textarea
                                                                                                                    name="engineDetails"
                                                                                                                    rows="7"
                                                                                                                    class="materialize-textarea"
                                                                                                                    required></textarea>
                                                                                                                <label
                                                                                                                    style="color: rgb(234, 239, 247);">Description</label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>

                                                                                                <div class="contact-left"
                                                                                                    style="height: 10px; margin-bottom: 150px;">

                                                                                                    <div
                                                                                                        style="border: solid 1px #fff; background: #fff; padding-left: 40px; width: 100%; margin-bottom: 30px; margin-top: 50px;">
                                                                                                        <div
                                                                                                            class="sections">

                                                                                                            <section
                                                                                                                class="active">

                                                                                                                <div
                                                                                                                    class="images">
                                                                                                                    <div
                                                                                                                        class="pic">
                                                                                                                        add
                                                                                                                        image
                                                                                                                    </div>
                                                                                                                </div>

                                                                                                            </section>

                                                                                                        </div>

                                                                                                    </div>

                                                                                                </div>



                                                                                            </div>
                                                                                            <!-- /.contact-right -->
                                                                                        </div>
                                                                                        <!-- colm6 -->
                                                                                    </div>
                                                                                    <!-- row -->

                                                                                </div>

                                                                                <div class="naccs"
                                                                                    style="background: transparent; margin-top: 40px;">
                                                                                    <div class="menu">
                                                                                        <div class="first-thumb active"
                                                                                            style="height: 0px; width: 0px;">
                                                                                        </div>
                                                                                        <div class="first-thumb active"
                                                                                            style="height: 0px; width: 0px;">
                                                                                        </div>
                                                                                        <div class="first-thumb active"
                                                                                            style="height: 0px; width: 0px;">
                                                                                        </div>
                                                                                        <div class="thumb"
                                                                                            style="height: 65px; width: 230px; margin-bottom: 40px; margin-left: 73.5%; background: rgb(5, 184, 100);">
                                                                                            <h5
                                                                                                style="text-align: center; padding-top: 20px; font-size: 20px;">
                                                                                                Next Part</h5>
                                                                                        </div>
                                                                                        <div
                                                                                            style="height: 1px; width: 0px; background: transparent;">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div>
                                                                            <div class="thumb">
                                                                                <!-- <div class="row"> -->
                                                                                <div data-scroll='8'
                                                                                    class="contact-me-section"
                                                                                    style="background: #2196f3; padding-right: 35px;"
                                                                                    id="contact">

                                                                                    <div class="Section-title">
                                                                                        <h2 style="color: #fff;">
                                                                                            <i style="color: #fff;"
                                                                                                class="fa fa-life-ring"
                                                                                                aria-hidden="true"></i>
                                                                                            Brake System
                                                                                        </h2>
                                                                                        <span>brakes</span>
                                                                                        <p style="color: #fff;">
                                                                                            Enter the details of the
                                                                                            braking system.
                                                                                        </p>
                                                                                        <div class="naccs"
                                                                                            style="background: #2196f3;">
                                                                                            <div class="menu">
                                                                                                <div class="first-thumb active"
                                                                                                    style="height: 0px; width: 0px;">
                                                                                                </div>
                                                                                                <div class="first-thumb active"
                                                                                                    style="height: 0px; width: 0px;">
                                                                                                </div>
                                                                                                <div class="first-thumb"
                                                                                                    style="height: 40px; width: 130px;">
                                                                                                    <h5
                                                                                                        style="text-align: center; padding-top: 12px; font-size: 15px;">
                                                                                                        Back</h5>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- /.Section-title -->

                                                                                    <div class="row">
                                                                                        <div class="col l7 s13">
                                                                                            <div
                                                                                                class="contact-right clearfix">



                                                                                                <h2 class="title mb-30">
                                                                                                    enter details</h2>
                                                                                                <div class="contact-left"
                                                                                                    style="height: 10px; margin-bottom: 150px;">

                                                                                                    <div class="cont-item phone"
                                                                                                        style="height: 1px; padding-top: 20px; padding-bottom: 20px; color: black;">
                                                                                                        <h2 class="title mb-30"
                                                                                                            style="color: rgb(0, 0, 0);">
                                                                                                            enter score
                                                                                                            out of 5
                                                                                                        </h2>
                                                                                                        <div class="cont-numbers"
                                                                                                            style="height: 0px; margin-bottom: 50px;">
                                                                                                            <div
                                                                                                                class="input-field">
                                                                                                                <input
                                                                                                                    name="brakeScore"
                                                                                                                    type="text"
                                                                                                                    style="color: black;">
                                                                                                                <label
                                                                                                                    style="color: rgb(160, 128, 128);">Score</label>
                                                                                                                <div
                                                                                                                    class="response">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>

                                                                                                <div
                                                                                                    class="contact-left">

                                                                                                    <div class="cont-item phone"
                                                                                                        style="background-color: transparent;">
                                                                                                        <h2
                                                                                                            class="title mb-30">
                                                                                                            In Detail,
                                                                                                            Describe the
                                                                                                            Condition of
                                                                                                            This Part
                                                                                                        </h2>
                                                                                                        <div
                                                                                                            class="cont-numbers">
                                                                                                            <div
                                                                                                                class="input-field">

                                                                                                                <textarea
                                                                                                                    name="brakeDetails"
                                                                                                                    rows="7"
                                                                                                                    class="materialize-textarea"
                                                                                                                    required></textarea>
                                                                                                                <label
                                                                                                                    style="color: rgb(234, 239, 247);">Description</label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>

                                                                                                <div class="contact-left"
                                                                                                    style="height: 10px; margin-bottom: 150px;">

                                                                                                    <div
                                                                                                        style="border: solid 1px #fff; background: #fff; padding-left: 40px; width: 100%; margin-bottom: 30px; margin-top: 50px;">
                                                                                                        <div
                                                                                                            class="sections">

                                                                                                            <section
                                                                                                                class="active">

                                                                                                                <div
                                                                                                                    class="images">
                                                                                                                    <div
                                                                                                                        class="pic">
                                                                                                                        add
                                                                                                                        image
                                                                                                                    </div>
                                                                                                                </div>

                                                                                                            </section>

                                                                                                        </div>

                                                                                                    </div>

                                                                                                </div>


                                                                                            </div>
                                                                                            <!-- /.contact-right -->
                                                                                        </div>
                                                                                        <!-- colm6 -->
                                                                                    </div>
                                                                                    <!-- row -->

                                                                                </div>

                                                                                <div class="naccs"
                                                                                    style="background: transparent; margin-top: 40px;">
                                                                                    <div class="menu">
                                                                                        <div class="first-thumb active"
                                                                                            style="height: 0px; width: 0px;">
                                                                                        </div>
                                                                                        <div class="first-thumb active"
                                                                                            style="height: 0px; width: 0px;">
                                                                                        </div>
                                                                                        <div class="first-thumb active"
                                                                                            style="height: 0px; width: 0px;">
                                                                                        </div>
                                                                                        <div class="first-thumb active"
                                                                                            style="height: 0px; width: 0px;">
                                                                                        </div>
                                                                                        <div class="thumb"
                                                                                            style="height: 65px; width: 230px; margin-bottom: 40px; margin-left: 73.5%; background: rgb(5, 184, 100);">
                                                                                            <h5
                                                                                                style="text-align: center; padding-top: 20px; font-size: 20px;">
                                                                                                Next Part</h5>
                                                                                        </div>
                                                                                        <div
                                                                                            style="height: 1px; width: 0px; background: transparent;">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div>
                                                                            <div class="thumb">
                                                                                <!-- <div class="row"> -->
                                                                                <div data-scroll='8'
                                                                                    class="contact-me-section"
                                                                                    style="background: #2196f3; padding-right: 35px;"
                                                                                    id="contact">

                                                                                    <div class="Section-title">
                                                                                        <h2 style="color: #fff;">
                                                                                            <i style="color: #fff;"
                                                                                                class="fa fa-steam"
                                                                                                aria-hidden="true"></i>
                                                                                            suspension
                                                                                        </h2>
                                                                                        <span>suspension</span>
                                                                                        <p style="color: #fff;">
                                                                                            Enter the details of the
                                                                                            suspension.
                                                                                        </p>
                                                                                        <div class="naccs"
                                                                                            style="background: #2196f3;">
                                                                                            <div class="menu">
                                                                                                <div class="first-thumb active"
                                                                                                    style="height: 0px; width: 0px;">
                                                                                                </div>
                                                                                                <div class="first-thumb active"
                                                                                                    style="height: 0px; width: 0px;">
                                                                                                </div>
                                                                                                <div class="first-thumb active"
                                                                                                    style="height: 0px; width: 0px;">
                                                                                                </div>
                                                                                                <div class="first-thumb"
                                                                                                    style="height: 40px; width: 130px;">
                                                                                                    <h5
                                                                                                        style="text-align: center; padding-top: 12px; font-size: 15px;">
                                                                                                        Back</h5>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- /.Section-title -->

                                                                                    <div class="row">
                                                                                        <div class="col l7 s13">
                                                                                            <div
                                                                                                class="contact-right clearfix">



                                                                                                <h2 class="title mb-30">
                                                                                                    enter details</h2>
                                                                                                <div class="contact-left"
                                                                                                    style="height: 10px; margin-bottom: 150px;">

                                                                                                    <div class="cont-item phone"
                                                                                                        style="height: 1px; padding-top: 20px; padding-bottom: 20px; color: black;">
                                                                                                        <h2 class="title mb-30"
                                                                                                            style="color: rgb(0, 0, 0);">
                                                                                                            enter score
                                                                                                            out of 5
                                                                                                        </h2>
                                                                                                        <div class="cont-numbers"
                                                                                                            style="height: 0px; margin-bottom: 50px;">
                                                                                                            <div
                                                                                                                class="input-field">
                                                                                                                <input
                                                                                                                    name="suspensionScore"
                                                                                                                    type="text"
                                                                                                                    style="color: black;">
                                                                                                                <label
                                                                                                                    style="color: rgb(160, 128, 128);">Score</label>
                                                                                                                <div
                                                                                                                    class="response">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>

                                                                                                <div
                                                                                                    class="contact-left">

                                                                                                    <div class="cont-item phone"
                                                                                                        style="background-color: transparent;">
                                                                                                        <h2
                                                                                                            class="title mb-30">
                                                                                                            In Detail,
                                                                                                            Describe the
                                                                                                            Condition of
                                                                                                            This Part
                                                                                                        </h2>
                                                                                                        <div
                                                                                                            class="cont-numbers">
                                                                                                            <div
                                                                                                                class="input-field">

                                                                                                                <textarea
                                                                                                                    name="suspensionDetails"
                                                                                                                    rows="7"
                                                                                                                    class="materialize-textarea"
                                                                                                                    required></textarea>
                                                                                                                <label
                                                                                                                    style="color: rgb(234, 239, 247);">Description</label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>

                                                                                                <div class="contact-left"
                                                                                                    style="height: 10px; margin-bottom: 150px;">

                                                                                                    <div
                                                                                                        style="border: solid 1px #fff; background: #fff; padding-left: 40px; width: 100%; margin-bottom: 30px; margin-top: 50px;">
                                                                                                        <div
                                                                                                            class="sections">

                                                                                                            <section
                                                                                                                class="active">

                                                                                                                <div
                                                                                                                    class="images">
                                                                                                                    <div
                                                                                                                        class="pic">
                                                                                                                        add
                                                                                                                        image
                                                                                                                    </div>
                                                                                                                </div>

                                                                                                            </section>

                                                                                                        </div>

                                                                                                    </div>

                                                                                                </div>


                                                                                            </div>
                                                                                            <input type="submit"
                                                                                                name="submit"
                                                                                                value="submit"
                                                                                                class="submitForm custom-btn waves-effect"
                                                                                                style="margin-top: 20px; margin-bottom: 30px; margin-left: 76%; color: #fff; border: 1px #fff; background-color: rgb(5, 184, 100);" />

                                                                                            <!-- /.contact-right -->
                                                                                        </div>

                                                                                        <!-- colm6 -->
                                                                                    </div>
                                                                                    <!-- row -->

                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </li>
                                                                </ul>
                                                            </form>
                                                            <?php
    
    include "configure/connect.php";
    if ($_POST['submit']) {
        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];   
        $folder = "image/".$filename;
         
        $vehicleMake = $_POST['vehicleMake'];
        $vehicleModel =$_POST['vehicleModel'];
        $vehicleNumberPlate = $_POST['vehicleNumberPlate'];
        $vehicleYearOfManufacture =$_POST['vehicleYearOfManufacture'];
        $vehicleMilage =$_POST['vehicleMilage'];
        $newCarPrice = $_POST['newCarPrice'];
        
        $bodyScore= $_POST['bodyScore'];
        $bodyDetails= $_POST['bodyDetails'];
        $engineScore= $_POST['engineScore'];
        $engineDetails= $_POST['engineDetails'];
        $brakeScore= $_POST['brakeScore'];
        $brakeDetails= $_POST['brakeDetails'];
        $suspensionScore= $_POST['suspensionScore'];
        $suspensionDetails= $_POST['suspensionDetails'];

        $totalScore = $bodyScore + $engineScore + $brakeScore + $suspensionScore;
        
        $date = getdate();
        $sql= "INSERT INTO carDetails (carNumberPlate, carMake, carModel, carYearManfucture, carMilage)
        VALUES ('$vehicleNumberPlate', '$vehicleMake', '$vehicleModel', $vehicleYearOfManufacture, $vehicleMilage)";
        $result = mysqli_query($conn, $sql);
       if ($result) {
        $sql2 = "INSERT INTO valuation_score (engine, numberPlate, engineDetails, body, bodyDetails, brake, brakeDetails, suspension, suspensionDetails, totalScore, priceNewCar, carImage)
        VALUES ($engineScore ,'$vehicleNumberPlate', '$engineDetails', '$bodyScore', '$bodyDetails', $brakeScore, '$brakeDetails', $suspensionScore, '$suspensionDetails', $totalScore, $newCarPrice, '$filename')";
    
            $res = mysqli_query($conn, $sql2);
            if ($res) {
                
                echo "<div><h3>Success</h3></div>";
                header('Location:index.php');
        
            }else
            echo "Error: " . $sql . "<br>" . $conn->error;
            
        
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- colm6 -->
                </div>
                <!-- row -->

            </div>

    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="asset/js/custom.js"></script>

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