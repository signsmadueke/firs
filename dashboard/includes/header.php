<!DOCTYPE html>
<html>

<head>
    <title><?php echo $title; ?> — FIRS</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="firs" name="keywords">
    <meta content="FIRS" name="author">
    <meta content="National Accountant General Tax Solution" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="../../assets/img/favicon.png" rel="shortcut icon">
    <link href="../../assets/img/favicon.png" rel="apple-touch-icon">
    <link href="../../assets/css/lib.css" rel="stylesheet">
    <link href="../../assets/css/main.css?version=4.4.0" rel="stylesheet">
    <link href="../../assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../assets/fonts/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link href="../../assets/fonts/feather/style.css" rel="stylesheet">
</head>

<body class="menu-position-side menu-side-left full-screen">
    <div class="all-wrapper solid-bg-all">
        <div class="layout-w" style="min-height: 100vh;">
            <!--------------------
        START - Mobile Menu
        -------------------->
            <div class="menu-mobile menu-activated-on-click color-scheme-bright">
                <div class="mm-logo-buttons-w">
                    <a class="row align-items-center mm-logo" href="../">
                        <div class="col-auto">
                            <img src="../../assets/img/favicon.png" alt="logo">
                        </div>
                        <div class="col-auto pl-0">
                            <span class="ml-0">
                                <h6 class="d-inline-block mb-0">National Accountant General<br>Tax Solution</h6>
                                <p class="label mb-0 para">Enugu State</p>
                            </span>
                        </div>
                    </a>
                    <div class="mm-buttons p-3">
                        <div class="mobile-menu-trigger">
                            <div class="os-icon os-icon-hamburger-menu-1"></div>
                        </div>
                    </div>
                </div>
                <div class="menu-and-user" style="padding-bottom: 0;">
                    <div class="logged-user-w">
                        <a href=".."/profile>
                            <div class="avatar-w">
                                <img alt="" src="../../assets/img/avatar1.jpg" style="background: white;">
                            </div>
                        </a>
                        <div class="logged-user-info-w">
                            <div class="logged-user-name mb-1">
                                Signs Madueke
                            </div>
                            <div class="logged-user-role">User</div>
                        </div>
                    </div>
                    <!--------------------
            START - Mobile Menu List
            -------------------->
                    <ul class="main-menu">
                        <li <?php if ($title == "Dashboard"){echo "class=\"active\"";} ?>>
                            <a href="../" class="pl-lg-1">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-grid-squares-22"></div>
                                </div>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li <?php if ($title == "Payments"){echo "class=\"active\"";} ?>>
                            <a href="../payments" class="pl-lg-1">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-wallet-loaded"></div>
                                </div>
                                <span>Payments</span>
                            </a>
                        </li>
                        <li <?php if ($title == "Vendors"){echo "class=\"active\"";} ?>>
                            <a href="../vendors" class="pl-lg-1">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-users"></div>
                                </div>
                                <span>Vendors</span>
                            </a>
                        </li>
                        <li <?php if ($title == "Tax Payers"){echo "class=\"active\"";} ?>>
                            <a href="tax-payers">
                                <div class="icon-w">
                                    <div class="icon-feather-file-text"></div>
                                </div>
                                <span>Tax Payers</span>
                            </a>
                        </li>
                        <li <?php if ($title == "States"){echo "class=\"active\"";} ?>>
                            <a href="../states" class="pl-lg-1">
                                <div class="icon-w">
                                    <div class="fa fa-building-o"></div>
                                </div>
                                <span>States</span>
                            </a>
                        </li>
                        <li <?php if ($title == "Fees"){echo "class=\"active\"";} ?>>
                            <a href="../fees" class="pl-lg-1">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-coins-4"></div>
                                </div>
                                <span>State Fees</span>
                            </a>
                        </li>
                        <li <?php if ($title == "Ministries"){echo "class=\"active\"";} ?>>
                            <a href="../ministries" class="pl-lg-1">
                                <div class="icon-w">
                                    <div class="fa fa-university"></div>
                                </div>
                                <span>Ministries</span>
                            </a>
                        </li>
                        <li <?php if ($title == "Users"){echo "class=\"active\"";} ?>>
                            <a href="../users">
                                <div class="icon-w">
                                    <div class="icon-people"></div>
                                </div>
                                <span>Users</span>
                            </a>
                        </li>
                        <li <?php if ($title == "Profile"){echo "class=\"active\"";} ?>>
                            <a href="../profile">
                                <div class="icon-w">
                                    <div class="icon-user"></div>
                                </div><span>Profile</span>
                            </a>
                        </li>
                        <li <?php if ($title == "Help"){echo "class=\"active\"";} ?>>
                            <a href="help">
                                <div class="icon-w">
                                    <div class="icon-feather-help-circle"></div>
                                </div>
                                <span>Help</span>
                            </a>
                        </li>
                        <li>                        
                            <a href="../profile">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-fingerprint"></div>
                                </div>
                                <span>Change Password</span>
                            </a>
                        </li>
                        <li>
                            <a href="../logout.php">
                                <div class="icon-w">
                                    <div class="icon-logout"></div>
                                </div>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                    <!--------------------
            END - Mobile Menu List
            -------------------->
                </div>
            </div>
            <!--------------------
        END - Mobile Menu
        -------------------->
            <!--------------------
        START - Main Menu
        -------------------->
            <div class="menu-w selected-menu-color-light menu-activated-on-hover menu-has-selected-link color-scheme-light color-style-default menu-position-side menu-side-left menu-layout-full sub-menu-style-over">
                <div class="logo-w">
                    <a class="logo mb-3 mt-3" href="../">
                        <div class="p-2">
                            <img src="../../assets/img/logo-x2.png" alt="logo" style="width: 80%; text-align: left; display: inline-block;">
                        </div>
                    </a>
                </div>
                <div <?php if ($title == "Dashboard"){echo "class=\"border-0 logged-user-w avatar-inline\"";} else{echo "class=\"logged-user-w avatar-inline\"";} ?>>
                    <div class="logged-user-i">
                        <div class="avatar-w">
                            <img alt="" src="../../assets/img/avatar1.jpg" style="background: white;">
                        </div>
                        <div class="logged-user-info-w">
                            <div class="logged-user-name mb-1">
                                Signs Madueke
                            </div>
                            <div class="logged-user-role">User</div>
                        </div>
                        <div class="logged-user-toggler-arrow">
                            <div class="os-icon os-icon-chevron-down"></div>
                        </div>
                        <div class="logged-user-menu color-style-bright">
                            <a href="../profile">
                                <div class="logged-user-avatar-info">
                                    <div class="avatar-w">
                                        <img alt="" src="../../assets/img/avatar1.jpg" style="background: white;">
                                    </div>
                                    <div class="logged-user-info-w">
                                        <div class="logged-user-name mb-1">
                                            Signs Madueke
                                        </div>
                                        <div class="logged-user-role">
                                            User
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="bg-icon">
                                <i class="os-icon os-icon-fingerprint"></i>
                            </div>
                            <ul>
                                <li>
                                    <a href="../profile"><i class="os-icon os-icon-fingerprint"></i><span>Change Password</span></a>
                                </li>
                                <li>
                                    <a href="../logout.php"><i class="icon-logout"></i><span>Logout</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="main-menu pb-3">
                    <li <?php if ($title == "Dashboard"){echo "class=\"active\"";} ?>>
                        <a href="../" class="">
                            <div class="icon-w">
                                <div class="os-icon os-icon-grid-squares-22"></div>
                            </div>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li <?php if ($title == "Payments"){echo "class=\"active\"";} ?>>
                        <a href="../payments" class="">
                            <div class="icon-w">
                                <div class="os-icon os-icon-wallet-loaded"></div>
                            </div>
                            <span>Payments</span>
                        </a>
                    </li>
                    <li <?php if ($title == "Vendors"){echo "class=\"active\"";} ?>>
                        <a href="../vendors" class="">
                            <div class="icon-w">
                                <div class="os-icon os-icon-users"></div>
                            </div>
                            <span>Vendors</span>
                        </a>
                    </li>
                    <li <?php if ($title == "Tax Payers"){echo "class=\"active\"";} ?>>
                        <a href="tax-payers">
                            <div class="icon-w">
                                <div class="icon-feather-file-text"></div>
                            </div><span>Tax Payers</span>
                        </a>
                    </li>
                    <li <?php if ($title == "States"){echo "class=\"active\"";} ?>>
                        <a href="../states" class="">
                            <div class="icon-w">
                                <div class="fa fa-building-o"></div>
                            </div>
                            <span>States</span>
                        </a>
                    </li>
                    <li <?php if ($title == "State Fees"){echo "class=\"active\"";} ?>>
                        <a href="../fees" class="">
                            <div class="icon-w">
                                <div class="os-icon os-icon-coins-4"></div>
                            </div>
                            <span>Fees</span>
                        </a>
                    </li>
                    <li <?php if ($title == "Ministries"){echo "class=\"active\"";} ?>>
                        <a href="../ministries" class="">
                            <div class="icon-w">
                                <div class="fa fa-university"></div>
                            </div>
                            <span>Ministries</span>
                        </a>
                    </li>
                    <li <?php if ($title == "Users"){echo "class=\"active\"";} ?>>
                        <a href="../users" class="">
                            <div class="icon-w">
                                <div class="icon-people"></div>
                            </div>
                            <span>Users</span>
                        </a>
                    </li>
                    <li <?php if ($title == "Profile"){echo "class=\"active\"";} ?>>
                        <a href="../profile" class="">
                            <div class="icon-w">
                                <div class="icon-user"></div>
                            </div>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li <?php if ($title == "Help"){echo "class=\"active\"";} ?>>
                        <a href="help" class="">
                            <div class="icon-w">
                                <div class="icon-feather-help-circle"></div>
                            </div>
                            <span>Help</span>
                        </a>
                    </li>
                </ul>
                <div class="row m-0 pt-5 mt-5 mb-3">
                    <div class="col-12 text-center mb-4 p-0">
                        <img width="70px" src="../../assets/img/firs.png" alt="FIRS">
                    </div>
                    <div class="col-12 text-center p-0">
                        <p class="label m-0">Copyright © 2020 Elnino Technologies</p>
                    </div>
                </div>
            </div>
            <!--------------------
        END - Main Menu
        -------------------->
            <div class="content-w">
                <div class="content-i">
