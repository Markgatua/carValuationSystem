<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://colorzilla.com/gradient-editor/#cfd8dc+0,607d8b+100,b0bec5+100">
</head>

<body>
    <?php include 'configure/connect.php'; ?>
    <div class="cotn_principal">
        <div class="cont_centrar">

            <div class="cont_login" style="margin-top: 150px; margin-right: 1000px;">
                <div class="cont_info_log_sign_up" style="margin-left: 80px; margin-top: 40px;">
                    <div class="col_md_login">
                        <div class="cont_ba_opcitiy" style="margin-right: 160px;">

                            <h2>WELCOME BACK</h2>
                            <p>If you already have an account, just Sign In</p>
                            <button class="btn_login" style="margin-top: 30px;" onclick="cambiar_login()">LOGIN</button>
                        </div>
                    </div>
                    <div class="col_md_sign_up">
                        <div class="cont_ba_opcitiy" style="margin-left: 60px;">
                            <h2>NEW USER ?</h2>


                            <p>Create Your User Account by Signing Up</p>

                            <button class="btn_sign_up" style="margin-top: 30px;" onclick="cambiar_sign_up()">SIGN
                                UP</button>
                        </div>
                    </div>
                </div>
                <div class="cont_back_info" style="width: 800px; height: 350px;">
                    <div class="cont_img_back_grey">
                        <img src="car_1.jpg" alt="" />
                    </div>

                </div>
                <div class="cont_forms">
                    <div class="cont_img_back_">
                        <img src="engine_1.jfif" alt="" />
                    </div>
                    <div class="cont_form_login">
                        <a href="#" onclick="ocultar_login_sign_up()"><i class="fa fa-arrow-left"
                                style="color: #fff;"></i></a>
                        <form method="POST" action="register.php">
                            <div class="cont_ba_opcitiy" style="margin-left: 70px; margin-bottom: 30px;">
                                <h2>SIGN IN</h2>
                            </div>
                            <input name="mail" type="email" placeholder="Email" required />
                            <input name="pasw" type="password" placeholder="Password" required />
                            <button type="submit" name="submit" value="submit" class="btn_login"
                                style="margin-left: 80px; margin-top: 30px;">LOGIN</button>
                    </div>
                    </form>
                    <?php
                      if($_POST['submit'] == true){
                        $email = $_POST['mail'];
                        $password = $_POST['pasw'];
                        $sql = "SELECT * FROM admin where admin_email= '$email' and admin_pasw='$password'";
                        $res = $conn -> query($sql);
                        if($res == true){
                            session_start();
 
                            // Storing session data
                            
                            $_SESSION["email"] = $email;
                            header('location:index.php');
                            
                        //  header('location:index.php');
                        }else{
                            echo "<div>Wrong credentials</div>";
                        }
                      }

                    ?>
                    <div class="cont_form_sign_up">
                        <a href="#" onclick="ocultar_login_sign_up()"><i class="fa fa-arrow-left"
                                style="color: #fff;"></i></a>
                        <div class="cont_ba_opcitiy" style="margin-left: 80px;">
                            <h2>SIGN UP</h2>
                        </div>
                        <input type="text" placeholder="Email" />
                        <input type="text" placeholder="User" />
                        <input type="password" placeholder="Password" />
                        <input type="password" placeholder="Confirm Password" />
                        <button class="btn_sign_up" style="margin-left: 80px; margin-top: 30px;"
                            onclick="cambiar_sign_up()">SIGN UP</button>

                    </div>

                </div>

            </div>
        </div>
    </div>

    <script type="text/javascript" src="main.js"></script>

</body>

</html>