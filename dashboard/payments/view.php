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
                <div class="element-box row p-4 m-0">
                    <div class="col-sm">
                        <div class="element-info-with-icon m-0">
                            <div class="element-info-icon">
                                <i class="os-icon os-icon-documents-03"></i>
                            </div>
                            <div class="element-info-text">
                                <h5 class="element-inner-header">
                                    Print Receipt
                                </h5>
                                <div class="element-inner-desc">
                                    View and Print payment receipt
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-auto mt-4 mt-lg-0">
                        <a class="btn btn-block btn-primary el-tablo m-0 p-3 pl-4 pr-4 text-white" href="#" id="print">
                            <i class="os-icon os-icon-documents-03 mr-2"></i>
                            Print Receipt
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="element-wrapper">
                <div id="printable" class="element-box">
                    <div class="row border-bottom py-5">
                        <div class="col-12 text-center">
                            <img src="../../assets/img/firs.png" alt="" width="150px">
                        </div>
                    </div>
                    <div class="row border-bottom py-5">
                        <div class="col-6 text-right">
                            <p>Payment From</p>
                            <h4>
                                OFFICE OF THE ACCOUNTANT GENERAL
                            </h4>
                            <p class="m-0" style="word-break: break-all;">
                                Enugu
                                <br>
                                Nigeria
                            </p>
                        </div>
                        <div class="col-6 text-left">
                            <p>Payment To</p>
                            <h4>FEROTEX CONSTRUCTION COMPANY LTD</h4>
                            <p class="m-0" style="word-break: break-all;">
                                Enugu
                                <br>
                                Nigeria
                                <br>
                                08000000000 <br>
                                agftaxsolution@gmail.com </p>
                        </div>
                    </div>
                    <div class="row py-5">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="element-box el-tablo bg-info">
                                <div class="label text-light">
                                    Invoice
                                </div>
                                <h6 class="text-light pt-2 m-0">
                                    ENU/FIRS0001/IR </h6>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="element-box el-tablo bg-primary">
                                <div class="label text-light">
                                    Date
                                </div>
                                <h6 class="text-light pt-2 m-0">
                                    06/08/2019 </h6>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="element-box el-tablo bg-secondary">
                                <div class="label text-light">
                                    Net Amount
                                </div>
                                <h6 class="text-light pt-2 m-0">
                                    ₦73,781,102 </h6>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="" width="100%" class="table table-striped table-lightfont">
                                    <thead>
                                        <tr class="">
                                            <th>Payment Purpose</th>
                                            <th>Payment Description</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="">
                                            <td class="px-4 py-4">CONSTRUCTION OF OBECHARA - BISHOP SHANAHAN ENUGU ROAD</td>
                                            <td class="py-4">CONSTRUCTION OF OBECHARA - BISHOP SHANAHAN ENUGU ROAD</td>
                                            <td class="py-4 text-success"><strong>82,900,114</strong></td>
                                        </tr>
                                        <tr class="">
                                            <td class="px-4 py-4">Witholding Tax (4.9999999825091%)</td>
                                            <td class="py-4"></td>
                                            <td class="py-4 text-danger"><strong>- 4,145,006</strong></td>
                                        </tr>
                                        <tr class="">
                                            <td class="px-4 py-4">V.A.T (4.9999999825091%)</td>
                                            <td class="py-4"></td>
                                            <td class="py-4 text-danger"><strong>- 4,145,006</strong></td>
                                        </tr>
                                        <tr class="">
                                            <td class="px-4 py-4">STAMP DUTY (1%)</td>
                                            <td class="py-4"></td>
                                            <td class="py-4 text-danger"><strong>- 829,001</strong></td>
                                        </tr>
                                        <tr class="">
                                            <td class="px-4 py-4">TOTAL LEVIES/CHARGES</td>
                                            <td class="py-4"></td>
                                            <td class="py-4 text-danger"><strong>- </strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="mt-4 mx-0 pt-0 row">
                                <div class="col-sm-12 mb-4 px-0">
                                    <a class="btn btn-block btn-primary el-tablo m-0 p-3 pl-4 pr-4 text-white" href="../../assets/img/tax-receipt.jpeg">
                                        <i class="os-icon os-icon-documents-03 mr-2"></i>
                                        View Attachment
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
    require_once '../includes/footer.php';
?>
