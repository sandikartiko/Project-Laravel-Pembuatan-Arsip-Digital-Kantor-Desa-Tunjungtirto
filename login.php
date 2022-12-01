<?php 
session_start();

//atur koneksi ke database
$host_db    = "localhost";
$user_db    = "root";
$pass_db    = "";
$nama_db    = "arsip_desa";
$koneksi    = mysqli_connect($host_db,$user_db,$pass_db,$nama_db);
//atur variabel
$err        = "";
$username   = "";
$ingataku   = "";

if(isset($_COOKIE['cookie_username'])){
    $cookie_username = $_COOKIE['cookie_username'];
    $cookie_password = $_COOKIE['cookie_password'];

    $sql1 = "select * from login where username = '$cookie_username'";
    $q1   = mysqli_query($koneksi,$sql1);
    $r1   = mysqli_fetch_array($q1);
    if($r1['password'] == $cookie_password){
        $_SESSION['session_username'] = $cookie_username;
        $_SESSION['session_password'] = $cookie_password;
    }
}

if(isset($_SESSION['session_username'])){
    $_SESSION["login"] = true;
    header("location:dashboard.php");
    exit();
}

if(isset($_POST['login'])){
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    $ingataku   = $_POST['ingataku'];

    if($username == '' or $password == ''){
        $err .= "<li>Silakan masukkan username dan juga password.</li>";
    }else{
        $sql1 = "select * from login where username = '$username'";
        $q1   = mysqli_query($koneksi,$sql1);
        $r1   = mysqli_fetch_array($q1);

        if($r1['username'] == ''){
            $err .= "<li>Username <b>$username</b> tidak tersedia.</li>";
        }elseif($r1['password'] != md5($password)){
            $err .= "<li>Password yang dimasukkan tidak sesuai.</li>";
        }       
        
        if(empty($err)){
            $_SESSION['session_username'] = $username; //server
            $_SESSION['session_password'] = md5($password);

            if($ingataku == 1){
                $cookie_name = "cookie_username";
                $cookie_value = $username;
                $cookie_time = time() + (60 * 60 * 24 * 30);
                setcookie($cookie_name,$cookie_value,$cookie_time,"/");

                $cookie_name = "cookie_password";
                $cookie_value = md5($password);
                $cookie_time = time() + (60 * 60 * 24 * 30);
                setcookie($cookie_name,$cookie_value,$cookie_time,"/");
            }
            header("location:dashboard.php");
        }
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <style>
        html,
        body {
            height: 100%;
            background-color: #222d32 !important;
        }

        .global-container {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #48e248;
        }

        .login-form {
            width: 380px;
            height: 450px;
            padding: 20px;
            background-color: #222d32 !important;
            border-radius: 10px !important;
        }

        input[type="username"],
        input[type="password"] {
            background: #1a2226;
            color: #fff;
            border: 2px solid #00ff00;
            border-radius: 10px;
            margin-bottom: 25px;
        }

        input[type="username"]:focus,
        input[type="password"]:focus {
            outline: none;
            border: none;
            background: #1a2226;
            color: #fff;
            margin: 0;
        }

        .card-tittle {
            font-weight: 500%;
            padding-top: 10px;
        }

        .btn {
            background: #48e248 !important;
            color: #000 !important;
            transform: translateY(10px);
            font-size: 14px;
            border-radius: 10px !important;
        }

        .row {
            flex: 0 0 100%;
            flex-grow: 0;
            flex-shrink: 0;
            flex-basis: 100%;
            max-width: 100%;
        }

        .border {
            border-color:green;
        }
    </style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <title>Login</title>
    <link href="assets/img/download.jpg" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">
    <div class="global-container">
            <div class="card login-form" style="border-color: #48e248;">
                <div class="card-body">
                    <h2 class="card-tittle text-center" ><img src="assets/img/logo.png" alt="" class="img-fluid" style="max-height: 45px ;"> E-ARSIP DIGITAL</h2>
                    <h3 class="card-tittle text-center">LOGIN</h3>
                    <div style="padding-top:20px" class="panel-body">
                        <?php if($err){ ?>
                        <div id="login-alert" class="alert alert-danger col-sm-12">
                            <ul><?php echo $err ?></ul>
                        </div>
                        <?php } ?>
                        <div class= "card-text">
                            <form id="loginform" class="mb-3" action="" method="post" role="form">
                                <div style="margin-bottom: 25px" class="form-label">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <label for="exampleInputUsername" class="form-label">Username</label>
                                    <input id="login-username" type="Username" class="form-control" name="username"
                                        value="<?php echo $username ?>" placeholder="username">
                                </div>
                                <div style="margin-bottom: 25px" class="mb-3">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <label for="exampleInputPassword" class="form-label">Password</label>
                                    <input id="login-password" type="Password" class="form-control" name="password" placeholder="password">
                                </div>
                                <div class="input-group" style="padding-top:0 ;">
                                    <div class="checkbox">
                                        <label>
                                            <input id="login-remember" type="checkbox" name="ingataku" value="1"
                                                <?php if($ingataku == '1') echo "checked"?>> Ingat Aku
                                        </label>
                                    </div>
                                </div>
                                <div style="margin-top:6px" class="form-group">
                                    <div class="d-grid gap-2">
                                        <input type="submit" name="login" class="btn btn-success" value="Login" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</body>

</html>