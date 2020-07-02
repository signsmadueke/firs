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
                <div class="element-box">
                    <form>
                        <div class="steps-w">
                            <div class="step-trikkers">
                                <a class="step-trikker active" href="">Payments</a>
                                <a class="step-trikker" href="swept.php">Swept Payments</a>
                                <a class="step-trikker" href="pending.php">Pending Payments</a>
                            </div>
                            <div class="step-contents">
                                <div class="step-content active p-0">
                                    <div class="w-100" style="overflow: hidden;">
                                        <table id="datatable" width="100%" class="table nowrap table table-hover table-lightfont">
                                            <thead>
                                                <tr class="">
                                                    <th class="invisible" colspan="2"></th>
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
                                                <tr class="">
                                                    <td class="p-0">
                                                        <input type="checkbox" class="checkbox" name="acs" data-placement="top" data-toggle="tooltip" data-original-title="Select Payment">
                                                    </td>
                                                    <td class="p-0">
                                                        <a href="view.php" class="text-primary p-3" data-placement="top" data-toggle="tooltip" data-original-title="View Payment"><i class="os-icon os-icon-eye"></i></a>
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
                                                    <td class="p-0">
                                                        <input type="checkbox" class="checkbox" name="acs" data-placement="top" data-toggle="tooltip" data-original-title="Select Payment">
                                                    </td>
                                                    <td class="p-0">
                                                        <a href="view.php" class="text-primary p-3" data-placement="top" data-toggle="tooltip" data-original-title="View Payment"><i class="os-icon os-icon-eye"></i></a>
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
                                                    <td class="p-0">
                                                        <input type="checkbox" class="checkbox" name="acs" data-placement="top" data-toggle="tooltip" data-original-title="Select Payment">
                                                    </td>
                                                    <td class="p-0">
                                                        <a href="view.php" class="text-primary p-3" data-placement="top" data-toggle="tooltip" data-original-title="View Payment"><i class="os-icon os-icon-eye"></i></a>
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
                                                    <td class="p-0">
                                                        <input type="checkbox" class="checkbox" name="acs" data-placement="top" data-toggle="tooltip" data-original-title="Select Payment">
                                                    </td>
                                                    <td class="p-0">
                                                        <a href="view.php" class="text-primary p-3" data-placement="top" data-toggle="tooltip" data-original-title="View Payment"><i class="os-icon os-icon-eye"></i></a>
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
                                                    <td class="p-0">
                                                        <input type="checkbox" class="checkbox" name="acs" data-placement="top" data-toggle="tooltip" data-original-title="Select Payment">
                                                    </td>
                                                    <td class="p-0">
                                                        <a href="view.php" class="text-primary p-3" data-placement="top" data-toggle="tooltip" data-original-title="View Payment"><i class="os-icon os-icon-eye"></i></a>
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
                                                    <td class="p-0">
                                                        <input type="checkbox" class="checkbox" name="acs" data-placement="top" data-toggle="tooltip" data-original-title="Select Payment">
                                                    </td>
                                                    <td class="p-0">
                                                        <a href="view.php" class="text-primary p-3" data-placement="top" data-toggle="tooltip" data-original-title="View Payment"><i class="os-icon os-icon-eye"></i></a>
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
                                                    <td class="p-0">
                                                        <input type="checkbox" class="checkbox" name="acs" data-placement="top" data-toggle="tooltip" data-original-title="Select Payment">
                                                    </td>
                                                    <td class="p-0">
                                                        <a href="view.php" class="text-primary p-3" data-placement="top" data-toggle="tooltip" data-original-title="View Payment"><i class="os-icon os-icon-eye"></i></a>
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
                                                    <td class="p-0">
                                                        <input type="checkbox" class="checkbox" name="acs" data-placement="top" data-toggle="tooltip" data-original-title="Select Payment">
                                                    </td>
                                                    <td class="p-0">
                                                        <a href="view.php" class="text-primary p-3" data-placement="top" data-toggle="tooltip" data-original-title="View Payment"><i class="os-icon os-icon-eye"></i></a>
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
                                                    <td class="p-0">
                                                        <input type="checkbox" class="checkbox" name="acs" data-placement="top" data-toggle="tooltip" data-original-title="Select Payment">
                                                    </td>
                                                    <td class="p-0">
                                                        <a href="view.php" class="text-primary p-3" data-placement="top" data-toggle="tooltip" data-original-title="View Payment"><i class="os-icon os-icon-eye"></i></a>
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
                                                    <td class="p-0">
                                                        <input type="checkbox" class="checkbox" name="acs" data-placement="top" data-toggle="tooltip" data-original-title="Select Payment">
                                                    </td>
                                                    <td class="p-0">
                                                        <a href="view.php" class="text-primary p-3" data-placement="top" data-toggle="tooltip" data-original-title="View Payment"><i class="os-icon os-icon-eye"></i></a>
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
    </div>
<?php
    require_once '../includes/footer.php';
?>
