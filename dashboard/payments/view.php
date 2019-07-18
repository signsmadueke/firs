<?php
    $title = 'Payments';
    require_once '../includes/header.php';
    // require_once '../includes/bgcolor.php';
    // require_once '../includes/chat.php';
?>
<div class="content-box">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-11">
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
                    <form>
                        <div class="steps-w">
                            <div class="step-trikkers">
                                <a class="step-trikker active" href="">Payments</a>
                                <a class="step-trikker" href="pending.php">Pending</a>
                                <a class="step-trikker" href="approved.php">Approved</a>
                            </div>
                            <div class="step-contents">
                                <div class="step-content active p-0">
                                    <form action="">
                                        <div class="table-responsive">
                                            <table id="datatable" class="table table-padded nowrap w-100" style="border-collapse: separate !important;">
                                                <thead>
                                                    <tr class="">
                                                        <th class="invisible"></th>
                                                        <th class="p-0 w-100">
                                                            
                                                        </th>
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
                                                    <tr class="">
                                                        <td></td>
                                                        <td class="p-0 w-100">
                                                            <input type="checkbox" name="acs">
                                                        </td>
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
                                                        <td></td>
                                                        <td class="p-0 w-100">
                                                            <input type="checkbox" name="acs">
                                                        </td>
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
                                                        <td></td>
                                                        <td class="p-0 w-100">
                                                            <input type="checkbox" name="acs">
                                                        </td>
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
                                                        <td></td>
                                                        <td class="p-0 w-100">
                                                            <input type="checkbox" name="acs">
                                                        </td>
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
                                                        <td></td>
                                                        <td class="p-0 w-100">
                                                            <input type="checkbox" name="acs">
                                                        </td>
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
                                                        <td></td>
                                                        <td class="p-0 w-100">
                                                            <input type="checkbox" name="acs">
                                                        </td>
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
                                                        <td></td>
                                                        <td class="p-0 w-100">
                                                            <input type="checkbox" name="acs">
                                                        </td>
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
                                                        <td></td>
                                                        <td class="p-0 w-100">
                                                            <input type="checkbox" name="acs">
                                                        </td>
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
                                                        <td></td>
                                                        <td class="p-0 w-100">
                                                            <input type="checkbox" name="acs">
                                                        </td>
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
                                                        <td></td>
                                                        <td class="p-0 w-100">
                                                            <input type="checkbox" name="acs">
                                                        </td>
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
                                            <div class="row pt-4">
                                                <div class="col-sm-12 col-md-4 col-lg-2 mb-2">
                                                    <a href="#" onclick="selectAll()" id="checker" class="btn-block mt-3 p-3 btn btn-outline-primary">Select All</a>
                                                </div>
                                                <div class="col-sm-12 col-md-8 col-lg-10 mb-2">
                                                    <button class="p-3 mt-3 btn btn-primary btn-block" type="submit">Approve Selected</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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
