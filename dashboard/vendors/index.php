<?php
    $title = 'Vendors';
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
                                <div class="os-icon os-icon-users"></div>
                            </div>
                            <div class="element-info-text">
                                <h5 class="element-inner-header">
                                    Vendors
                                </h5>
                                <div class="element-inner-desc">
                                    View, Create, Edit and delete vendors
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="element-box">
                    <form>
                        <div class="w-100" style="overflow: hidden;">
                            <table id="datatable" width="100%" class="table nowrap table-striped table-lightfont">
                                <thead>
                                    <tr class="">
                                        <th></th>
                                        <th>Vendor</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>TIN</th>
                                        <th>State/MDA</th>
                                        <th>Date Created</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr class="">
                                        <th></th>
                                        <th>Vendor</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>TIN</th>
                                        <th>State/MDA</th>
                                        <th>Date Created</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr class="">
                                        <td class="p-0">
                                            <input type="checkbox" class="checkbox" name="acs" data-placement="top" data-toggle="tooltip" data-original-title="Select Payment">
                                        </td>
                                        <td>APTECH</td>
                                        <td>WILLIE AKPAN</td>
                                        <td>agftaxsolution@gmail.com</td>
                                        <td>08093618346</td>
                                        <td>00014</td>
                                        <td>EBONYI</td>
                                        <td><span>Jan 9th</span><span class="smaller lighter">12:45pm</span></td>
                                        <td class="action">
                                            <a class="btn btn-primary btn-sm" href="#" data-target="#pay" data-toggle="modal">Pay</a>
                                            <a class="btn btn-dark btn-sm" href="#" data-target="#edit" data-toggle="modal">Edit</a>
                                            <a class="btn btn-danger btn-sm" href="#" data-target="#delete" data-toggle="modal">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td class="p-0">
                                            <input type="checkbox" class="checkbox" name="acs" data-placement="top" data-toggle="tooltip" data-original-title="Select Payment">
                                        </td>
                                        <td>CJ</td>
                                        <td>Emeka Okeke</td>
                                        <td>okechukwu008@gmail.com</td>
                                        <td>08143558589</td>
                                        <td>1231</td>
                                        <td>EBONYI</td>
                                        <td><span>Jan 9th</span><span class="smaller lighter">12:45pm</span></td>
                                        <td class="action">
                                            <a class="btn btn-primary btn-sm" href="#" data-target="#pay" data-toggle="modal">Pay</a>
                                            <a class="btn btn-dark btn-sm" href="#" data-target="#edit" data-toggle="modal">Edit</a>
                                            <a class="btn btn-danger btn-sm" href="#" data-target="#delete" data-toggle="modal">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td class="p-0">
                                            <input type="checkbox" class="checkbox" name="acs" data-placement="top" data-toggle="tooltip" data-original-title="Select Payment">
                                        </td>
                                        <td>EBONYI CENTRAL LTD</td>
                                        <td>MARY HENRY</td>
                                        <td>agftaxsolution@gmail.com</td>
                                        <td>07030144572</td>
                                        <td>221452-0001</td>
                                        <td>EBONYI</td>
                                        <td><span>Jan 9th</span><span class="smaller lighter">12:45pm</span></td>
                                        <td class="action">
                                            <a class="btn btn-primary btn-sm" href="#" data-target="#pay" data-toggle="modal">Pay</a>
                                            <a class="btn btn-dark btn-sm" href="#" data-target="#edit" data-toggle="modal">Edit</a>
                                            <a class="btn btn-danger btn-sm" href="#" data-target="#delete" data-toggle="modal">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td class="p-0">
                                            <input type="checkbox" class="checkbox" name="acs" data-placement="top" data-toggle="tooltip" data-original-title="Select Payment">
                                        </td>
                                        <td>FEROTEX</td>
                                        <td>FEROTEX NG</td>
                                        <td>agftaxsolution@gmail.com</td>
                                        <td>08032568448</td>
                                        <td>03623651-0001</td>
                                        <td>EBONYI</td>
                                        <td><span>Jan 9th</span><span class="smaller lighter">12:45pm</span></td>
                                        <td class="action">
                                            <a class="btn btn-primary btn-sm" href="#" data-target="#pay" data-toggle="modal">Pay</a>
                                            <a class="btn btn-dark btn-sm" href="#" data-target="#edit" data-toggle="modal">Edit</a>
                                            <a class="btn btn-danger btn-sm" href="#" data-target="#delete" data-toggle="modal">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td class="p-0">
                                            <input type="checkbox" class="checkbox" name="acs" data-placement="top" data-toggle="tooltip" data-original-title="Select Payment">
                                        </td>
                                        <td>FIRS</td>
                                        <td>FIRS ENUGU</td>
                                        <td>agftaxsolution@gmail.com</td>
                                        <td>0202154587</td>
                                        <td>00000001</td>
                                        <td>EBONYI</td>
                                        <td><span>Jan 9th</span><span class="smaller lighter">12:45pm</span></td>
                                        <td class="action">
                                            <a class="btn btn-primary btn-sm" href="#" data-target="#pay" data-toggle="modal">Pay</a>
                                            <a class="btn btn-dark btn-sm" href="#" data-target="#edit" data-toggle="modal">Edit</a>
                                            <a class="btn btn-danger btn-sm" href="#" data-target="#delete" data-toggle="modal">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td class="p-0">
                                            <input type="checkbox" class="checkbox" name="acs" data-placement="top" data-toggle="tooltip" data-original-title="Select Payment">
                                        </td>
                                        <td>GUBBA VENTURES</td>
                                        <td>MMADU CHRISTOPHER</td>
                                        <td>agftaxsolution@gmail.com</td>
                                        <td>08093618346</td>
                                        <td>0011</td>
                                        <td>EBONYI</td>
                                        <td><span>Jan 9th</span><span class="smaller lighter">12:45pm</span></td>
                                        <td class="action">
                                            <a class="btn btn-primary btn-sm" href="#" data-target="#pay" data-toggle="modal">Pay</a>
                                            <a class="btn btn-dark btn-sm" href="#" data-target="#edit" data-toggle="modal">Edit</a>
                                            <a class="btn btn-danger btn-sm" href="#" data-target="#delete" data-toggle="modal">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td class="p-0">
                                            <input type="checkbox" class="checkbox" name="acs" data-placement="top" data-toggle="tooltip" data-original-title="Select Payment">
                                        </td>
                                        <td>Joy Enterprises</td>
                                        <td>Joy Okeke</td>
                                        <td>agftaxsolution@gmail.com</td>
                                        <td>07086405522</td>
                                        <td>00001</td>
                                        <td>EBONYI</td>
                                        <td><span>Jan 9th</span><span class="smaller lighter">12:45pm</span></td>
                                        <td class="action">
                                            <a class="btn btn-primary btn-sm" href="#" data-target="#pay" data-toggle="modal">Pay</a>
                                            <a class="btn btn-dark btn-sm" href="#" data-target="#edit" data-toggle="modal">Edit</a>
                                            <a class="btn btn-danger btn-sm" href="#" data-target="#delete" data-toggle="modal">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td class="p-0">
                                            <input type="checkbox" class="checkbox" name="acs" data-placement="top" data-toggle="tooltip" data-original-title="Select Payment">
                                        </td>
                                        <td>JULIOUD BERGER</td>
                                        <td>Elijah Basi</td>
                                        <td>chijiokemadu@gmail.com</td>
                                        <td>02012356478</td>
                                        <td>1232123451-0001</td>
                                        <td>EBONYI</td>
                                        <td><span>Jan 9th</span><span class="smaller lighter">12:45pm</span></td>
                                        <td class="action">
                                            <a class="btn btn-primary btn-sm" href="#" data-target="#pay" data-toggle="modal">Pay</a>
                                            <a class="btn btn-dark btn-sm" href="#" data-target="#edit" data-toggle="modal">Edit</a>
                                            <a class="btn btn-danger btn-sm" href="#" data-target="#delete" data-toggle="modal">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td class="p-0">
                                            <input type="checkbox" class="checkbox" name="acs" data-placement="top" data-toggle="tooltip" data-original-title="Select Payment">
                                        </td>
                                        <td>SETRACO NIGERIA LTD</td>
                                        <td>SETRACO NG</td>
                                        <td>agftaxsolution@gmail.com</td>
                                        <td>08038784020</td>
                                        <td>01059151-0001</td>
                                        <td>EBONYI</td>
                                        <td><span>Jan 9th</span><span class="smaller lighter">12:45pm</span></td>
                                        <td class="action">
                                            <a class="btn btn-primary btn-sm" href="#" data-target="#pay" data-toggle="modal">Pay</a>
                                            <a class="btn btn-dark btn-sm" href="#" data-target="#edit" data-toggle="modal">Edit</a>
                                            <a class="btn btn-danger btn-sm" href="#" data-target="#delete" data-toggle="modal">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td class="p-0">
                                            <input type="checkbox" class="checkbox" name="acs" data-placement="top" data-toggle="tooltip" data-original-title="Select Payment">
                                        </td>
                                        <td>UBIQUITE SOLUTIONS LTD</td>
                                        <td>DANIEL ONIFADE</td>
                                        <td>OYEYEONIFADE@GMAIL.COM</td>
                                        <td>0801234568</td>
                                        <td>01259320-0001</td>
                                        <td>EBONYI</td>
                                        <td><span>Jan 9th</span><span class="smaller lighter">12:45pm</span></td>
                                        <td class="action">
                                            <a class="btn btn-primary btn-sm" href="#" data-target="#pay" data-toggle="modal">Pay</a>
                                            <a class="btn btn-dark btn-sm" href="#" data-target="#edit" data-toggle="modal">Edit</a>
                                            <a class="btn btn-danger btn-sm" href="#" data-target="#delete" data-toggle="modal">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td class="p-0">
                                            <input type="checkbox" class="checkbox" name="acs" data-placement="top" data-toggle="tooltip" data-original-title="Select Payment">
                                        </td>
                                        <td>WESTGATE</td>
                                        <td>CHARLES MADEKWE</td>
                                        <td>agftaxsolution@gmail.com</td>
                                        <td>0801256212</td>
                                        <td>00128</td>
                                        <td>EBONYI</td>
                                        <td><span>Jan 9th</span><span class="smaller lighter">12:45pm</span></td>
                                        <td class="action">
                                            <a class="btn btn-primary btn-sm" href="#" data-target="#pay" data-toggle="modal">Pay</a>
                                            <a class="btn btn-dark btn-sm" href="#" data-target="#edit" data-toggle="modal">Edit</a>
                                            <a class="btn btn-danger btn-sm" href="#" data-target="#delete" data-toggle="modal">Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="row pt-0">
                                <div class="col-sm-12 col-md-12 col-lg-7 mb-2"></div>
                                <div class="col-sm-12 col-md-4 col-lg-2 mb-2">
                                    <a href="#" onclick="selectAll()" id="checker" class="btn-block mt-3 p-3 btn btn-white"><i class="icon-plus mr-3"></i>Select All</a>
                                </div>
                                <div class="col-sm-12 col-md-8 col-lg-3 mb-2">
                                    <a class="p-3 mt-3 btn btn-danger btn-block" href="#" data-target="#deletemultiple" data-toggle="modal"><i class="icon-feather-trash mr-2"></i>Delete Selected</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-1"></div> 
    </div>
    <div aria-hidden="true" class="onboarding-modal modal fade animated" id="pay" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg modal-centered" role="document">
            <div class="modal-content text-center">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="btn btn-link text-dark">Close</span><span class="os-icon os-icon-close btn-link text-dark"></span></button>
                <div class="onboarding-content p-5 mt-5">
                    <h4 class="onboarding-title">
                        Pay Vendor
                    </h4>
                    <div class="onboarding-text">
                        Pay Emeka Okeke
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
                                    <label for="fname">Amount</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><div class="input-group-text">₦</div></div>
                                        <input name="amount" value="5000" class="form-control" data-error="Please input the Amount to pay" placeholder="eg: 10000" required="required" type="text">
                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="vat_inclusive">Charge Stamp Duty?</label>
                                    <select class="form-control" name="vat_inclusive">
                                        <option selected>Yes</option>
                                        <option>No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="vat_inclusive">Payment Type / Amount is VAT Inclusive?</label>
                                    <select class="form-control" name="vat_inclusive">
                                        <option selected>Regular Payment</option>
                                        <option>VAT Inclusive Payment</option>
                                        <option>FIRS VAT Payment</option>
                                        <option>FIRS WHT Payment</option>
                                        <option>FIRS Stamp Duty Payment</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="bankaccount">Bank Account</label>
                                    <select class="form-control" name="bankaccount">
                                        <option selected>EBONYI - Access Bank PLC (0047017429)</option>
                                        <option>EBONYI - United Bank for Africa (2059122199)</option>
                                        <option>EBONYI - Zenith Bank PLC (0128222156)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="attach">Attach a Document</label>
                                    <input class="form-control" name="attach" placeholder="Upload an Attachment" type="file">
                                </div>
                            </div>
                        </div>
                        <div class="row form-group pt-3">
                            <div class="col-12"><label for="">Apply State Charges/Levies</label></div>
                            <div class="col-12 custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="groupOfDefaultRadios">
                                <label class="custom-control-label" for="defaultGroupExample1">Stamp Duty</label>
                            </div>

                            <div class="col-12 custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="defaultGroupExample2" name="groupOfDefaultRadios" checked>
                                <label class="custom-control-label" for="defaultGroupExample2">Development Levy</label>
                            </div>

                            <div class="col-12 custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="defaultGroupExample3" name="groupOfDefaultRadios">
                                <label class="custom-control-label" for="defaultGroupExample3">Education Levy</label>
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="paymentpurpose">Payment Purpose</label>
                                    <textarea name="paymentpurpose" class="form-control" rows="2"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" class="form-control" rows="2"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-4">
                            <div class="col-sm-12 col-md-4 mb-2">
                                <button class="btn btn-white btn-block" data-dismiss="modal" type="button">Cancel</button>
                            </div>
                            <div class="col-sm-12 col-md-8 mb-2">
                                <input name="submit" class="btn btn-primary btn-block" value="Pay Vendor" type="submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
                        Change the information about Emeka Okeke
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
    <div aria-hidden="true" class="onboarding-modal modal fade animated" id="delete" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-centered" role="document">
            <div class="modal-content text-center">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="btn btn-link text-dark">Close</span><span class="os-icon os-icon-close btn-link text-dark"></span></button>
                <div class="onboarding-content p-5 mt-5">
                    <h4 class="onboarding-title text-danger">
                        Are you sure you want to permanently delete this vendor's account?
                    </h4>
                    <div class="onboarding-text">
                        Once you delete this account all the user's payments will be cleared too. This action cannot be reversed.
                        <br>
                        <strong>Are you sure you want to delete this account?</strong>
                    </div>
                    <div class="row pt-4">
                        <div class="col-sm-12 col-md-4 mb-2">
                            <button class="btn btn-secondary btn-block" data-dismiss="modal" type="button">Cancel</button>
                        </div>
                        <div class="col-sm-12 col-md-8 mb-2">
                            <button class="btn btn-danger btn-block" data-dismiss="modal">Delete Vendor Account</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div aria-hidden="true" class="onboarding-modal modal fade animated" id="deletemultiple" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-centered" role="document">
            <div class="modal-content text-center">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="btn btn-link text-dark">Close</span><span class="os-icon os-icon-close btn-link text-dark"></span></button>
                <div class="onboarding-content p-5 mt-5">
                    <h4 class="onboarding-title text-danger">
                        Are you sure you want to permanently delete the selected vendor accounts?
                    </h4>
                    <div class="onboarding-text">
                        Once you delete these accounts the action cannot be reversed.
                        <br>
                        <strong>Are you sure you want to delete these accounts?</strong>
                    </div>
                    <div class="row pt-4">
                        <div class="col-sm-12 col-md-4 mb-2">
                            <button class="btn btn-secondary btn-block" data-dismiss="modal" type="button">Cancel</button>
                        </div>
                        <div class="col-sm-12 col-md-8 mb-2">
                            <button class="btn btn-danger btn-block" data-dismiss="modal">Delete Accounts</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    require_once '../includes/footer.php';
?>
