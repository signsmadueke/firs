<?php
    $title = 'Tax Payers';
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
                                <div class="icon-feather-file-text"></div>
                            </div>
                            <div class="element-info-text">
                                <h5 class="element-inner-header">
                                    Tax Payers
                                </h5>
                                <div class="element-inner-desc">
                                    View, create, edit and delete ministries
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
                                    <th class="invisible"></th>
                                    <th>Ministry Name</th>
                                    <th colspan="3">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <td>
                                        <input type="checkbox" class="checkbox" name="acs" data-placement="top" data-toggle="tooltip" data-original-title="Select Payment">
                                    </td>
                                    <td><a href="view.php">Ministry of Agric</a></td>
                                    <td class="actions" align="left">
                                        <a class="btn btn-primary btn-sm" href="view.php">View</a>
                                    </td>
                                    <td class="actions" align="center">
                                        <a class="btn btn-primary btn-grey btn-sm" href="#" data-target="#edit" data-toggle="modal">Edit</a>
                                    </td>
                                    <td class="actions" align="right">
                                        <a class="btn btn-danger btn-sm" href="#" data-target="#delete" data-toggle="modal">Delete</a>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td>
                                        <input type="checkbox" class="checkbox" name="acs" data-placement="top" data-toggle="tooltip" data-original-title="Select Payment">
                                    </td>
                                    <td><a href="view.php">Ministry of Commerce & Industries</a></td>
                                    <td class="actions" align="left">
                                        <a class="btn btn-primary btn-sm" href="view.php">View</a>
                                    </td>
                                    <td class="actions" align="center">
                                        <a class="btn btn-primary btn-grey btn-sm" href="#" data-target="#edit" data-toggle="modal">Edit</a>
                                    </td>
                                    <td class="actions" align="right">
                                        <a class="btn btn-danger btn-sm" href="#" data-target="#delete" data-toggle="modal">Delete</a>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td>
                                        <input type="checkbox" class="checkbox" name="acs" data-placement="top" data-toggle="tooltip" data-original-title="Select Payment">
                                    </td>
                                    <td><a href="view.php">Ministry of Health</a></td>
                                    <td class="actions" align="left">
                                        <a class="btn btn-primary btn-sm" href="view.php">View</a>
                                    </td>
                                    <td class="actions" align="center">
                                        <a class="btn btn-primary btn-grey btn-sm" href="#" data-target="#edit" data-toggle="modal">Edit</a>
                                    </td>
                                    <td class="actions" align="right">
                                        <a class="btn btn-danger btn-sm" href="#" data-target="#delete" data-toggle="modal">Delete</a>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td>
                                        <input type="checkbox" class="checkbox" name="acs" data-placement="top" data-toggle="tooltip" data-original-title="Select Payment">
                                    </td>
                                    <td><a href="view.php">Ministry of Information</a></td>
                                    <td class="actions" align="left">
                                        <a class="btn btn-primary btn-sm" href="view.php">View</a>
                                    </td>
                                    <td class="actions" align="center">
                                        <a class="btn btn-primary btn-grey btn-sm" href="#" data-target="#edit" data-toggle="modal">Edit</a>
                                    </td>
                                    <td class="actions" align="right">
                                        <a class="btn btn-danger btn-sm" href="#" data-target="#delete" data-toggle="modal">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mx-0 mt-4 pt-0 px-4 row">
                        <div class="col-sm"></div>
                        <div class="col-md-auto col-sm-12 mb-4">
                            <a href="#" onclick="selectAll()" id="checker" class="btn btn-block btn-white p-3 px-5"><i class="icon-plus mr-3"></i>Select All</a>
                        </div>
                        <div class="col-md-auto col-sm-12">
                            <button class="btn p-3 px-5 btn-danger btn-block" type="submit">Delete Selected<i class="icon-feather-trash ml-2"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div aria-hidden="true" class="onboarding-modal modal fade animated" id="add" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-centered" role="document">
            <div class="modal-content text-center">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="btn btn-link text-dark">Close</span><span class="os-icon os-icon-close btn-link text-dark"></span></button>
                <div class="onboarding-content p-5 mt-5">
                    <h4 class="onboarding-title">
                        Add Ministry
                    </h4>
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="lname">Ministry Name</label><input name="vname" class="form-control" data-error="Please input the Ministry Name" placeholder="eg: Ministry of Power" required="required" type="text">
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
        <div class="modal-dialog modal-centered" role="document">
            <div class="modal-content text-center">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="btn btn-link text-dark">Close</span><span class="os-icon os-icon-close btn-link text-dark"></span></button>
                <div class="onboarding-content p-5 mt-5">
                    <h4 class="onboarding-title">
                        Edit Ministry
                    </h4>
                    <div class="onboarding-text">
                        Change the information about Ministry of Agric
                    </div>
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="lname">Ministry Name</label><input name="vname" class="form-control" data-error="Please input the Vendor's Name" placeholder="eg: johndoe" required="required" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row pt-4">
                            <div class="col-sm-12 col-md-4 mb-2">
                                <button class="btn btn-white btn-block" data-dismiss="modal" type="button">Cancel</button>
                            </div>
                            <div class="col-sm-12 col-md-8 mb-2">
                                <input name="submit" class="btn btn-primary btn-block" value="Update Ministry" type="submit">
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
                        Are you sure you want to permanently delete this ministry?
                    </h4>
                    <div class="onboarding-text">
                        Once you delete this ministry it cannot be reversed.
                        <br>
                        <strong>Are you sure you want to delete this ministry?</strong>
                    </div>
                    <div class="row pt-4">
                        <div class="col-sm-12 col-md-4 mb-2">
                            <button class="btn btn-secondary btn-block" data-dismiss="modal" type="button">Cancel</button>
                        </div>
                        <div class="col-sm-12 col-md-8 mb-2">
                            <button class="btn btn-danger btn-block" data-dismiss="modal">Delete Ministry</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    require_once '../includes/footer.php';
?>