<?php
require_once 'core/init.php';

$user = new User();
$payment = new Payment();
if (!$user->isLoggedIn()) {
    Redirect::to('../login.php');
}
    $title = 'Payments';
    require_once '../includes/header.php';
    // require_once '../includes/bgcolor.php';
    // require_once '../includes/chat.php';
?>
<div class="content-box">
    <div class="row col-sm-11">
        <div class="col-md-12 col-sm-12 col-lg-10">
            <div class="element-wrapper">
                <h6 class="element-header">
                    <?php echo $title; ?>
                </h6>
                <div class="element-box mb-5">
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
                <div class="element-box">
                    <form method="post">
                        <div class="steps-w">
                            <div class="step-trikkers">
                                <a class="step-trikker" href="">Payments</a>
                                <a class="step-trikker active" href="pending.php">Pending</a>
                                <a class="step-trikker" href="approved.php">Approved</a>
                            </div>
                            <div class="step-contents">
                                <div class="step-content active p-0">
                                    <div class="w-100" style="overflow: hidden;">
                                        <table id="datatable" width="100%" class="table nowrap table-striped table-lightfont">
                                            <thead>
                                                <tr class="">
                                                    <th class="invisible"></th>
                                                    <th>Vendor</th>
                                                    <th>Payment Purpose</th>
                                                    <th>From</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Amount</th>
                                                    <th>Net-Amount</th>
                                                    <th>WHT</th>
                                                    <th>Ref</th>
                                                    <th>VAT</th>
                                                    <th>Levies</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr class="">
                                                    <th class="invisible"></th>
                                                    <th>Vendor</th>
                                                    <th>Payment Purpose</th>
                                                    <th>From</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Amount</th>
                                                    <th>WHT</th>
                                                    <th>Net-Amount</th>
                                                    <th>Ref</th>
                                                    <th>VAT</th>
                                                    <th>Levies</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php 
                                                if ($payment->read('pending') !== false) {
                                                    foreach ($payment->read('pending') as $row) {?>
                                                        <tr class="">
                                                            <td class="p-0">
                                                                <?php if ($row->payment_status == 0) {?>
                                                                    <input type="checkbox" class="checkbox" name="acs" data-placement="top" data-toggle="tooltip" data-original-title="Select Payment">
                                                                <?php
                                                                } 
                                                                ?>
                                                                <a href="view.php" class="text-primary p-3" data-placement="top" data-toggle="tooltip" data-original-title="View Payment"><i class="os-icon os-icon-eye"></i></a>
                                                            </td>
                                                            <td><?php echo $row->vendor; ?></td>
                                                            <td><?php echo $row->payment_purpose ?></td>
                                                            <td><?php echo $row->payment_from; ?></td>
                                                            <td><span><?php echo date('M jS', $row->payment_time); ?></span><span class="smaller lighter"><?php echo date('h:ia', $row->payment_time); ?></span></td>
                                                            <td class="text-center">
                                                                <?php if ($row->payment_status == 0) {?>
                                                                    <span class="badge badge-info-inverted" href="">Final Approval</span>
                                                                <?php
                                                                } else {
                                                                ?>
                                                                    <span class="badge badge-primary-inverted" href="">Approved</span>
                                                                <?php 
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>₦<?php echo number_format($row->amount); ?></td>
                                                            <td>₦<?php echo number_format($row->net_amount); ?></td>
                                                            <td>₦<?php echo number_format($row->WHT); ?></td>
                                                            <td><?php echo $row->ref; ?></td>
                                                            <td>₦<?php echo number_format($row->VAT); ?></td>
                                                            <td>₦<?php echo number_format($row->levies); ?></td>
                                                        </tr>
                                                        <?php
                                                    } 
                                                }
                                                ?>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row pt-3">
                                        <div class="col-sm-12 col-md-12 col-lg-7 mb-2"></div>
                                        <div class="col-sm-12 col-md-4 col-lg-2 mb-2">
                                            <a href="#" onclick="selectAll()" id="checker" class="btn-block mt-3 p-3 btn btn-white"><i class="icon-plus mr-3"></i>Select All</a>
                                        </div>
                                        <div class="col-sm-12 col-md-8 col-lg-3 mb-2">
                                            <button class="p-3 mt-3 btn btn-primary btn-block" type="submit">Approve Selected<i class="icon-feather-check ml-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
<?php
    require_once '../includes/footer.php';
?>
