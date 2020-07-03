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
                                <div class="icon-feather-check-circle"></div>
                            </div>
                            <div class="element-info-text">
                                <h5 class="element-inner-header">
                                    Swept Vendor Payments
                                </h5>
                                <div class="element-inner-desc">
                                    All vendor payments that have been swept
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
                                <a class="step-trikker" href="index.php">All Payments</a>
                                <a class="step-trikker" href="unswept.php">Unswept Payments</a>
                                <a class="step-trikker active" href="">Swept Payments</a>
                            </div>
                            <div class="step-contents">
                                <div class="step-content active p-0">
                                    <div class="table-responsive">
                                        <table id="datatable" width="100%" class="table nowrap table table-hover table-lightfont">
                                            <thead>
                                                <tr>
                                                    <th class="invisible" colspan="1"></th>
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
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th class="invisible" colspan="1"></th>
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
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="view.php" class="text-primary p-3" data-placement="top" data-toggle="tooltip" data-original-title="View Payment"><i class="os-icon os-icon-eye"></i></a>
                                                    </td>
                                                    <td>FEROTEX CONSTRUCTION COMPANY LTD</td>
                                                    <td>CONSTRUCTION OF OBECHARA - BISHOP SHANAHAN ENUGU ROAD</td>
                                                    <td>OFFICE OF THE ACCOUNTANT GENERAL - United Bank for Africa (1018803232)</td>
                                                    <td><span>Aug 6th</span> <span class="smaller lighter">05:10am</span></td>
                                                    <td class="nowrap">
                                                        <span class="status-pill smaller green"></span><span>Swept</span>
                                                    </td>
                                                    <td>₦82,900,114</td>
                                                    <td>₦73,781,102</td>
                                                    <td>₦4,145,006</td>
                                                    <td>ENU/FIRS0001/IR</td>
                                                    <td>₦4,145,006</td>
                                                    <td>₦</td>
                                                </tr>
                                                <tr>
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
                                                    <td>₦</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="view.php" class="text-primary p-3" data-placement="top" data-toggle="tooltip" data-original-title="View Payment"><i class="os-icon os-icon-eye"></i></a>
                                                    </td>
                                                    <td>INDIANA COMPANY LTD</td>
                                                    <td>CONSTRUCTION OF MODEL CUSTOMARY COURT NGWO, ENUGU</td>
                                                    <td>OFFICE OF THE ACCOUNTANT GENERAL - United Bank for Africa (1018803232)</td>
                                                    <td><span>Aug 6th</span> <span class="smaller lighter">05:13am</span></td>
                                                    <td class="nowrap">
                                                        <span class="status-pill smaller green"></span><span>Swept</span>
                                                    </td>
                                                    <td>₦7,142,857</td>
                                                    <td>₦6,357,143</td>
                                                    <td>₦357,143</td>
                                                    <td>ENU/FIRS0003/IR</td>
                                                    <td>₦357,143</td>
                                                    <td>₦</td>
                                                </tr>
                                                <tr>
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
                                                    <td>₦</td>
                                                </tr>
                                            </tbody>
                                        </table>
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
