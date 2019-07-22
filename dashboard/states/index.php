<?php
require_once 'core/init.php';

$user = new User();
$payment = new Payment();
if (!$user->isLoggedIn()) {
    Redirect::to('../login.php');
}
    $title = 'States';
    require_once '../includes/header.php';
    require_once '../includes/bgcolor.php';
    require_once '../includes/chat.php';
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
                                <div class="os-icon os-icon-users"></div>
                            </div>
                            <div class="element-info-text">
                                <h5 class="element-inner-header">
                                    State Management
                                </h5>
                                <div class="element-inner-desc">
                                    View, Create, Edit and delete States
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="element-box">
                    <div class="w-100" style="overflow: hidden;">
                        <table id="datatable" width="100%" class="table nowrap table-striped table-lightfont">
                            <thead>
                                <tr class="">
									<th>#</th>
									<th>STATE NAME</th>
									<th>DESCRIPTION</th>
									<th>CODE</th>
									<th>DATE CREATED</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr class="">
									<th>#</th>
                                    <th>STATE NAME</th>
                                    <th>DESCRIPTION</th>
                                    <th>CODE</th>
                                    <th>DATE CREATED</th>
                                    <th>ACTION</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php if ($state->readAll() !== false) {
                                        foreach ($state->readAll() as $s) {?>
                                            <tr class="">
                                                <td><?php echo $s->state_id; ?></td>
                                                <td><?php echo $s->state_name; ?></td>
                                                <td><?php echo $s->state_description; ?></td>
                                                <td><?php echo $s->state_TIN; ?></td>
                                                <td><span><?php echo date('M jS', $v->date_created); ?></span><span class="smaller lighter"><?php echo date('h:ia', $v->date_created); ?></span></td>
                                                <td class="action">
                                                    <a class="btn btn-primary btn-sm" href="#" data-target="#edit" data-toggle="modal">Edit</a>
                                                </td>
                                            </tr>
                                <?php 
                                        }
                                    } 
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-1"></div> 
    </div>
    <div aria-hidden="true" class="onboarding-modal modal fade animated" id="edit" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg modal-centered" role="document">
            <div class="modal-content text-center">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="btn btn-link text-dark">Close</span><span class="os-icon os-icon-close btn-link text-dark"></span></button>
                <div class="onboarding-content p-5 mt-5">
                    <h4 class="onboarding-title">
                        Edit Vendor Details
                    </h4>
                    <div class="onboarding-text">
                        Change the information about Emeka Okeke.
                    </div>
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="lname">Vendor Name</label><input name="vname" value="Afrivelle" class="form-control" data-error="Please input the Vendor's Name" placeholder="eg: Afrivelle Technologies" required="required" type="text">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="fname">Full Name</label><input name="name" value="Signs Madueke" class="form-control" data-error="Please input the Full Name" placeholder="eg: John Doe" required="required" type="text">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                            </div>
                            <!-- <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="lname">Last Name</label><input name="lname" value="Madueke" class="form-control" data-error="Please input the Last Name" placeholder="eg: Doe" required="required" type="text">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                            </div> -->
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Email address</label><input name="email" value="signs@madueke.com" class="form-control" data-error="Your email address is invalid" placeholder="Enter email" autocomplete="email" required="required" type="email">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="phone">Phone Number</label><input name="phone" value="0801 234 5678" class="form-control" data-error="Your Phone Number is invalid" placeholder="eg: 0801 234 5678" type="tel" maxlength="11" minlength="11" autocomplete="tel" required="required">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="state">Address</label><input name="address" value="1, Cresent Street" class="form-control" data-error="Please input the Address" placeholder="eg: 1, Cresent Street" required="required" autocomplete="state" type="address">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="state">State / MDA</label><input name="state" value="Enugu State" class="form-control" data-error="Please input the State / MDA" placeholder="eg: Enugu State" required="required" autocomplete="state" type="text">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="phone">TIN Number</label><input name="tin" value="0015" class="form-control" placeholder="eg: 1234" type="text" required="required">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="status">User Status</label>
                                    <select class="form-control" name="status">
                                        <option value="Zenith Bank">Active</option>
                                        <option value="Zenith Bank">Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Bank Name</label>
                                    <select class="form-control" name="bank">
                                        <option value="Access Bank">Access Bank</option>
                                        <option value="Access Bank (Diamond)">Access Bank (Diamond)</option>
                                        <option value="Citibank">Citibank</option>
                                        <option value="Coronation Merchant Bank">Coronation Merchant Bank</option>
                                        <option value="Ecobank Nigeria">Ecobank Nigeria</option>
                                        <option value="Enterprise Bank Limited">Enterprise Bank Limited</option>
                                        <option value="FBN Holdings Plc">FBN Holdings Plc</option>
                                        <option value="FBN Merchant Bank">FBN Merchant Bank</option>
                                        <option value="FCMB Group Plc">FCMB Group Plc</option>
                                        <option value="Fidelity Bank Nigeria">Fidelity Bank Nigeria</option>
                                        <option value="First Bank of Nigeria">First Bank of Nigeria</option>
                                        <option value="First City Monument Bank">First City Monument Bank</option>
                                        <option value="FSDH Merchant Bank">FSDH Merchant Bank</option>
                                        <option value="Guaranty Trust Bank">Guaranty Trust Bank</option>
                                        <option value="Heritage Bank Plc">Heritage Bank Plc</option>
                                        <option value="Jaiz Bank Limited">Jaiz Bank Limited</option>
                                        <option value="Keystone Bank Limited">Keystone Bank Limited</option>
                                        <option value="Providusbank Plc">Providusbank Plc</option>
                                        <option value="Rand Merchant Bank">Rand Merchant Bank</option>
                                        <option value="Skye Bank">Skye Bank</option>
                                        <option value="Stanbic IBTC Bank Nigeria Limited">Stanbic IBTC Bank Nigeria Limited</option>
                                        <option value="Stanbic IBTC Holdings Plc">Stanbic IBTC Holdings Plc</option>
                                        <option value="Standard Chartered Bank">Standard Chartered Bank</option>
                                        <option value="Sterling Bank">Sterling Bank</option>
                                        <option value="Suntrust Bank Nigeria Limited">Suntrust Bank Nigeria Limited</option>
                                        <option value="Union Bank of Nigeria">Union Bank of Nigeria</option>
                                        <option value="United Bank for Africa">United Bank for Africa</option>
                                        <option value="Unity Bank Plc">Unity Bank Plc</option>
                                        <option value="Wema Bank">Wema Bank</option>
                                        <option value="Zenith Bank">Zenith Bank</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Bank Account Number</label><input name="acc_no" value="0097895364" class="form-control" data-error="Please input the Bank Account Number" placeholder="eg: 0097895364" required="required" type="text">
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Company Type</label>
                                    <select class="form-control" name="ctype">
                                        <option value="1">Enterprise/Venture</option>
                                        <option value="2" selected="selected">Limited Liability Company</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Company Category</label>
                                    <select class="form-control" name="ccat">
                                        <option>Please Select</option>
                                        <option>Construction (VAT: 5%, WHT: 5%)</option>
                                        <option>Consultants (VAT: 5%, WHT: 10%)</option>
                                        <option>Educational Services (VAT: 5%, WHT: 10%)</option>
                                        <option>Financial Services (VAT: 5%, WHT: 10%)</option>
                                        <option>FIRS (VAT: 100%, WHT: 100%)</option>
                                        <option selected="selected">Others (VAT: 5%, WHT: 10%)</option>
                                        <option>Technology (VAT: 5%, WHT: 10%)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-4">
                            <div class="col-sm-12 col-md-4 mb-2">
                                <button class="btn btn-white btn-block" data-dismiss="modal" type="button">Cancel</button>
                            </div>
                            <div class="col-sm-12 col-md-8 mb-2">
                                <input name="submit" class="btn btn-primary btn-block" value="Update Vendor Details" type="submit">
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
