<?php
    $title = 'Ministries';
    require_once '../includes/header.php';
?>
<div class="content-box">
    <div class="row">
        <div class="col-sm-12">
            <div class="element-wrapper">
                <div class="element-box row p-4 m-0">
                    <div class="col-sm">
                        <div class="element-info-with-icon m-0">
                            <div class="element-info-icon">
                                <div class="fa fa-university"></div>
                            </div>
                            <div class="element-info-text">
                                <h5 class="element-inner-header">
                                    Ministry Management
                                </h5>
                                <div class="element-inner-desc">
                                    View, Create, Edit and delete Ministries
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-auto mt-4 mt-lg-0">
                        <a class="btn btn-block btn-primary el-tablo m-0 p-3 pl-4 pr-4 text-white" href="#" data-target="#add" data-toggle="modal">
                            <i class="icon-feather-plus-circle mr-2"></i>
                            Add Ministry
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12">
            <div class="element-wrapper">
                <div class="element-box px-0">
                    <div class="table-responsive">
                        <table id="datatable" width="100%" class="table nowrap table-striped table-lightfont">
                            <thead>
                                <tr class="">
                                    <th>#</th>
                                    <th>State</th>
                                    <th>TIN</th>
                                    <th>Account Number</th>
                                    <th>Bank</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr class="">
                                    <th>#</th>
                                    <th>State</th>
                                    <th>TIN</th>
                                    <th>Account Number</th>
                                    <th>Bank</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr class="">
                                    <td>1</td>
                                    <td>Enugu</td>
                                    <td>00014</td>
                                    <td>0047017429</td>
                                    <td>Access Bank PLC</td>
                                    <td>CHIJIOKEMADU@GMAIL.COM</td>
                                    <td class="action">
                                        <a class="btn btn-primary btn-sm" href="#" data-target="#edit" data-toggle="modal">Edit</a>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td>2</td>
                                    <td>Enugu</td>
                                    <td>1231</td>
                                    <td>2059122199</td>
                                    <td>United Bank for Africa</td>
                                    <td>okechukwu008@gmail.com</td>
                                    <td class="action">
                                        <a class="btn btn-primary btn-sm" href="#" data-target="#edit" data-toggle="modal">Edit</a>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td>3</td>
                                    <td>Enugu</td>
                                    <td>0011</td>
                                    <td>0128222156</td>
                                    <td>Zenith Bank PLC</td>
                                    <td>adviceagftaxsolution@gmail.com</td>
                                    <td class="action">
                                        <a class="btn btn-primary btn-sm" href="#" data-target="#edit" data-toggle="modal">Edit</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div aria-hidden="true" class="onboarding-modal modal fade animated" id="add" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg modal-centered" role="document">
            <div class="modal-content text-center">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="btn btn-link text-dark">Close</span><span class="os-icon os-icon-close btn-link text-dark"></span></button>
                <div class="onboarding-content p-5 mt-5">
                    <h4 class="onboarding-title">
                        Add Ministry
                    </h4>
                    <form method="post" action="register.php">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="phone">State</label>
                                    <select class="form-control" name="user_role">
                                        <option selected>Enugu</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Bank Account Number</label><input name="acc_no" class="form-control" data-error="Please input the Bank Account Number" placeholder="eg: 0097895364" required="required" type="text">
                                </div>
                            </div>
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
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Email address</label><input name="email" class="form-control" placeholder="(Payment advise would be sent to specified email)" autocomplete="email" required="required" type="email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Cc Email address</label><input name="email" class="form-control" placeholder="(Payment advise would be copied to specified addresses. Seperate each address with comma)" autocomplete="email" required="required" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="state">Payment Advise Addressed to</label>
                                    <textarea name="address" class="form-control" data-error="Please input the Address" placeholder="The Manager, Access Bank Plc., Abuja, Wuse II." rows="3" required="required" type="text"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="phone">Payment Advise Signature</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="picture" name="picture" required="required">
                                        <label class="custom-file-label" for="attach">(700px x 80px .jpg and .png only)</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-4">
                            <div class="col-sm-12 col-md-4 mb-2">
                                <button class="btn btn-white btn-block" data-dismiss="modal" type="button">Cancel</button>
                            </div>
                            <div class="col-sm-12 col-md-8 mb-2">
                                <input name="submit" class="btn btn-primary btn-block" value="Add Ministry" type="submit">
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
                        Edit Ministry
                    </h4>
                    <form method="post" action="register.php">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="phone">State</label>
                                    <select class="form-control" name="user_role">
                                        <option selected>Enugu</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Bank Account Number</label><input name="acc_no" class="form-control" data-error="Please input the Bank Account Number" placeholder="eg: 0097895364" value="0097895364" required="required" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Bank Name</label>
                                    <select class="form-control" name="bank">
                                        <option value="Access Bank">Access Bank</option>
                                        <option selected value="Access Bank (Diamond)">Access Bank (Diamond)</option>
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
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Email address</label><input name="email" class="form-control" placeholder="(Payment advise would be sent to specified email)" value="signsmadueke1@gmail.com" autocomplete="email" required="required" type="email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Cc Email address</label><input name="email" class="form-control" placeholder="(Payment advise would be copied to specified addresses. Seperate each address with comma)" value="signsmadueke1@gmail.com, okechukwu008@gmail.com, adviceagftaxsolution@gmail.com" required="required" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="state">Payment Advise Addressed to</label>
                                    <textarea name="address" class="form-control" data-error="Please input the Address" placeholder="The Manager, Access Bank Plc., Abuja, Wuse II." value="The Manager, Access Bank Plc., Abuja, Wuse II." rows="3" required="required" type="text"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="phone">Payment Advise Signature</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="picture" name="picture" required="required">
                                        <label class="custom-file-label" for="attach">(700px x 80px .jpg and .png only)</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-4">
                            <div class="col-sm-12 col-md-4 mb-2">
                                <button class="btn btn-white btn-block" data-dismiss="modal" type="button">Cancel</button>
                            </div>
                            <div class="col-sm-12 col-md-8 mb-2">
                                <input name="submit" class="btn btn-primary btn-block" value="Update Ministry Details" type="submit">
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
