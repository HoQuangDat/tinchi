<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/fonts/fontawesome-free-6.1.2-web/css/all.min.css">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/beyond.min.css">
    <link rel="stylesheet" href="./public/css/animate.min.css">

    <title>Dang nhap</title>
</head>

<body>
    <div>
        <form action="./DangNhap/checkLogin" method="post">
            <div class="login-container animated fadeInDown">
                <div class="loginbox bg-white">
                    <div class="loginbox-title" style="font-family:sans-serif; "></div>
                    <div class="loginbox-social">
                        <div class="logo">
                            <img id="logo" src="./public/images/qnu-logo.png" width="115px" />
                        </div>
                        <div class="social-title " style="padding-top:10px;color:black;">Đăng ký học phần</div>
                    </div>
                    <div class="loginbox-or">
                        <div class="or-line"></div>
                        <div class="or">-*-</div>
                    </div>

                    <div class="loginbox-textbox">
                        <input type="text" class="form-control" required placeholder="Tên đăng nhập" name="username"
                            id="username" />
                    </div>
                    <div class="loginbox-textbox">
                        <input type="password" class="form-control" required placeholder="Mật khẩu" name="password"
                            id="password" onkeypress="searchKeyPress(event);" />
                    </div>

                    <?php
                        if(isset($_SESSION['error']))
                        {?>
                    <p style="color:red; text-align: center;"><?php echo $_SESSION['error'] ?></span>
                        <?php }
                    ?>
                    <div class="loginbox-submit">
                        <input type="submit" class="btn btn-primary btn-block" value="Đăng nhập"
                            onclick="ValidateUser()" name="dangnhap" />
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>