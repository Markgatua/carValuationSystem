<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>

    <meta charset="utf-8" initial-scale="1">

    <title>Evaluation</title>

    <!-- css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/materialize.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-widt=" assets="/css/animate.css">

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
                                        Akshay
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
                        <div class="hello_main_navigation hello_single_index_menu2">
                            <ul id="nav-mobile" class="right main-nav-ul">
                                <h1 style="color: black; float: left; margin-right: 680px; margin-top: 40px;">App Name -
                                    (User Name)</h1>
                                <li><a href="index.html" class="nav-mobile">home</a></li>
                                <li class="active"><a href="engine.html" class="waves-effect default">engine</a></li>
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

        <section id="main-slider-section" class="main-slider-section mb-30 clearfix" style="margin-top: 70px;">

            <div data-scroll='8' class="contact-me-section sec-p100-bg-bs mb-30 clearfix" id="contact">

                <div class="Section-title">
                    <h2>
                        <i class="fa fa-cogs" aria-hidden="true"></i>
                        engine
                    </h2>
                    <span>engine</span>

                </div>
                <!-- /.Section-title -->

                <div class="row">
                    <div class="col l5 m11 s11">
                        <div class="contact-left">

                            <div class="cont-item phone">
                                <h2 class="title mb-30">PART</h2>
                                <div class="cont-numbers">
                                    <ul class="accordion collapsible" data-collapsible="accordion">
                                        <li>
                                            <div class="accordion-header acco-clr1 collapsible-header">
                                                <p>
                                                    <strong>Engine</strong> - Faulty Fuel Pump - Add Photo
                                                </p>
                                            </div>
                                            <div class="accordion-body collapsible-body"
                                                style="background-color: #2196f3;">
                                                <span>
                                                    <div class="wrapper">
                                                        <header style="text-align: center;">
                                                            <h1>ADD PHOTO</h1>
                                                        </header>

                                                        <div class="sections">

                                                            <section class="active">
                                                                <input type="text" placeholder="Title" id="title" />
                                                                <select id="category">
                                                                    <option value="1500 CC">1500 cc</option>
                                                                    <option value="1800 CC">1800 cc</option>
                                                                    <option value="2000 CC">2000 cc</option>
                                                                </select>

                                                                <div class="select-option">
                                                                    <div class="head">Category</div>
                                                                    <div class="option"></div>
                                                                </div>


                                                                <div class="images">
                                                                    <div class="pic">
                                                                        add
                                                                    </div>
                                                                </div>


                                                            </section>

                                                        </div>

                                                        <footer>
                                                            <ul>
                                                                <li><span id="reset">reset</span></li>
                                                                <li><span class="submitForm custom-btn waves-effect"
                                                                        id="send">Save</span></li>
                                                            </ul>
                                                        </footer>

                                                    </div>

                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.cont-numbers -->
                            </div>
                        </div>
                        <!-- /.contact-left -->
                    </div>
                    <!-- colm6 -->

                    <div class="col l7 s13">
                        <div class="contact-right clearfix">

                            <form action="engine.php" method="POST">

                                <h2 class="title mb-30">Enter details</h2>
                                <div class="contact-left" style="height: 10px; margin-bottom: 150px;">

                                    <div class="cont-item phone"
                                        style="height: 1px; padding-top: 20px; padding-bottom: 20px; color: black;">
                                        <h2 class="title mb-30" style="color: rgb(0, 0, 0);">enter score out of 5</h2>
                                        <div class="cont-numbers" style="height: 0px; margin-bottom: 50px;">
                                            <div class="input-field">
                                                <input id="score" name="score" type="number" style="color: black;">
                                                <label style="color: rgb(160, 128, 128);">Score</label>
                                                <div class="response"></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="contact-left">

                                    <div class="cont-item phone" style="background-color: transparent;">
                                        <h2 class="title mb-30">In Detail, Describe the Condition of This Part</h2>
                                        <div class="cont-numbers">
                                            <div class="input-field">

                                                <textarea name="engineDetails" rows="7" name="message"
                                                    class="materialize-textarea" required></textarea>
                                                <label style="color: rgb(234, 239, 247);">Description</label>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <input value="submit" name="submit" id="scoreButton" type="submit"
                                    class="submitForm custom-btn waves-effect"
                                    style="margin-top: 20px; color: #fff; background-color: rgb(5, 184, 100);" />
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
  
  $numPlate = $_GET['numberPlate'];
    $engineScore = $_POST['score'];
    $engineDetails = $_POST['engineDetails'];
    
    include "configure/connect.php";
    
    if($_POST['submit']==true){
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
          
          $sql = "INSERT INTO valuation_score (engine, numberPlate, engineDetails)
          VALUES ('$engineScore', '$numPlate', '$engineDetails')";
          
          if ($conn->query($sql) === TRUE) {
            header('Location: body.php?numberPlate='.$numPlate.'');
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          
          $conn->close();
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