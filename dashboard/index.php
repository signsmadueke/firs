<?php
$title = 'Dashboard';
?>
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
    <link href="../assets/img/favicon.png" rel="shortcut icon">
    <link href="../assets/img/favicon.png" rel="apple-touch-icon">
    <link href="../assets/css/lib.css" rel="stylesheet">
    <link href="../assets/css/main.css?version=4.4.0" rel="stylesheet">
    <link href="../assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/fonts/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link href="../assets/fonts/feather/style.css" rel="stylesheet">
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
                            <img src="../assets/img/favicon.png" alt="logo">
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
                        <a href="profile">
                            <div class="avatar-w">
                                <img alt="" src="../assets/img/avatar1.jpg" style="background: white;">
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
                            <a href="/" class="pl-lg-1">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-grid-squares-22"></div>
                                </div>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li <?php if ($title == "Payments"){echo "class=\"active\"";} ?>>
                            <a href="payments" class="pl-lg-1">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-wallet-loaded"></div>
                                </div>
                                <span>Payments</span>
                            </a>
                        </li>
                        <li <?php if ($title == "Vendors"){echo "class=\"active\"";} ?>>
                            <a href="vendors" class="pl-lg-1">
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
                            <a href="states" class="pl-lg-1">
                                <div class="icon-w">
                                    <div class="fa fa-building-o"></div>
                                </div>
                                <span>States</span>
                            </a>
                        </li>
                        <li <?php if ($title == "Fees"){echo "class=\"active\"";} ?>>
                            <a href="fees" class="pl-lg-1">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-coins-4"></div>
                                </div>
                                <span>State Fees</span>
                            </a>
                        </li>
                        <li <?php if ($title == "Ministries"){echo "class=\"active\"";} ?>>
                            <a href="ministries" class="pl-lg-1">
                                <div class="icon-w">
                                    <div class="fa fa-university"></div>
                                </div>
                                <span>Ministries</span>
                            </a>
                        </li>
                        <li <?php if ($title == "Users"){echo "class=\"active\"";} ?>>
                            <a href="users">
                                <div class="icon-w">
                                    <div class="icon-people"></div>
                                </div>
                                <span>Users</span>
                            </a>
                        </li>
                        <li <?php if ($title == "Profile"){echo "class=\"active\"";} ?>>
                            <a href="profile">
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
                            <a href="profile">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-fingerprint"></div>
                                </div>
                                <span>Change Password</span>
                            </a>
                        </li>
                        <li>
                            <a href="logout">
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
                    <a class="logo mb-3 mt-3" href="">
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
                            <a href="profile">
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
                                    <a href="profile"><i class="os-icon os-icon-fingerprint"></i><span>Change Password</span></a>
                                </li>
                                <li>
                                    <a href="logout"><i class="icon-logout"></i><span>Logout</span></a>
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
                    <li <?php if ($title == "Tax Payers"){echo "class=\"active\"";} ?>>
                        <a href="tax-payers" class="">
                            <div class="icon-w">
                                <div class="icon-feather-file-text"></div>
                            </div>
                            <span>Tax Payers</span>
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
                            <span>Fees</span>
                        </a>
                    </li>
                    <li <?php if ($title == "Ministries"){echo "class=\"active\"";} ?>>
                        <a href="ministries" class="">
                            <div class="icon-w">
                                <div class="fa fa-university"></div>
                            </div>
                            <span>Ministries</span>
                        </a>
                    </li>
                    <li <?php if ($title == "Users"){echo "class=\"active\"";} ?>>
                        <a href="users" class="">
                            <div class="icon-w">
                                <div class="icon-people"></div>
                            </div>
                            <span>Users</span>
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
                        <img width="70px" src="../assets/img/firs.png" alt="FIRS">
                    </div>
                    <div class="col-12 text-center p-0">
                        <p class="label m-0">Copyright © 2020<br>Elnino Technologies</p>
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
                            <div class="col-sm-12">
                                <div class="element-wrapper">
                                    <div class="element-box">
                                        <div class="element-info">
                                            <div class="row align-items-center">
                                                <div class="col-sm-12">
                                                    <div class="element-info-with-icon">
                                                        <div class="element-info-icon">
                                                            <div class="icon-feather-activity"></div>
                                                        </div>
                                                        <div class="element-info-text">
                                                            <h5 class="element-inner-header">
                                                                Payments Overview
                                                            </h5>
                                                            <div class="element-inner-desc">
                                                                All Payments VAT, WHT & Stamp Duty that have been made
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="element-balances">
                                                    <div class="balance el-tablo mt-4 mb-4">
                                                        <div class="balance-title">
                                                            Total Payments
                                                        </div>
                                                        <div class="balance-value">
                                                            <strong>1609</strong>
                                                        </div>
                                                        <div class="balance-link">
                                                            <a class="btn btn-link btn-underlined" href="payments"><span>View Details</span><i class="os-icon os-icon-arrow-right4"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="balance el-tablo mt-4 mb-4">
                                                        <div class="balance-title">
                                                            Swept Payments
                                                        </div>
                                                        <div class="balance-value">
                                                            <strong>1580</strong>
                                                        </div>
                                                        <div class="balance-link">
                                                            <a class="btn btn-link btn-underlined" href="payments"><span>View Details</span><i class="os-icon os-icon-arrow-right4"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="balance el-tablo mt-4 mb-4">
                                                        <div class="balance-title">
                                                            Pending Payments
                                                        </div>
                                                        <div class="balance-value">
                                                            <strong>29</strong>
                                                        </div>
                                                        <div class="balance-link">
                                                            <a class="btn btn-link btn-underlined" href="payments"><span>View Details</span><i class="os-icon os-icon-arrow-right4"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="element-wrapper">
                                    <div class="element-box">
                                        <div class="element-info">
                                            <div class="row align-items-center">
                                                <div class="col-sm-12">
                                                    <div class="element-info-with-icon">
                                                        <div class="element-info-icon">
                                                            <i class="icon-feather-clock"></i>
                                                        </div>
                                                        <div class="element-info-text">
                                                            <h5 class="element-inner-header">
                                                                Recent Payments
                                                            </h5>
                                                            <div class="element-inner-desc">
                                                                All payments that have been made recently
                                                            </div>
                                                            <a class="btn btn-link btn-underlined smaller" href="payments"><span>View all payments</span><i class="os-icon os-icon-arrow-right4"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="element-box-tp">
                                            <div class="table-responsive">
                                                <table id="datatable" width="100%" class="table nowrap table table-hover table-lightborder table-lightfont">
                                                    <thead>
                                                        <tr>
                                                            <th>TID</th>
                                                            <th>Vendor</th>
                                                            <th>Payment Purpose</th>
                                                            <th>Status</th>
                                                            <th>VAT</th>
                                                            <th>WHT</th>
                                                            <th>Stamp Duty</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>2214</td>
                                                            <td class="nowrap">UBIQUITE SOLUTIONS LTD</td>
                                                            <td class="nowrap">CONSTRUCTION OF MBIAMA ROUNDABOUT</td>
                                                            <td class="nowrap">
                                                                <span class="status-pill smaller yellow"></span><span>Pending</span>
                                                            </td>
                                                            <td>2</td>
                                                            <td>₦200,000.00</td>
                                                            <td>₦200,000.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2214</td>
                                                            <td class="nowrap">UBIQUITE SOLUTIONS LTD</td>
                                                            <td class="nowrap">CONSTRUCTION OF MBIAMA ROUNDABOUT</td>
                                                            <td class="nowrap">
                                                                <span class="status-pill smaller yellow"></span><span>Pending</span>
                                                            </td>
                                                            <td>2</td>
                                                            <td>₦200,000.00</td>
                                                            <td>₦200,000.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2214</td>
                                                            <td class="nowrap">UBIQUITE SOLUTIONS LTD</td>
                                                            <td class="nowrap">CONSTRUCTION OF MBIAMA ROUNDABOUT</td>
                                                            <td class="nowrap">
                                                                <span class="status-pill smaller green"></span><span>Complete</span>
                                                            </td>
                                                            <td>2</td>
                                                            <td>₦200,000.00</td>
                                                            <td>₦200,000.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2214</td>
                                                            <td class="nowrap">UBIQUITE SOLUTIONS LTD</td>
                                                            <td class="nowrap">CONSTRUCTION OF MBIAMA ROUNDABOUT</td>
                                                            <td class="nowrap">
                                                                <span class="status-pill smaller yellow"></span><span>Pending</span>
                                                            </td>
                                                            <td>2</td>
                                                            <td>₦200,000.00</td>
                                                            <td>₦200,000.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2214</td>
                                                            <td class="nowrap">UBIQUITE SOLUTIONS LTD</td>
                                                            <td class="nowrap">CONSTRUCTION OF MBIAMA ROUNDABOUT</td>
                                                            <td class="nowrap">
                                                                <span class="status-pill smaller green"></span><span>Complete</span>
                                                            </td>
                                                            <td>2</td>
                                                            <td>₦200,000.00</td>
                                                            <td>₦200,000.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2214</td>
                                                            <td class="nowrap">UBIQUITE SOLUTIONS LTD</td>
                                                            <td class="nowrap">CONSTRUCTION OF MBIAMA ROUNDABOUT</td>
                                                            <td class="nowrap">
                                                                <span class="status-pill smaller green"></span><span>Complete</span>
                                                            </td>
                                                            <td>2</td>
                                                            <td>₦200,000.00</td>
                                                            <td>₦200,000.00</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="element-wrapper">
                                    <div class="element-box">
                                        <div class="element-info">
                                            <div class="row align-items-center">
                                                <div class="col-sm-12">
                                                    <div class="element-info-with-icon">
                                                        <div class="element-info-icon">
                                                            <i class="icon-feather-loader"></i>
                                                        </div>
                                                        <div class="element-info-text">
                                                            <h5 class="element-inner-header">
                                                                Pending Payments
                                                            </h5>
                                                            <div class="element-inner-desc">
                                                                All pending payments with ageing period and days count since payment initiated
                                                            </div>
                                                            <a class="btn btn-link btn-underlined smaller" href="payments/pending.php"><span>View all pending payments</span><i class="os-icon os-icon-arrow-right4"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="element-box-tp">
                                            <div class="table-responsive">
                                                <table id="datatable" width="100%" class="table nowrap table table-hover table-lightborder table-lightfont">
                                                    <thead>
                                                        <tr>
                                                            <th>TID</th>
                                                            <th>Vendor</th>
                                                            <th>Payment Purpose</th>
                                                            <th>Status</th>
                                                            <th>Days</th>
                                                            <th>Penalty Due</th>
                                                            <th>VAT</th>
                                                            <th>WHT</th>
                                                            <th>Stamp Duty</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>2214</td>
                                                            <td class="nowrap">UBIQUITE SOLUTIONS LTD</td>
                                                            <td class="nowrap">CONSTRUCTION OF MBIAMA ROUNDABOUT</td>
                                                            <td class="nowrap">
                                                                <span class="status-pill smaller yellow"></span><span>Pending</span>
                                                            </td>
                                                            <td>2</td>
                                                            <td>₦20,000.00</td>
                                                            <td>₦40,000</td>
                                                            <td>₦200,000.00</td>
                                                            <td>₦200,000.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2214</td>
                                                            <td class="nowrap">UBIQUITE SOLUTIONS LTD</td>
                                                            <td class="nowrap">CONSTRUCTION OF MBIAMA ROUNDABOUT</td>
                                                            <td class="nowrap">
                                                                <span class="status-pill smaller yellow"></span><span>Pending</span>
                                                            </td>
                                                            <td>2</td>
                                                            <td>₦20,000.00</td>
                                                            <td>₦40,000</td>
                                                            <td>₦200,000.00</td>
                                                            <td>₦200,000.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2214</td>
                                                            <td class="nowrap">UBIQUITE SOLUTIONS LTD</td>
                                                            <td class="nowrap">CONSTRUCTION OF MBIAMA ROUNDABOUT</td>
                                                            <td class="nowrap">
                                                                <span class="status-pill smaller yellow"></span><span>Pending</span>
                                                            </td>
                                                            <td>2</td>
                                                            <td>₦20,000.00</td>
                                                            <td>₦40,000</td>
                                                            <td>₦200,000.00</td>
                                                            <td>₦200,000.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2214</td>
                                                            <td class="nowrap">UBIQUITE SOLUTIONS LTD</td>
                                                            <td class="nowrap">CONSTRUCTION OF MBIAMA ROUNDABOUT</td>
                                                            <td class="nowrap">
                                                                <span class="status-pill smaller yellow"></span><span>Pending</span>
                                                            </td>
                                                            <td>2</td>
                                                            <td>₦20,000.00</td>
                                                            <td>₦40,000</td>
                                                            <td>₦200,000.00</td>
                                                            <td>₦200,000.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2214</td>
                                                            <td class="nowrap">UBIQUITE SOLUTIONS LTD</td>
                                                            <td class="nowrap">CONSTRUCTION OF MBIAMA ROUNDABOUT</td>
                                                            <td class="nowrap">
                                                                <span class="status-pill smaller yellow"></span><span>Pending</span>
                                                            </td>
                                                            <td>2</td>
                                                            <td>₦20,000.00</td>
                                                            <td>₦40,000</td>
                                                            <td>₦200,000.00</td>
                                                            <td>₦200,000.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2214</td>
                                                            <td class="nowrap">UBIQUITE SOLUTIONS LTD</td>
                                                            <td class="nowrap">CONSTRUCTION OF MBIAMA ROUNDABOUT</td>
                                                            <td class="nowrap">
                                                                <span class="status-pill smaller yellow"></span><span>Pending</span>
                                                            </td>
                                                            <td>2</td>
                                                            <td>₦20,000.00</td>
                                                            <td>₦40,000</td>
                                                            <td>₦200,000.00</td>
                                                            <td>₦200,000.00</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="element-wrapper">
                                    <div class="element-box">
                                        <div class="element-info">
                                            <div class="row align-items-center">
                                                <div class="col-sm-12">
                                                    <div class="element-info-with-icon">
                                                        <div class="element-info-icon">
                                                            <i class="icon-feather-check-circle"></i>
                                                        </div>
                                                        <div class="element-info-text">
                                                            <h5 class="element-inner-header">
                                                                Swept Payments
                                                            </h5>
                                                            <div class="element-inner-desc">
                                                                All payments that have been swept
                                                            </div>
                                                            <a class="btn btn-link btn-underlined smaller" href="payments/swept.php"><span>View all swept payments</span><i class="os-icon os-icon-arrow-right4"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="element-box-tp">
                                            <div class="table-responsive">
                                                <table id="datatable" width="100%" class="table nowrap table table-hover table-lightborder table-lightfont">
                                                    <thead>
                                                        <tr>
                                                            <th>TID</th>
                                                            <th>Vendor</th>
                                                            <th>Payment Purpose</th>
                                                            <th>Status</th>
                                                            <th>VAT</th>
                                                            <th>WHT</th>
                                                            <th>Stamp Duty</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>2214</td>
                                                            <td class="nowrap">UBIQUITE SOLUTIONS LTD</td>
                                                            <td class="nowrap">CONSTRUCTION OF MBIAMA ROUNDABOUT</td>
                                                            <td class="nowrap">
                                                                <span class="status-pill smaller green"></span><span>Complete</span>
                                                            </td>
                                                            <td>2</td>
                                                            <td>₦200,000.00</td>
                                                            <td>₦200,000.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2214</td>
                                                            <td class="nowrap">UBIQUITE SOLUTIONS LTD</td>
                                                            <td class="nowrap">CONSTRUCTION OF MBIAMA ROUNDABOUT</td>
                                                            <td class="nowrap">
                                                                <span class="status-pill smaller green"></span><span>Complete</span>
                                                            </td>
                                                            <td>2</td>
                                                            <td>₦200,000.00</td>
                                                            <td>₦200,000.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2214</td>
                                                            <td class="nowrap">UBIQUITE SOLUTIONS LTD</td>
                                                            <td class="nowrap">CONSTRUCTION OF MBIAMA ROUNDABOUT</td>
                                                            <td class="nowrap">
                                                                <span class="status-pill smaller green"></span><span>Complete</span>
                                                            </td>
                                                            <td>2</td>
                                                            <td>₦200,000.00</td>
                                                            <td>₦200,000.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2214</td>
                                                            <td class="nowrap">UBIQUITE SOLUTIONS LTD</td>
                                                            <td class="nowrap">CONSTRUCTION OF MBIAMA ROUNDABOUT</td>
                                                            <td class="nowrap">
                                                                <span class="status-pill smaller green"></span><span>Complete</span>
                                                            </td>
                                                            <td>2</td>
                                                            <td>₦200,000.00</td>
                                                            <td>₦200,000.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2214</td>
                                                            <td class="nowrap">UBIQUITE SOLUTIONS LTD</td>
                                                            <td class="nowrap">CONSTRUCTION OF MBIAMA ROUNDABOUT</td>
                                                            <td class="nowrap">
                                                                <span class="status-pill smaller green"></span><span>Complete</span>
                                                            </td>
                                                            <td>2</td>
                                                            <td>₦200,000.00</td>
                                                            <td>₦200,000.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2214</td>
                                                            <td class="nowrap">UBIQUITE SOLUTIONS LTD</td>
                                                            <td class="nowrap">CONSTRUCTION OF MBIAMA ROUNDABOUT</td>
                                                            <td class="nowrap">
                                                                <span class="status-pill smaller green"></span><span>Complete</span>
                                                            </td>
                                                            <td>2</td>
                                                            <td>₦200,000.00</td>
                                                            <td>₦200,000.00</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Payments Today -->
                            <div class="col-sm-12">
                                <div class="element-wrapper">
                                    <div class="element-box">
                                        <div class="row align-items-center">
                                            <div class="col-sm-12">
                                                <div class="element-info-text">
                                                    <h6 class="element-header">
                                                        Payments Today
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                Payments Made Today
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>80,000
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                Payments Swept Today
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>65,000
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                Payments to be Swept Today
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>15,000
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                VAT Made Today
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>80,000
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                VAT Swept Today
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>65,000
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                VAT to be Swept Today
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>15,000
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                WHT Made Today
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>80,000
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                WHT Swept Today
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>65,000
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                WHT to be Swept Today
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>15,000
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                Stamp Duty Made Today
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>80,000
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                Stamp Duty Swept Today
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>65,000
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                Stamp Duty to be Swept Today
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>15,000
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                State IGR Made Today
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>80,000
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                State IGR Swept Today
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>65,000
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                State IGR to be Swept Today
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>15,000
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Payments This Week -->
                            <div class="col-sm-12">
                                <div class="element-wrapper">
                                    <div class="element-box">
                                        <div class="row align-items-center">
                                            <div class="col-sm-12">
                                                <div class="element-info-text">
                                                    <h6 class="element-header">
                                                        Payments this Week
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                Payments Made This Week
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>80,000
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                Payments Swept This Week
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>65,000
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                Payments to be Swept This Week
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>15,000
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                VAT Made This Week
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>80,000
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                VAT Swept This Week
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>65,000
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                VAT to be Swept This Week
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>15,000
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                WHT Made This Week
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>80,000
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                WHT Swept This Week
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>65,000
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                WHT to be Swept This Week
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>15,000
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                Stamp Duty Made This Week
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>80,000
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                Stamp Duty Swept This Week
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>65,000
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                Stamp Duty to be Swept This Week
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>15,000
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                State IGR Made This Week
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>80,000
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                State IGR Swept This Week
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>65,000
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                State IGR to be Swept This Week
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>15,000
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Payments This Month -->
                            <div class="col-sm-12">
                                <div class="element-wrapper">
                                    <div class="element-box">
                                        <div class="row align-items-center">
                                            <div class="col-sm-12">
                                                <div class="element-info-text">
                                                    <h6 class="element-header">
                                                        Payments this Month
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                Payments Made This Month
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>80,000
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                Payments Swept This Month
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>65,000
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                Payments to be Swept This Month
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>15,000
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                VAT Made This Month
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>80,000
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                VAT Swept This Month
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>65,000
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                VAT to be Swept This Month
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>15,000
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                WHT Made This Month
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>80,000
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                WHT Swept This Month
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>65,000
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                WHT to be Swept This Month
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>15,000
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                Stamp Duty Made This Month
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>80,000
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                Stamp Duty Swept This Month
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>65,000
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                Stamp Duty to be Swept This Month
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>15,000
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                State IGR Made This Month
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>80,000
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                State IGR Swept This Month
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>65,000
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                State IGR to be Swept This Month
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>15,000
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Payments This Year -->
                            <div class="col-sm-12">
                                <div class="element-wrapper">
                                    <div class="element-box">
                                        <div class="row align-items-center">
                                            <div class="col-sm-12">
                                                <div class="element-info-text">
                                                    <h6 class="element-header">
                                                        Payments this Year
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                Payments Made This Year
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>80,000
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                Payments Swept This Year
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>65,000
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                Payments to be Swept This Year
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>15,000
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                VAT Made This Year
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>80,000
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                VAT Swept This Year
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>65,000
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                VAT to be Swept This Year
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>15,000
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                WHT Made This Year
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>80,000
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                WHT Swept This Year
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>65,000
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                WHT to be Swept This Year
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>15,000
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                Stamp Duty Made This Year
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>80,000
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                Stamp Duty Swept This Year
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>65,000
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                Stamp Duty to be Swept This Year
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>15,000
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                State IGR Made This Year
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>80,000
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                State IGR Swept This Year
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>65,000
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                                                        <div class="centered el-tablo padded border smaller rounded">
                                                            <div class="label">
                                                                State IGR to be Swept This Year
                                                            </div>
                                                            <div class="value">
                                                                <strong>₦</strong>15,000
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