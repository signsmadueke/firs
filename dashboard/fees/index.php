<?php
    $title = 'State Fees';
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
                                <div class="os-icon os-icon-coins-4"></div>
                            </div>
                            <div class="element-info-text">
                                <h5 class="element-inner-header">
                                    State Fees
                                </h5>
                                <div class="element-inner-desc">
                                    View, create, edit state fees
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-auto mt-4 mt-lg-0">
                        <a class="btn btn-block btn-primary el-tablo m-0 p-3 pl-4 pr-4 text-white" href="#" data-target="#add" data-toggle="modal">
                            <i class="icon-feather-plus-circle mr-2"></i>
                            Add State Fee
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
									<th>Fee Name</th>
									<th>State/MDA</th>
									<th>Account Number</th>
									<th>Bank</th>
									<th>Value</th>
									<th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr class="">
									<th>Fee Name</th>
									<th>State/MDA</th>
									<th>Account Number</th>
									<th>Bank</th>
									<th>Value</th>
									<th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr class="">
                                    <td>Development levy</td>
									<td>EBONYI</td>
									<td>0014025852</td>
									<td>Union Bank PLC</td>
									<td>NGN 1,000.000</td>
                                    <td class="action">
                                        <a class="btn btn-primary btn-sm" href="#" data-target="#edit" data-toggle="modal">Edit</a>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td>Education levy</td>
						            <td>EBONYI</td>
						            <td>1125457852</td>
						            <td>Standard Chartered Bank</td>
						            <td>NGN 100.000</td>
                                    <td class="action">
                                        <a class="btn btn-primary btn-sm" href="#" data-target="#edit" data-toggle="modal">Edit</a>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td>Stamp Duty</td>
							         <td>EBONYI</td>
							         <td>014010458</td>
							         <td>Wema Bank</td>
							         <td>1.000%</td>
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
        <div class="col-1"></div> 
    </div>
    <div aria-hidden="true" class="onboarding-modal modal fade animated" id="add" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg modal-centered" role="document">
            <div class="modal-content text-center">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="btn btn-link text-dark">Close</span><span class="os-icon os-icon-close btn-link text-dark"></span></button>
                <div class="onboarding-content p-5 mt-5">
                    <h4 class="onboarding-title">
                        Add State Fee
                    </h4>
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Fee Name/Title</label><input name="vname" class="form-control" placeholder="eg: Development Levy" required="required" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Fee Value</label>
                                    <div class="input-group">
	                                    <div class="input-group-prepend">
	                                        <div class="input-group-text">
	                                        	₦
	                                        </div>
	                                    </div>
	                                    <input name="name" class="form-control" placeholder="eg: 2000" required="required" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Value Type</label>
                                    <select class="form-control" name="status">
                                        <option>Percentage</option>
                                        <option>Flat Rate</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Tax Office (State)</label>
                                    <select class="form-control" name="status">
                                        <option>Enugu State</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Bank Account Number</label><input name="acc_no" class="form-control" placeholder="eg: 0097895364" required="required" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Bank Name</label>
                                    <select class="form-control" name="bank">
                                        <option>Access Bank</option>
                                        <option>Access Bank (Diamond)</option>
                                        <option>Citibank</option>
                                        <option>Coronation Merchant Bank</option>
                                        <option>Ecobank Nigeria</option>
                                        <option>Enterprise Bank Limited</option>
                                        <option>FBN Holdings Plc</option>
                                        <option>FBN Merchant Bank</option>
                                        <option>FCMB Group Plc</option>
                                        <option>Fidelity Bank Nigeria</option>
                                        <option>First Bank of Nigeria</option>
                                        <option>First City Monument Bank</option>
                                        <option>FSDH Merchant Bank</option>
                                        <option>Guaranty Trust Bank</option>
                                        <option>Heritage Bank Plc</option>
                                        <option>Jaiz Bank Limited</option>
                                        <option>Keystone Bank Limited</option>
                                        <option>Providusbank Plc</option>
                                        <option>Rand Merchant Bank</option>
                                        <option>Skye Bank</option>
                                        <option>Stanbic IBTC Bank Nigeria Limited</option>
                                        <option>Stanbic IBTC Holdings Plc</option>
                                        <option>Standard Chartered Bank</option>
                                        <option>Sterling Bank</option>
                                        <option>Suntrust Bank Nigeria Limited</option>
                                        <option>Union Bank of Nigeria</option>
                                        <option>United Bank for Africa</option>
                                        <option>Unity Bank Plc</option>
                                        <option>Wema Bank</option>
                                        <option>Zenith Bank</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-4">
                            <div class="col-sm-12 col-md-4 mb-2">
                                <button class="btn btn-white btn-block" data-dismiss="modal" type="button">Cancel</button>
                            </div>
                            <div class="col-sm-12 col-md-8 mb-2">
                                <input name="submit" class="btn btn-primary btn-block" value="Add State Fee" type="submit">
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
                        Edit State Fee
                    </h4>
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Fee Name/Title</label><input name="vname" class="form-control" placeholder="eg: Development Levy" value="Development Levy" required="required" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Fee Value</label>
                                    <div class="input-group">
	                                    <div class="input-group-prepend">
	                                        <div class="input-group-text">
	                                        	₦
	                                        </div>
	                                    </div>
	                                    <input name="name" class="form-control" placeholder="eg: 2000" value="2000" required="required" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Value Type</label>
                                    <select class="form-control" name="status">
                                        <option>Percentage</option>
                                        <option>Flat Rate</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Tax Office (State)</label>
                                    <select class="form-control" name="status">
                                        <option>Enugu State</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Bank Account Number</label><input name="acc_no" class="form-control" placeholder="eg: 0097895364" value="0097895364" required="required" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Bank Name</label>
                                    <select class="form-control" name="bank">
                                        <option>Access Bank</option>
                                        <option>Access Bank (Diamond)</option>
                                        <option>Citibank</option>
                                        <option>Coronation Merchant Bank</option>
                                        <option>Ecobank Nigeria</option>
                                        <option>Enterprise Bank Limited</option>
                                        <option>FBN Holdings Plc</option>
                                        <option>FBN Merchant Bank</option>
                                        <option>FCMB Group Plc</option>
                                        <option>Fidelity Bank Nigeria</option>
                                        <option>First Bank of Nigeria</option>
                                        <option>First City Monument Bank</option>
                                        <option>FSDH Merchant Bank</option>
                                        <option>Guaranty Trust Bank</option>
                                        <option>Heritage Bank Plc</option>
                                        <option>Jaiz Bank Limited</option>
                                        <option>Keystone Bank Limited</option>
                                        <option>Providusbank Plc</option>
                                        <option>Rand Merchant Bank</option>
                                        <option>Skye Bank</option>
                                        <option>Stanbic IBTC Bank Nigeria Limited</option>
                                        <option>Stanbic IBTC Holdings Plc</option>
                                        <option>Standard Chartered Bank</option>
                                        <option>Sterling Bank</option>
                                        <option>Suntrust Bank Nigeria Limited</option>
                                        <option>Union Bank of Nigeria</option>
                                        <option>United Bank for Africa</option>
                                        <option>Unity Bank Plc</option>
                                        <option>Wema Bank</option>
                                        <option>Zenith Bank</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-4">
                            <div class="col-sm-12 col-md-4 mb-2">
                                <button class="btn btn-white btn-block" data-dismiss="modal" type="button">Cancel</button>
                            </div>
                            <div class="col-sm-12 col-md-8 mb-2">
                                <input name="submit" class="btn btn-primary btn-block" value="Update State Fee" type="submit">
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
