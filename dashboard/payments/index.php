<?php
    $title = 'Payments';
    require_once '../includes/header.php';
    // require_once '../includes/bgcolor.php';
    // require_once '../includes/chat.php';
?>
<div class="content-box">
    <div class="row">
        <div class="col-sm-12">
            <div class="element-wrapper">
                <div class="element-box">
                    <div class="pt-3 pb-3">
                        <div class="element-info-with-icon m-0">
                            <div class="element-info-icon">
                                <div class="os-icon os-icon-wallet-loaded"></div>
                            </div>
                            <div class="element-info-text">
                                <h5 class="element-inner-header">
                                    Vendor Payments
                                </h5>
                                <div class="element-inner-desc">
                                    All Payments that has occurred
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="element-wrapper">
                <div class="element-box px-0">
                    <form>
                        <div class="steps-w">
                            <div class="step-trikkers">
                                <a class="step-trikker active" href="">All Payments</a>
                                <a class="step-trikker" href="unswept.php">Unswept Payments</a>
                                <a class="step-trikker" href="swept.php">Swept Payments</a>
                            </div>
                            <div class="step-contents">
                                <div class="step-content active p-0">
                                    <div class="table-responsive">
                                        <table id="datatable" width="100%" class="table nowrap table table-hover table-lightfont">
                                            <thead>
                                                <tr>
                                                    <th class="invisible" colspan="2"></th>
                                                    <th>VENDOR</th>
                                                    <th>PAYMENT PURPOSE</th>
                                                    <th>FROM</th>
                                                    <th>DATE</th>
                                                    <th>STATUS</th>
                                                    <th>AMOUNT</th>
                                                    <th>WHT</th>
                                                    <th>NET-AMOUNT</th>
                                                    <th>REF</th>
                                                    <th>VAT</th>
                                                    <th>LEVIES</th>
                                                    <th>ACTIONS</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th class="invisible" colspan="2"></th>
                                                    <th>VENDOR</th>
                                                    <th>PAYMENT PURPOSE</th>
                                                    <th>FROM</th>
                                                    <th>DATE</th>
                                                    <th>STATUS</th>
                                                    <th>AMOUNT</th>
                                                    <th>WHT</th>
                                                    <th>NET-AMOUNT</th>
                                                    <th>REF</th>
                                                    <th>VAT</th>
                                                    <th>LEVIES</th>
                                                    <th>ACTIONS</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="checkbox" name="acs" data-placement="top" data-toggle="tooltip" data-original-title="Select Payment">
                                                    </td>
                                                    <td>
                                                        <a href="view.php" class="text-primary p-3" data-placement="top" data-toggle="tooltip" data-original-title="View Payment"><i class="os-icon os-icon-eye"></i></a>
                                                    </td>
                                                    <td>FEROTEX CONSTRUCTION COMPANY LTD</td>
                                                    <td>CONSTRUCTION OF OBECHARA - BISHOP SHANAHAN ENUGU ROAD</td>
                                                    <td>OFFICE OF THE ACCOUNTANT GENERAL - United Bank for Africa (1018803232)</td>
                                                    <td><span>Aug 6th</span> <span class="smaller lighter">05:10am</span></td>
                                                    <td class="nowrap">
                                                        <span class="status-pill smaller yellow"></span><span>Pending</span>
                                                    </td>
                                                    <td>₦82,900,114</td>
                                                    <td>₦73,781,102</td>
                                                    <td>₦4,145,006</td>
                                                    <td>ENU/FIRS0001/IR</td>
                                                    <td>₦4,145,006</td>
                                                    <td>₦4,006</td>
                                                    <td class="action">
                                                        <a class="btn btn-danger btn-sm" href="#" data-target="#delete" data-toggle="modal">Delete</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="checkbox" name="acs" data-placement="top" data-toggle="tooltip" data-original-title="Select Payment">
                                                    </td>
                                                    <td>
                                                        <a href="view.php" class="text-primary p-3" data-placement="top" data-toggle="tooltip" data-original-title="View Payment"><i class="os-icon os-icon-eye"></i></a>
                                                    </td>
                                                    <td>COPEN SERVICE LTD</td>
                                                    <td>CONTRUCTION OF ZONAL SECRETARIAT AT NSUKKA</td>
                                                    <td>OFFICE OF THE ACCOUNTANT GENERAL - United Bank for Africa (1018803232)</td>
                                                    <td><span>Aug 6th</span> <span class="smaller lighter">05:12am</span></td>
                                                    <td class="nowrap">
                                                        <span class="status-pill smaller green"></span><span>Swept</span>
                                                    </td>
                                                    <td>₦119,614,053</td>
                                                    <td>₦106,456,508</td>
                                                    <td>₦5,980,703</td>
                                                    <td>ENU/FIRS0002/IR</td>
                                                    <td>₦5,980,703</td>
                                                    <td>₦4,006</td>
                                                    <td class="action">
                                                        <a class="btn btn-danger btn-sm" href="#" data-target="#delete" data-toggle="modal">Delete</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="checkbox" name="acs" data-placement="top" data-toggle="tooltip" data-original-title="Select Payment">
                                                    </td>
                                                    <td>
                                                        <a href="view.php" class="text-primary p-3" data-placement="top" data-toggle="tooltip" data-original-title="View Payment"><i class="os-icon os-icon-eye"></i></a>
                                                    </td>
                                                    <td>INDIANA COMPANY LTD</td>
                                                    <td>CONSTRUCTION OF MODEL CUSTOMARY COURT NGWO, ENUGU</td>
                                                    <td>OFFICE OF THE ACCOUNTANT GENERAL - United Bank for Africa (1018803232)</td>
                                                    <td><span>Aug 6th</span> <span class="smaller lighter">05:13am</span></td>
                                                    <td class="nowrap">
                                                        <span class="status-pill smaller red"></span><span>Unswept</span>
                                                    </td>
                                                    <td>₦7,142,857</td>
                                                    <td>₦6,357,143</td>
                                                    <td>₦357,143</td>
                                                    <td>ENU/FIRS0003/IR</td>
                                                    <td>₦357,143</td>
                                                    <td>₦4,006</td>
                                                    <td class="action">
                                                        <a class="btn btn-danger btn-sm" href="#" data-target="#delete" data-toggle="modal">Delete</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="checkbox" name="acs" data-placement="top" data-toggle="tooltip" data-original-title="Select Payment">
                                                    </td>
                                                    <td>
                                                        <a href="view.php" class="text-primary p-3" data-placement="top" data-toggle="tooltip" data-original-title="View Payment"><i class="os-icon os-icon-eye"></i></a>
                                                    </td>
                                                    <td>GOJOPAL NIGERIA LTD</td>
                                                    <td>CONTRUCTION OF MODEL CUSTOMARY COURT ENUGU SOUTH LGA</td>
                                                    <td>OFFICE OF THE ACCOUNTANT GENERAL - United Bank for Africa (1018803232)</td>
                                                    <td><span>Aug 6th</span> <span class="smaller lighter">05:16am</span></td>
                                                    <td class="nowrap">
                                                        <span class="status-pill smaller green"></span><span>Swept</span>
                                                    </td>
                                                    <td>₦8,299,994</td>
                                                    <td>₦7,386,995</td>
                                                    <td>₦415,000</td>
                                                    <td>ENU/FIRS0004/IR</td>
                                                    <td>₦415,000</td>
                                                    <td>₦4,006</td>
                                                    <td class="action">
                                                        <a class="btn btn-danger btn-sm" href="#" data-target="#delete" data-toggle="modal">Delete</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="checkbox" name="acs" data-placement="top" data-toggle="tooltip" data-original-title="Select Payment">
                                                    </td>
                                                    <td>
                                                        <a href="view.php" class="text-primary p-3" data-placement="top" data-toggle="tooltip" data-original-title="View Payment"><i class="os-icon os-icon-eye"></i></a>
                                                    </td>
                                                    <td>ANBEEZ SERVICE LIMITED</td>
                                                    <td>CONSTRUCTION OF 200 BEDDED ADADA SPECIALIST HOSPITAL</td>
                                                    <td>OFFICE OF THE ACCOUNTANT GENERAL - United Bank for Africa (1018803232)</td>
                                                    <td><span>Aug 6th</span> <span class="smaller lighter">05:17am</span></td>
                                                    <td class="nowrap">
                                                        <span class="status-pill smaller red"></span><span>Unswept</span>
                                                    </td>
                                                    <td>₦24,039,564</td>
                                                    <td>₦21,395,212</td>
                                                    <td>₦1,201,978</td>
                                                    <td>ENU/FIRS0005/IR</td>
                                                    <td>₦1,201,978</td>
                                                    <td>₦4,006</td>
                                                    <td class="action">
                                                        <a class="btn btn-danger btn-sm" href="#" data-target="#delete" data-toggle="modal">Delete</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="checkbox" name="acs" data-placement="top" data-toggle="tooltip" data-original-title="Select Payment">
                                                    </td>
                                                    <td>
                                                        <a href="view.php" class="text-primary p-3" data-placement="top" data-toggle="tooltip" data-original-title="View Payment"><i class="os-icon os-icon-eye"></i></a>
                                                    </td>
                                                    <td>ENUGU STATE HOUSING DEVELOPMENT COOPERATION</td>
                                                    <td>CONSTRUCTION OF CUSTOMARY COURT BUILDING AT NNSUKA LGA</td>
                                                    <td>OFFICE OF THE ACCOUNTANT GENERAL - United Bank for Africa (1018803232)</td>
                                                    <td><span>Aug 9th</span> <span class="smaller lighter">02:43am</span></td>
                                                    <td class="nowrap">
                                                        <span class="status-pill smaller yellow"></span><span>Pending</span>
                                                    </td>
                                                    <td>₦7,142,857</td>
                                                    <td>₦6,357,143</td>
                                                    <td>₦357,143</td>
                                                    <td>ENU/FIRS0033/IR</td>
                                                    <td>₦357,143</td>
                                                    <td>₦4,006</td>
                                                    <td class="action">
                                                        <a class="btn btn-danger btn-sm" href="#" data-target="#delete" data-toggle="modal">Delete</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="checkbox" name="acs" data-placement="top" data-toggle="tooltip" data-original-title="Select Payment">
                                                    </td>
                                                    <td>
                                                        <a href="view.php" class="text-primary p-3" data-placement="top" data-toggle="tooltip" data-original-title="View Payment"><i class="os-icon os-icon-eye"></i></a>
                                                    </td>
                                                    <td>ENUGU STATE HOUSING DEVELOPMENT COOPERATION</td>
                                                    <td>CONSTRUCTION OF CUSTOMARY COURT BUILDING AT ADANI UZO UWANI LGA</td>
                                                    <td>OFFICE OF THE ACCOUNTANT GENERAL - United Bank for Africa (1018803232)</td>
                                                    <td><span>Aug 9th</span> <span class="smaller lighter">02:45am</span></td>
                                                    <td class="nowrap">
                                                        <span class="status-pill smaller green"></span><span>Swept</span>
                                                    </td>
                                                    <td>₦7,142,857</td>
                                                    <td>₦6,357,143</td>
                                                    <td>₦357,143</td>
                                                    <td>ENU/FIRS0034/IR</td>
                                                    <td>₦357,143</td>
                                                    <td>₦4,006</td>
                                                    <td class="action">
                                                        <a class="btn btn-danger btn-sm" href="#" data-target="#delete" data-toggle="modal">Delete</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="checkbox" name="acs" data-placement="top" data-toggle="tooltip" data-original-title="Select Payment">
                                                    </td>
                                                    <td>
                                                        <a href="view.php" class="text-primary p-3" data-placement="top" data-toggle="tooltip" data-original-title="View Payment"><i class="os-icon os-icon-eye"></i></a>
                                                    </td>
                                                    <td>ENUGU STATE HOUSING DEVELOPMENT COOPERATION</td>
                                                    <td>CONSTRUCTION OF CUSTOMARY COURT BUILDING AT OGRUTE IGBO EZE NORTH</td>
                                                    <td>OFFICE OF THE ACCOUNTANT GENERAL - United Bank for Africa (1018803232)</td>
                                                    <td><span>Aug 9th</span> <span class="smaller lighter">02:47am</span></td>
                                                    <td class="nowrap">
                                                        <span class="status-pill smaller yellow"></span><span>Pending</span>
                                                    </td>
                                                    <td>₦7,142,857</td>
                                                    <td>₦6,357,143</td>
                                                    <td>₦357,143</td>
                                                    <td>ENU/FIRS0035/IR</td>
                                                    <td>₦357,143</td>
                                                    <td>₦4,006</td>
                                                    <td class="action">
                                                        <a class="btn btn-danger btn-sm" href="#" data-target="#delete" data-toggle="modal">Delete</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="checkbox" name="acs" data-placement="top" data-toggle="tooltip" data-original-title="Select Payment">
                                                    </td>
                                                    <td>
                                                        <a href="view.php" class="text-primary p-3" data-placement="top" data-toggle="tooltip" data-original-title="View Payment"><i class="os-icon os-icon-eye"></i></a>
                                                    </td>
                                                    <td>ENUGU STATE HOUSING DEVELOPMENT COOPERATION</td>
                                                    <td>CONSTRUCTION OF CUSTOMARY COURT BUILDING AT IGBAGWA</td>
                                                    <td>OFFICE OF THE ACCOUNTANT GENERAL - United Bank for Africa (1018803232)</td>
                                                    <td><span>Aug 9th</span> <span class="smaller lighter">02:50am</span></td>
                                                    <td class="nowrap">
                                                        <span class="status-pill smaller red"></span><span>Unswept</span>
                                                    </td>
                                                    <td>₦7,142,857</td>
                                                    <td>₦6,357,143</td>
                                                    <td>₦357,143</td>
                                                    <td>ENU/FIRS0036/IR</td>
                                                    <td>₦357,143</td>
                                                    <td>₦4,006</td>
                                                    <td class="action">
                                                        <a class="btn btn-danger btn-sm" href="#" data-target="#delete" data-toggle="modal">Delete</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="checkbox" name="acs" data-placement="top" data-toggle="tooltip" data-original-title="Select Payment">
                                                    </td>
                                                    <td>
                                                        <a href="view.php" class="text-primary p-3" data-placement="top" data-toggle="tooltip" data-original-title="View Payment"><i class="os-icon os-icon-eye"></i></a>
                                                    </td>
                                                    <td>ENUGU STATE HOUSING DEVELOPMENT COOPERATION</td>
                                                    <td>CONSTRUCTION OF CUSTOMARY COURT BUILDING AT OBOLLO AFOR UDENU LGA</td>
                                                    <td>OFFICE OF THE ACCOUNTANT GENERAL - United Bank for Africa (1018803232)</td>
                                                    <td><span>Aug 9th</span> <span class="smaller lighter">03:03am</span></td>
                                                    <td class="nowrap">
                                                        <span class="status-pill smaller green"></span><span>Swept</span>
                                                    </td>
                                                    <td>₦7,142,857</td>
                                                    <td>₦6,357,143</td>
                                                    <td>₦357,143</td>
                                                    <td>ENU/FIRS0037/IR</td>
                                                    <td>₦357,143</td>
                                                    <td>₦4,006</td>
                                                    <td class="action">
                                                        <a class="btn btn-danger btn-sm" href="#" data-target="#delete" data-toggle="modal">Delete</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" class="checkbox" name="acs" data-placement="top" data-toggle="tooltip" data-original-title="Select Payment">
                                                    </td>
                                                    <td>
                                                        <a href="view.php" class="text-primary p-3" data-placement="top" data-toggle="tooltip" data-original-title="View Payment"><i class="os-icon os-icon-eye"></i></a>
                                                    </td>
                                                    <td>ENUGU STATE HOUSING DEVELOPMENT COOPERATION</td>
                                                    <td>CONSTRUCTION OF CUSTOMARY COURT BUILDING AT AKU IGBO ETITI</td>
                                                    <td>OFFICE OF THE ACCOUNTANT GENERAL - United Bank for Africa (1018803232)</td>
                                                    <td><span>Aug 9th</span> <span class="smaller lighter">03:05am</span></td>
                                                    <td class="nowrap">
                                                        <span class="status-pill smaller green"></span><span>Swept</span>
                                                    </td>
                                                    <td>₦7,142,857</td>
                                                    <td>₦6,357,143</td>
                                                    <td>₦357,143</td>
                                                    <td>ENU/FIRS0038/IR</td>
                                                    <td>₦357,143</td>
                                                    <td>₦4,006</td>
                                                    <td class="action">
                                                        <a class="btn btn-danger btn-sm" href="#" data-target="#delete" data-toggle="modal">Delete</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="mx-0 mt-4 pt-0 px-4 row">
                                        <div class="col-sm"></div>
                                        <div class="col-md-auto col-sm-12 mb-4">
                                            <a href="#" onclick="selectAll()" id="checker" class="btn btn-block btn-white p-3 px-5"><i class="icon-plus mr-3"></i>Select All</a>
                                        </div>
                                        <div class="col-md-auto col-sm-12">
                                            <button class="btn p-3 px-5 btn-danger btn-block" type="submit">Delete Selected<i class="icon-feather-trash ml-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
    require_once '../includes/footer.php';
?>
