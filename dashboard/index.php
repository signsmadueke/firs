<?php
    $title = 'Dashboard';
?>
<!DOCTYPE html>
<html>

<head>
    <title><?php echo $title; ?> — FIRS</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Perpetuity.ng" name="author">
    <meta content="Login to your account Perpetuity.ng." name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="../assets/img/favicon.png" rel="shortcut icon">
    <link href="../assets/img/favicon.png" rel="apple-touch-icon">
    <link href="../assets/css/lib.css" rel="stylesheet">
    <link href="../assets/css/main.css?version=4.4.0" rel="stylesheet">
    <link href="../assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/fonts/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
</head>

<body class="menu-position-side menu-side-left full-screen">
    <div class="all-wrapper solid-bg-all">
        <div class="layout-w" style="min-height: 100vh;">
            <!--------------------
        START - Mobile Menu
        -------------------->
            <div class="menu-mobile menu-activated-on-click color-scheme-bright">
                <div class="mm-logo-buttons-w">
                    <a class="mm-logo" href="/">
                        <img src="../assets/img/logo-x2.png" alt="logo" style="height: 35px;">
                        <span>National Accountant General Tax Solution</span>
                    </a>
                    <div class="mm-buttons">
                        <div class="mobile-menu-trigger">
                            <div class="os-icon os-icon-hamburger-menu-1"></div>
                        </div>
                    </div>
                </div>
                <div class="menu-and-user" style="padding-bottom: 0;">
                    <div class="logged-user-w">
                        <a href=".."/profile> <div class="avatar-w">
                            <img alt="" src="../assets/img/avatar5.svg" style="background: white;">
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
                        <a href="" class="pl-1">
                            <div class="icon-w">
                                <div class="os-icon os-icon-grid-squares-22"></div>
                            </div>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li <?php if ($title == "Profile"){echo "class=\"active\"";} ?>>
                        <a href="profile/">
                            <div class="icon-w">
                                <div class="icon-user"></div>
                            </div><span>Profile</span>
                        </a>
                    </li>
                    <li <?php if ($title == "Payments"){echo "class=\"active\"";} ?>>
                        <a href="payments/" class="pl-1">
                            <div class="icon-w">
                                <div class="os-icon os-icon-wallet-loaded"></div>
                            </div>
                            <span>Payments</span>
                        </a>
                    </li>
                    <li <?php if ($title == "Vendors"){echo "class=\"active\"";} ?>>
                        <a href="vendors/" class="pl-1">
                            <div class="icon-w">
                                <div class="os-icon os-icon-users"></div>
                            </div>
                            <span>Vendors</span>
                        </a>
                    </li>
                    <li <?php if ($title == "States"){echo "class=\"active\"";} ?>>
                        <a href="states/" class="pl-1">
                            <div class="icon-w">
                                <div class="fa fa-building-o"></div>
                            </div>
                            <span>States</span>
                        </a>
                    </li>
                    <li <?php if ($title == "State Fees"){echo "class=\"active\"";} ?>>
                        <a href="fees/" class="pl-1">
                            <div class="icon-w">
                                <div class="os-icon os-icon-coins-4"></div>
                            </div>
                            <span>State Fees</span>
                        </a>
                    </li>
                    <li <?php if ($title == "Bank Accounts"){echo "class=\"active\"";} ?>>
                        <a href="bank/-accounts" class="pl-1">
                            <div class="icon-w">
                                <div class="fa fa-university"></div>
                            </div>
                            <span>Bank Accounts</span>
                        </a>
                    </li>
                    <li>
                        <a href="profile/">
                            <div class="icon-w">
                                <div class="os-icon os-icon-fingerprint"></div>
                            </div>
                            <span>Change Password</span>
                        </a>
                    </li>
                    <li>
                        <a href="logout.php">
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
                        <img src="../assets/img/logo-x2.png" alt="logo" style="width: 80%; text-align: left; display: inline-block;">
                    </div>
                </a>
            </div>
            <div <?php if ($title == "Dashboard"){echo "class=\"border-0 logged-user-w avatar-inline\"";} else{echo "class=\"logged-user-w avatar-inline\"";} ?>>
                <div class="logged-user-i">
                    <div class="avatar-w">
                        <img alt="" src="../assets/img/avatar1.jpg" style="background: white;">
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
                        <a href="profile/">
                            <div class="logged-user-avatar-info">
                                <div class="avatar-w">
                                    <img alt="" src="../assets/img/avatar1.jpg" style="background: white;">
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
                                <a href="profile/"><i class="os-icon os-icon-fingerprint"></i><span>Change Password</span></a>
                            </li>
                            <li>
                                <a href="logout.php"><i class="icon-logout"></i><span>Logout</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="main-menu pb-3">
                <li <?php if ($title == "Dashboard"){echo "class=\"active\"";} ?>>
                    <a href="" class="">
                        <div class="icon-w">
                            <div class="os-icon os-icon-grid-squares-22"></div>
                        </div>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li <?php if ($title == "Profile"){echo "class=\"active\"";} ?>>
                    <a href="profile" class="">
                        <div class="icon-w">
                            <div class="icon-user"></div>
                        </div>
                        <span>Profile</span>
                    </a>
                </li>
                <li <?php if ($title == "Payments"){echo "class=\"active\"";} ?>>
                    <a href="payments" class="">
                        <div class="icon-w">
                            <div class="os-icon os-icon-wallet-loaded"></div>
                        </div>
                        <span>Payments</span>
                    </a>
                </li>
                <li <?php if ($title == "Vendors"){echo "class=\"active\"";} ?>>
                    <a href="vendors" class="">
                        <div class="icon-w">
                            <div class="os-icon os-icon-users"></div>
                        </div>
                        <span>Vendors</span>
                    </a>
                </li>
                <li <?php if ($title == "States"){echo "class=\"active\"";} ?>>
                    <a href="states" class="">
                        <div class="icon-w">
                            <div class="fa fa-building-o"></div>
                        </div>
                        <span>States</span>
                    </a>
                </li>
                <li <?php if ($title == "State Fees"){echo "class=\"active\"";} ?>>
                    <a href="fees" class="">
                        <div class="icon-w">
                            <div class="os-icon os-icon-coins-4"></div>
                        </div>
                        <span>State Fees</span>
                    </a>
                </li>
                <li <?php if ($title == "Bank Accounts"){echo "class=\"active\"";} ?>>
                    <a href="bank/-accounts" class="">
                        <div class="icon-w">
                            <div class="fa fa-university"></div>
                        </div>
                        <span>Bank Accounts</span>
                    </a>
                </li>
            </ul>
            <div class="row m-0 pt-5 mt-5 mb-3">
                <div class="col-12 text-center mb-4 p-0">
                    <img width="70px" src="../assets/img/firs.png" alt="FIRS">
                </div>
                <div class="col-12 text-center p-0">
                    <p class="label m-0">Copyright © 2016 SQIM</p>
                </div>
            </div>
        </div>
        <!--------------------
        END - Main Menu
        -------------------->
        <div class="content-w">
            <div class="content-i">

                <div class="content-box">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="element-wrapper">
                                <h6 class="element-header">
                                    <?php echo $title; ?>
                                </h6>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-3">
                                        <div class="element-box el-tablo">
                                            <div class="label">Payments This Month</div>
                                            <div class="value"><strong>₦574</strong></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-3">
                                        <div class="element-box el-tablo">
                                            <div class="label">VAT This Month</div>
                                            <div class="value"><strong>₦12</strong></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-3">
                                        <div class="element-box el-tablo">
                                            <div class="label">WHT This Month</div>
                                            <div class="value"><strong>₦2</strong>,507</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-3">
                                        <div class="element-box el-tablo">
                                            <div class="label">Stamp Duty This Month</div>
                                            <div class="value"><strong>₦2,507</strong></div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-12 p-4"></div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <h6 class="element-header">
                                            Payments
                                        </h6>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-2">
                                        <div class="element-box el-tablo mt-0">
                                            <div class="label">
                                                Total Payments
                                            </div>
                                            <div class="value">
                                                4
                                            </div>
                                        </div>

                                        <div class="element-box el-tablo mt-3">
                                            <div class="label">
                                                Completed Payments
                                            </div>
                                            <div class="value">
                                                3
                                            </div>
                                        </div>

                                        <div class="element-box el-tablo mt-3">
                                            <div class="label">
                                                Pending Payments
                                            </div>
                                            <div class="value">
                                                0
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-10">
                                        <div class="element-box">
                                            <div class="w-100" style="overflow: hidden;">
                                                <table id="datatable" width="100%" class="table nowrap table-striped table-lightfont">
                                                    <thead>
                                                        <tr>
                                                            <th>TID</th>
                                                            <th>Vendor</th>
                                                            <th>Payment Purpose</th>
                                                            <th>Status</th>
                                                            <th>VAT</th>
                                                            <th>Amount</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th>TID</th>
                                                            <th>Vendor</th>
                                                            <th>Payment Purpose</th>
                                                            <th>Status</th>
                                                            <th>VAT</th>
                                                            <th>Amount</th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
                                                        <tr>
                                                            <td>2214</td>
                                                            <td>UBIQUITE SOLUTIONS LTD</td>
                                                            <td>CONSTRUCTION OF MBIAMA ROUNDABOUT</td>
                                                            <td class="text-center">
                                                                <span class="badge badge-primary-inverted" href="">Final Approval</span>
                                                            </td>
                                                            <td>₦40,000</td>
                                                            <td>₦200,000.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2214</td>
                                                            <td>UBIQUITE SOLUTIONS LTD</td>
                                                            <td>CONSTRUCTION OF MBIAMA ROUNDABOUT</td>
                                                            <td class="text-center">
                                                                <span class="badge badge-primary-inverted" href="">Final Approval</span>
                                                            </td>
                                                            <td>₦40,000</td>
                                                            <td>₦200,000.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2214</td>
                                                            <td>UBIQUITE SOLUTIONS LTD</td>
                                                            <td>CONSTRUCTION OF MBIAMA ROUNDABOUT</td>
                                                            <td class="text-center">
                                                                <span class="badge badge-primary-inverted" href="">Final Approval</span>
                                                            </td>
                                                            <td>₦40,000</td>
                                                            <td>₦200,000.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2214</td>
                                                            <td>UBIQUITE SOLUTIONS LTD</td>
                                                            <td>CONSTRUCTION OF MBIAMA ROUNDABOUT</td>
                                                            <td class="text-center">
                                                                <span class="badge badge-primary-inverted" href="">Final Approval</span>
                                                            </td>
                                                            <td>₦40,000</td>
                                                            <td>₦200,000.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2214</td>
                                                            <td>UBIQUITE SOLUTIONS LTD</td>
                                                            <td>CONSTRUCTION OF MBIAMA ROUNDABOUT</td>
                                                            <td class="text-center">
                                                                <span class="badge badge-primary-inverted" href="">Final Approval</span>
                                                            </td>
                                                            <td>₦40,000</td>
                                                            <td>₦200,000.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2214</td>
                                                            <td>UBIQUITE SOLUTIONS LTD</td>
                                                            <td>CONSTRUCTION OF MBIAMA ROUNDABOUT</td>
                                                            <td class="text-center">
                                                                <span class="badge badge-primary-inverted" href="">Final Approval</span>
                                                            </td>
                                                            <td>₦40,000</td>
                                                            <td>₦200,000.00</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
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
        <div class="display-type"></div>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/moment.js"></script>
    <script src="../assets/js/Chart.min.js"></script>
    <script src="../assets/js/select2.full.min.js"></script>
    <script src="../assets/js/jquery.barrating.min.js"></script>
    <script src="../assets/js/validator.min.js"></script>
    <script src="../assets/js/daterangepicker.js"></script>
    <script src="../assets/js/ion.rangeSlider.min.js"></script>
    <script src="../assets/js/dropzone.js"></script>
    <script src="../assets/js/mindmup-editabletable.js"></script>
    <script src="../assets/js/jquery.dataTables.min.js"></script>
    <script src="../assets/js/dataTables.bootstrap.min.js"></script>
    <script src="../assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/js/dataTables.responsive.min.js"></script>
    <script src="../assets/js/dataTables.buttons.min.js"></script>
    <script src="../assets/js/buttons.bootstrap4.min.js"></script>
    <script src="../assets/js/buttons.html5.min.js"></script>
    <script src="../assets/js/buttons.print.min.js"></script>
    <script src="../assets/js/fullcalendar.min.js"></script>
    <script src="../assets/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/js/tether.min.js"></script>
    <script src="../assets/js/slick.min.js"></script>
    <script src="../assets/js/util.js"></script>
    <script src="../assets/js/alert.js"></script>
    <script src="../assets/js/button.js"></script>
    <script src="../assets/js/carousel.js"></script>
    <script src="../assets/js/collapse.js"></script>
    <script src="../assets/js/dropdown.js"></script>
    <script src="../assets/js/modal.js"></script>
    <script src="../assets/js/tab.js"></script>
    <script src="../assets/js/tooltip.js"></script>
    <script src="../assets/js/popover.js"></script>
    <script src="../assets/js/demo_customizer.js?version=4.4.0"></script>
    <script src="../assets/js/main.js?version=4.4.0"></script>
</body>

</html>
