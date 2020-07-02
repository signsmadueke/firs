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
                                    All Pending Payments
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="element-wrapper">
                <div class="element-box px-0 pb-0">
                    <div class="row border-bottom py-5 mx-0">
                        <div class="col-12 text-center">
                            <img src="../../assets/img/firs.png" alt="" width="150px">
                        </div>
                    </div>
                    <div class="row border-bottom py-5 mx-0">
                        <div class="col-6 text-right">
                            <p>Payment From</p>
                            <h4>Enugu State Government</h4>
                            <p class="m-0" style="word-break: break-all;">
                                Enugu
                                <br>
                                Nigeria
                            </p>
                        </div>
                        <div class="col-6 text-left">
                            <p>Payment To</p>
                            <h4>Signs Madueke</h4>
                            <p class="m-0" style="word-break: break-all;">
                                Enugu
                                <br>
                                Nigeria
                                <br>
                                08084048140
                                <br>
                                signsmadueke1@gmail.com
                            </p>
                        </div>
                    </div>
                    <div class="row py-5 mx-3">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="element-box el-tablo bg-background">
                                <div class="label text-light">
                                    Invoice
                                </div>
                                <h6 class="text-light pt-2 m-0">
                                    FIRS/EBS0020/IR
                                </h6>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="element-box el-tablo bg-background">
                                <div class="label text-light">
                                    Date
                                </div>
                                <h6 class="text-light pt-2 m-0">
                                    07/19/2019
                                </h6>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="element-box el-tablo bg-background">
                                <div class="label text-light">
                                    Net Amount
                                </div>
                                <h6 class="text-light pt-2 m-0">
                                    ₦890.00
                                </h6>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="w-100" style="overflow: hidden;">
                                <table id="" width="100%" class="table nowrap table-striped table-lightfont">
                                    <thead>
                                        <tr class="">
                                            <th>Payment Purpose</th>
                                            <th>Payment Description</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="">
                                            <td class="px-4 py-4">Witholding Tax (5%)</td>
                                            <td class="py-4">Money for Tax</td>
                                            <td class="py-4 text-danger"><strong>- 50.00</strong></td>
                                        </tr>
                                        <tr class="">
                                            <td class="px-4 py-4">Witholding Tax (5%)</td>
                                            <td class="py-4">Money for Tax</td>
                                            <td class="py-4 text-success"><strong>+ 50.00</strong></td>
                                        </tr>
                                        <tr class="">
                                            <td class="px-4 py-4">Witholding Tax (5%)</td>
                                            <td class="py-4">Money for Tax</td>
                                            <td class="py-4 text-success"><strong>+ 50.00</strong></td>
                                        </tr>
                                        <tr class="">
                                            <td class="px-4 py-4">Witholding Tax (5%)</td>
                                            <td class="py-4">Money for Tax</td>
                                            <td class="py-4 text-danger"><strong>- 50.00</strong></td>
                                        </tr>
                                        <tr class="">
                                            <td class="px-4 py-4">Witholding Tax (5%)</td>
                                            <td class="py-4">Money for Tax</td>
                                            <td class="py-4 text-success"><strong>+ 50.00</strong></td>
                                        </tr>
                                        <tr class="bg-dark text-light">
                                            <td class="px-4 py-4">Total</td>
                                            <td class="py-4"></td>
                                            <td class="py-4"><strong>+ 6500.00</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
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
