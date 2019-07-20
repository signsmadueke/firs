<?php
require_once 'core/init.php';
$user = new User();
if ($user->isLoggedIn()) {
    Redirect::to('dashboard/');
}

if (Input::exists()) {
    if (Token::check(Input::get('token'))) {
        
        $validate = new Validate();
        $validation = $validate->check($_POST, array(
            'username' => array('required' => true),
            'password' => array('required' => true)
        ));

        if ($validation->passed()) {

            // $remember = (Input::get('remember') === 'on') ? true : false;
            $login = $user->initialLogin(Input::get('username'), Input::get('password'));
            // die(var_dump($login));

            if ($login !== false) {
                Redirect::to('otp.php?u='.$login);
            }else {
                Session::flash('login', 'Sorry on able to login');
                Redirect::to('login.php');
            }
        } else {
            $errors = $validation->errors();
        }   
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Login — firs</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Perpetuity.ng" name="author">
    <meta content="Login to your account Perpetuity.ng." name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="assets/img/favicon.png" rel="shortcut icon">
    <link href="assets/img/favicon.png" rel="apple-touch-icon">
    <link href="assets/css/lib.css" rel="stylesheet">
    <link href="assets/css/main.css?version=4.4.0" rel="stylesheet">
</head>

<body class="auth-wrapper">
    <div class="all-wrapper">
        <div class="auth-box-w">
            <div class="logo-w">
                <a href="index.php">
                  <img alt="" src="assets/img/logo-x2.png" style="height: 150px;">
                </a>
            </div>
            <h4 class="auth-header">
                Login to your account
            </h4>
            <form method="post"  data-toggle="validator" role="form"action="" style="padding: 20px calc(50px + 3%) 60px calc(50px + 3%)">
                <div class="col-sm-12 pt-4 text-center">
                    <?php if (isset($errors)) { 
                        foreach ($errors as $error) { ?>
                        <div class="alert alert-danger">
                                <?php echo $error; ?>
                        </div>
                    <?php 
                        }
                    }
                    if (Session::exists('login')) { ?>
                        <div class="alert alert-danger">
                                <?php echo Session::flash('login'); ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="form-group has-feedback">
                    <label for="username">Email or Phone Number</label>
                    <input name="username" class="form-control" placeholder="Enter your email or phone number" id="username" value="<?php if(isset($_COOKIE['remember_me'])){
                        echo $_COOKIE['remember_me'];
                    } ?>">
                    <div class="pre-icon os-icon os-icon-user-male-circle"></div>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input name="password" class="form-control" id="password" placeholder="Enter your password" type="password">
                    <div class="pre-icon os-icon os-icon-fingerprint"></div>
                </div>
                <div class="custom-control custom-checkbox">
                    <input name="remember" type="checkbox" checked class="custom-control-input" id="defaultChecked">
                    <label class="custom-control-label" for="defaultChecked">Remember Me</label>
                </div>
                <div class="buttons-w text-center pt-4">
                    <input class="btn btn-primary btn-block" value="Continue" type="submit" name="submit">
                </div>
                <input type="hidden" name="token" value="<?php echo Token::generate() ?>">
            </form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/validator.min.js"></script>
</body>
</html>
