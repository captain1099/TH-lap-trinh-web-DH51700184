<?php session_start(); include ("includes/connection.php"); ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title alt="">Linh kiện máy tính TV store</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>

    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Login</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Form Section Begin -->

    <!-- Register Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="login-form">
                        <h2>Đăng nhập</h2>
                        <?php 
                         error_reporting(0);
                            if(isset($_POST["btn_login"]))
                            {
                            //lay thong tin nguoi dung
                                $username=$_POST["user"];
                                $password=$_POST["pass"];

                                if($username=="" || $password=="")
                                    echo "tên đăng nhập và mật khẩu không được để trống";
                                else{
                                    $sql = "select * from khachhang where tendangnhap = '$username' and matkhau = '$password' ";
                                    $query = mysqli_query($conn,$sql);
                                    $num_rows = mysqli_num_rows($query);
                                    if ($num_rows==0) {
                                        echo "tên đăng nhập hoặc mật khẩu không đúng !";
                                    }
                                    else
                                    {
                                        while ( $data = mysqli_fetch_array($query) ) {
                                            $_SESSION["khMa"] = $data["makhachhang"];
                                            $_SESSION["user"] = $data["tendangnhap"];
                                            $_SESSION["pass"] = $data["matkhau"];
                                            $_SESSION["email"] = $data["email"];
                                            $_SESSION["fullname"] = $data["hoten"];
                                            $_SESSION["gt"] = $data["gt"];
                                            $_SESSION["address"] = $data["diachi"];
                                            $_SESSION["phone"] = $data["sodienthoai"];
                                        }
                                        ?>
                                        <script>
                                            window.location="index.php";
                                        </script>
                                        <?php
                                        
                                    }
                                    
                                }
                            }

                        ?>
                        <form action="login.php" method="POST">
                            <div class="group-input">
                                <label for="username">Tài khoản hoặc email *</label>
                                <input type="text" id="username" name="user">
                            </div>
                            <div class="group-input">
                                <label for="pass">Password *</label>
                                <input type="password" id="pass" name="pass">
                            </div>
                            <div class="group-input gi-check">
                                <div class="gi-more">
                                    <label for="save-pass">
                                        Lưu mật khẩu
                                        <input type="checkbox" id="save-pass">
                                        <span class="checkmark"></span>
                                    </label>
                                    <a href="#" class="forget-pass">Quên mật khẩu ?</a>
                                </div>
                            </div>
                            <button type="submit" class="site-btn login-btn" name="btn_login">Đăng nhập</button>
                        </form>
                        <div class="switch-login">
                            <a href="./register.php" class="or-login">Tạo tài khoản mới</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Form Section End -->

    <!-- Partner Logo Section Begin -->
   <!-- <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-1.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-2.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-3.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-4.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- Partner Logo Section End -->

    <!-- Footer Section Begin -->
    <?php include'includes/footer.php' ?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/jquery.dd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>