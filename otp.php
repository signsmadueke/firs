<!DOCTYPE html>
<html>

<head>
    <title>Login — Perpetuity.ng</title>
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
                Login OTP
            </h4>
            <form method="post" data-toggle="validator" role="form" action="dashboard/" style="padding: 20px calc(50px + 3%) 60px calc(50px + 3%)">
                <div class="form-group">
                    <input name="password" class="form-control" id="password" placeholder="Input your OTP" type="password">
                    <div class="pre-icon os-icon os-icon-fingerprint"></div>
                </div>
                <div class="buttons-w text-center pt-4">
                    <input class="btn btn-primary btn-block" value="Log in" type="submit" name="submit">
                    <div class="row pt-2">
                        <div class="col-sm-12 pt-2">
                            <div class="text-center">
                                <label class="form-check-label">Enter the OTP that was sent to your account email</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 pt-4 text-center">
                        <?php if (isset($error)) { ?>
                            <div class="alert alert-danger">
                                    <?php echo $error; ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/validator.min.js"></script>
</body>
</html>
