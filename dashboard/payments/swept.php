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
                                <a class="step-trikker" href="index.php">Payments</a>
                                <a class="step-trikker active" href="">Swept Payments</a>
                                <a class="step-trikker" href="pending.php">Pending Payments</a>
                            </div>
                            <div class="step-contents">
                                <div class="step-content active p-0">
                                    <div class="table-responsive">
                                        <table id="datatable" width="100%" class="table nowrap table table-hover table-lightfont">
                                            <thead>
                                                <tr class=""><th>Vendor</th>
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
                                                <tr class=""><th>Vendor</th>
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
                                                <tr class="">
                                                    <td>UBIQUITE SOLUTIONS LTD</td>
                                                    <td>CONSTRUCTION OF MBIAMA ROUNDABOUT</td>
                                                    <td>0047017429 - Access Bank PLC</td>
                                                    <td><span>Jan 9th</span><span class="smaller lighter">12:45pm</span></td>
                                                    <td class="text-center">
                                                        <span class="badge badge-primary-inverted" href="">Final Approval</span>
                                                    </td>
                                                    <td>₦40,000,000.00</td>
                                                    <td>₦200,000.00</td>
                                                    <td>₦180,000.00</td>
                                                    <td></td>
                                                    <td>₦0.00</td>
                                                    <td>₦0.00</td>
                                                </tr>
                                                <tr class="">
                                                    <td>UBIQUITE SOLUTIONS LTD</td>
                                                    <td>CONSTRUCTION OF MBIAMA ROUNDABOUT</td>
                                                    <td>0047017429 - Access Bank PLC</td>
                                                    <td><span>Jan 9th</span><span class="smaller lighter">12:45pm</span></td>
                                                    <td class="text-center">
                                                        <span class="badge badge-primary-inverted" href="">Final Approval</span>
                                                    </td>
                                                    <td>₦40,000,000.00</td>
                                                    <td>₦200,000.00</td>
                                                    <td></td>
                                                    <td>₦180,000.00</td>
                                                    <td>₦0.00</td>
                                                    <td>₦0.00</td>
                                                </tr>
                                                <tr class="">
                                                    <td>UBIQUITE SOLUTIONS LTD</td>
                                                    <td>CONSTRUCTION OF MBIAMA ROUNDABOUT</td>
                                                    <td>0047017429 - Access Bank PLC</td>
                                                    <td><span>Jan 9th</span><span class="smaller lighter">12:45pm</span></td>
                                                    <td class="text-center">
                                                        <span class="badge badge-primary-inverted" href="">Final Approval</span>
                                                    </td>
                                                    <td>₦40,000,000.00</td>
                                                    <td>₦200,000.00</td>
                                                    <td></td>
                                                    <td>₦180,000.00</td>
                                                    <td>₦0.00</td>
                                                    <td>₦0.00</td>
                                                </tr>
                                                <tr class="">
                                                    <td>UBIQUITE SOLUTIONS LTD</td>
                                                    <td>CONSTRUCTION OF MBIAMA ROUNDABOUT</td>
                                                    <td>0047017429 - Access Bank PLC</td>
                                                    <td><span>Jan 9th</span><span class="smaller lighter">12:45pm</span></td>
                                                    <td class="text-center">
                                                        <span class="badge badge-primary-inverted" href="">Final Approval</span>
                                                    </td>
                                                    <td>₦40,000,000.00</td>
                                                    <td>₦200,000.00</td>
                                                    <td></td>
                                                    <td>₦180,000.00</td>
                                                    <td>₦0.00</td>
                                                    <td>₦0.00</td>
                                                </tr>
                                                <tr class="">
                                                    <td>UBIQUITE SOLUTIONS LTD</td>
                                                    <td>CONSTRUCTION OF MBIAMA ROUNDABOUT</td>
                                                    <td>0047017429 - Access Bank PLC</td>
                                                    <td><span>Jan 9th</span><span class="smaller lighter">12:45pm</span></td>
                                                    <td class="text-center">
                                                        <span class="badge badge-primary-inverted" href="">Final Approval</span>
                                                    </td>
                                                    <td>₦40,000,000.00</td>
                                                    <td>₦200,000.00</td>
                                                    <td></td>
                                                    <td>₦180,000.00</td>
                                                    <td>₦0.00</td>
                                                    <td>₦0.00</td>
                                                </tr>
                                                <tr class="">
                                                    <td>UBIQUITE SOLUTIONS LTD</td>
                                                    <td>CONSTRUCTION OF MBIAMA ROUNDABOUT</td>
                                                    <td>0047017429 - Access Bank PLC</td>
                                                    <td><span>Jan 9th</span><span class="smaller lighter">12:45pm</span></td>
                                                    <td class="text-center">
                                                        <span class="badge badge-primary-inverted" href="">Final Approval</span>
                                                    </td>
                                                    <td>₦40,000,000.00</td>
                                                    <td>₦200,000.00</td>
                                                    <td></td>
                                                    <td>₦180,000.00</td>
                                                    <td>₦0.00</td>
                                                    <td>₦0.00</td>
                                                </tr>
                                                <tr class="">
                                                    <td>UBIQUITE SOLUTIONS LTD</td>
                                                    <td>CONSTRUCTION OF MBIAMA ROUNDABOUT</td>
                                                    <td>0047017429 - Access Bank PLC</td>
                                                    <td><span>Jan 9th</span><span class="smaller lighter">12:45pm</span></td>
                                                    <td class="text-center">
                                                        <span class="badge badge-primary-inverted" href="">Final Approval</span>
                                                    </td>
                                                    <td>₦40,000,000.00</td>
                                                    <td>₦200,000.00</td>
                                                    <td></td>
                                                    <td>₦180,000.00</td>
                                                    <td>₦0.00</td>
                                                    <td>₦0.00</td>
                                                </tr>
                                                <tr class="">
                                                    <td>UBIQUITE SOLUTIONS LTD</td>
                                                    <td>CONSTRUCTION OF MBIAMA ROUNDABOUT</td>
                                                    <td>0047017429 - Access Bank PLC</td>
                                                    <td><span>Jan 9th</span><span class="smaller lighter">12:45pm</span></td>
                                                    <td class="text-center">
                                                        <span class="badge badge-primary-inverted" href="">Final Approval</span>
                                                    </td>
                                                    <td>₦40,000,000.00</td>
                                                    <td>₦200,000.00</td>
                                                    <td></td>
                                                    <td>₦180,000.00</td>
                                                    <td>₦0.00</td>
                                                    <td>₦0.00</td>
                                                </tr>
                                                <tr class="">
                                                    <td>UBIQUITE SOLUTIONS LTD</td>
                                                    <td>CONSTRUCTION OF MBIAMA ROUNDABOUT</td>
                                                    <td>0047017429 - Access Bank PLC</td>
                                                    <td><span>Jan 9th</span><span class="smaller lighter">12:45pm</span></td>
                                                    <td class="text-center">
                                                        <span class="badge badge-primary-inverted" href="">Final Approval</span>
                                                    </td>
                                                    <td>₦40,000,000.00</td>
                                                    <td>₦200,000.00</td>
                                                    <td></td>
                                                    <td>₦180,000.00</td>
                                                    <td>₦0.00</td>
                                                    <td>₦0.00</td>
                                                </tr>
                                                <tr class="">
                                                    <td>UBIQUITE SOLUTIONS LTD</td>
                                                    <td>CONSTRUCTION OF MBIAMA ROUNDABOUT</td>
                                                    <td>0047017429 - Access Bank PLC</td>
                                                    <td><span>Jan 9th</span><span class="smaller lighter">12:45pm</span></td>
                                                    <td class="text-center">
                                                        <span class="badge badge-primary-inverted" href="">Final Approval</span>
                                                    </td>
                                                    <td>₦40,000,000.00</td>
                                                    <td>₦200,000.00</td>
                                                    <td></td>
                                                    <td>₦180,000.00</td>
                                                    <td>₦0.00</td>
                                                    <td>₦0.00</td>
                                                </tr>
                                                <tr class="">
                                                    <td>UBIQUITE SOLUTIONS LTD</td>
                                                    <td>CONSTRUCTION OF MBIAMA ROUNDABOUT</td>
                                                    <td>0047017429 - Access Bank PLC</td>
                                                    <td><span>Jan 9th</span><span class="smaller lighter">12:45pm</span></td>
                                                    <td class="text-center">
                                                        <span class="badge badge-primary-inverted" href="">Final Approval</span>
                                                    </td>
                                                    <td>₦40,000,000.00</td>
                                                    <td>₦200,000.00</td>
                                                    <td>₦180,000.00</td>
                                                    <td></td>
                                                    <td>₦0.00</td>
                                                    <td>₦0.00</td>
                                                </tr>
                                                <tr class="">
                                                    <td>UBIQUITE SOLUTIONS LTD</td>
                                                    <td>CONSTRUCTION OF MBIAMA ROUNDABOUT</td>
                                                    <td>0047017429 - Access Bank PLC</td>
                                                    <td><span>Jan 9th</span><span class="smaller lighter">12:45pm</span></td>
                                                    <td class="text-center">
                                                        <span class="badge badge-primary-inverted" href="">Final Approval</span>
                                                    </td>
                                                    <td>₦40,000,000.00</td>
                                                    <td>₦200,000.00</td>
                                                    <td></td>
                                                    <td>₦180,000.00</td>
                                                    <td>₦0.00</td>
                                                    <td>₦0.00</td>
                                                </tr>
                                                <tr class="">
                                                    <td>UBIQUITE SOLUTIONS LTD</td>
                                                    <td>CONSTRUCTION OF MBIAMA ROUNDABOUT</td>
                                                    <td>0047017429 - Access Bank PLC</td>
                                                    <td><span>Jan 9th</span><span class="smaller lighter">12:45pm</span></td>
                                                    <td class="text-center">
                                                        <span class="badge badge-primary-inverted" href="">Final Approval</span>
                                                    </td>
                                                    <td>₦40,000,000.00</td>
                                                    <td>₦200,000.00</td>
                                                    <td></td>
                                                    <td>₦180,000.00</td>
                                                    <td>₦0.00</td>
                                                    <td>₦0.00</td>
                                                </tr>
                                                <tr class="">
                                                    <td>UBIQUITE SOLUTIONS LTD</td>
                                                    <td>CONSTRUCTION OF MBIAMA ROUNDABOUT</td>
                                                    <td>0047017429 - Access Bank PLC</td>
                                                    <td><span>Jan 9th</span><span class="smaller lighter">12:45pm</span></td>
                                                    <td class="text-center">
                                                        <span class="badge badge-primary-inverted" href="">Final Approval</span>
                                                    </td>
                                                    <td>₦40,000,000.00</td>
                                                    <td>₦200,000.00</td>
                                                    <td></td>
                                                    <td>₦180,000.00</td>
                                                    <td>₦0.00</td>
                                                    <td>₦0.00</td>
                                                </tr>
                                                <tr class="">
                                                    <td>UBIQUITE SOLUTIONS LTD</td>
                                                    <td>CONSTRUCTION OF MBIAMA ROUNDABOUT</td>
                                                    <td>0047017429 - Access Bank PLC</td>
                                                    <td><span>Jan 9th</span><span class="smaller lighter">12:45pm</span></td>
                                                    <td class="text-center">
                                                        <span class="badge badge-primary-inverted" href="">Final Approval</span>
                                                    </td>
                                                    <td>₦40,000,000.00</td>
                                                    <td>₦200,000.00</td>
                                                    <td></td>
                                                    <td>₦180,000.00</td>
                                                    <td>₦0.00</td>
                                                    <td>₦0.00</td>
                                                </tr>
                                                <tr class="">
                                                    <td>UBIQUITE SOLUTIONS LTD</td>
                                                    <td>CONSTRUCTION OF MBIAMA ROUNDABOUT</td>
                                                    <td>0047017429 - Access Bank PLC</td>
                                                    <td><span>Jan 9th</span><span class="smaller lighter">12:45pm</span></td>
                                                    <td class="text-center">
                                                        <span class="badge badge-primary-inverted" href="">Final Approval</span>
                                                    </td>
                                                    <td>₦40,000,000.00</td>
                                                    <td>₦200,000.00</td>
                                                    <td></td>
                                                    <td>₦180,000.00</td>
                                                    <td>₦0.00</td>
                                                    <td>₦0.00</td>
                                                </tr>
                                                <tr class="">
                                                    <td>UBIQUITE SOLUTIONS LTD</td>
                                                    <td>CONSTRUCTION OF MBIAMA ROUNDABOUT</td>
                                                    <td>0047017429 - Access Bank PLC</td>
                                                    <td><span>Jan 9th</span><span class="smaller lighter">12:45pm</span></td>
                                                    <td class="text-center">
                                                        <span class="badge badge-primary-inverted" href="">Final Approval</span>
                                                    </td>
                                                    <td>₦40,000,000.00</td>
                                                    <td>₦200,000.00</td>
                                                    <td></td>
                                                    <td>₦180,000.00</td>
                                                    <td>₦0.00</td>
                                                    <td>₦0.00</td>
                                                </tr>
                                                <tr class="">
                                                    <td>UBIQUITE SOLUTIONS LTD</td>
                                                    <td>CONSTRUCTION OF MBIAMA ROUNDABOUT</td>
                                                    <td>0047017429 - Access Bank PLC</td>
                                                    <td><span>Jan 9th</span><span class="smaller lighter">12:45pm</span></td>
                                                    <td class="text-center">
                                                        <span class="badge badge-primary-inverted" href="">Final Approval</span>
                                                    </td>
                                                    <td>₦40,000,000.00</td>
                                                    <td>₦200,000.00</td>
                                                    <td></td>
                                                    <td>₦180,000.00</td>
                                                    <td>₦0.00</td>
                                                    <td>₦0.00</td>
                                                </tr>
                                                <tr class="">
                                                    <td>UBIQUITE SOLUTIONS LTD</td>
                                                    <td>CONSTRUCTION OF MBIAMA ROUNDABOUT</td>
                                                    <td>0047017429 - Access Bank PLC</td>
                                                    <td><span>Jan 9th</span><span class="smaller lighter">12:45pm</span></td>
                                                    <td class="text-center">
                                                        <span class="badge badge-primary-inverted" href="">Final Approval</span>
                                                    </td>
                                                    <td>₦40,000,000.00</td>
                                                    <td>₦200,000.00</td>
                                                    <td></td>
                                                    <td>₦180,000.00</td>
                                                    <td>₦0.00</td>
                                                    <td>₦0.00</td>
                                                </tr>
                                                <tr class="">
                                                    <td>UBIQUITE SOLUTIONS LTD</td>
                                                    <td>CONSTRUCTION OF MBIAMA ROUNDABOUT</td>
                                                    <td>0047017429 - Access Bank PLC</td>
                                                    <td><span>Jan 9th</span><span class="smaller lighter">12:45pm</span></td>
                                                    <td class="text-center">
                                                        <span class="badge badge-primary-inverted" href="">Final Approval</span>
                                                    </td>
                                                    <td>₦40,000,000.00</td>
                                                    <td>₦200,000.00</td>
                                                    <td></td>
                                                    <td>₦180,000.00</td>
                                                    <td>₦0.00</td>
                                                    <td>₦0.00</td>
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
