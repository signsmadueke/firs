<?php
    $title = 'Users';
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
                                <div class="icon-people"></div>
                            </div>
                            <div class="element-info-text">
                                <h5 class="element-inner-header">
                                    User Management
                                </h5>
                                <div class="element-inner-desc">
                                    View, Create, Edit and delete administrators
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-auto mt-4 mt-lg-0">
                        <a class="btn btn-block btn-primary el-tablo m-0 p-3 pl-4 pr-4 text-white" href="#" data-target="#add" data-toggle="modal">
                            <i class="icon-feather-plus-circle mr-2"></i>
                            Add User
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
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Coverage</th>
                                    <th colspan="2">Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr class="">
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Coverage</th>
                                    <th colspan="2">Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr class="">
                                    <td>1</td>
                                    <td>ENUGU</td>
                                    <td>ADMIN</td>
                                    <td>agf-enugu-admin</td>
                                    <td>State Admin</td>
                                    <td>Active</td>
                                    <td>EBONYI</td>
                                    <td class="action">
                                        <a class="btn btn-primary btn-sm" href="#" data-target="#edit" data-toggle="modal">Edit</a>
                                    </td>
                                    <td class="action">
                                        <a class="btn btn-danger btn-sm" href="#" data-target="#delete" data-toggle="modal">Delete</a>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td>2</td>
                                    <td>Chijindu</td>
                                    <td>Azubuike</td>
                                    <td>okeycj</td>
                                    <td>State Admin</td>
                                    <td>Active</td>
                                    <td>EBONYI</td>
                                    <td class="action">
                                        <a class="btn btn-primary btn-sm" href="#" data-target="#edit" data-toggle="modal">Edit</a>
                                    </td>
                                    <td class="action">
                                        <a class="btn btn-danger btn-sm" href="#" data-target="#delete" data-toggle="modal">Delete</a>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td>3</td>
                                    <td>Signs</td>
                                    <td>Madueke</td>
                                    <td>signsmadueke</td>
                                    <td>State Admin</td>
                                    <td>Active</td>
                                    <td>EBONYI</td>
                                    <td class="action">
                                        <a class="btn btn-primary btn-sm" href="#" data-target="#edit" data-toggle="modal">Edit</a>
                                    </td>
                                    <td class="action">
                                        <a class="btn btn-danger btn-sm" href="#" data-target="#delete" data-toggle="modal">Delete</a>
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
                        Add User
                    </h4>
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="fname">First Name</label><input name="name" class="form-control" data-error="Please input the First Name" placeholder="eg: John" required="required" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="lname">Last Name</label><input name="lname" class="form-control" data-error="Please input the Last Name" placeholder="eg: Doe" required="required" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="lname">Username</label><input name="vname" class="form-control" data-error="Please input the Vendor's Name" placeholder="eg: johndoe" required="required" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input name="password_new" id="password" class="form-control" data-error="Please input the user's password" placeholder="Input your new password" required="required" type="password">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="password2">Re-type Password</label>
                                    <input name="password_new_again" id="password2" class="form-control" data-error="Please re-type the user's password" placeholder="Re-type your new password" required="required" type="password">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">User Role</label>
                                    <select class="form-control" name="bank">
                                        <option>Admin</option>
                                        <option selected>User</option>
                                        <option>Supervisor</option>
                                    </select>
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
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="">State</label>
                                    <select class="form-control" name="ctype">
                                        <option>Enugu State</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-4">
                            <div class="col-sm-12 col-md-4 mb-2">
                                <button class="btn btn-white btn-block" data-dismiss="modal" type="button">Cancel</button>
                            </div>
                            <div class="col-sm-12 col-md-8 mb-2">
                                <input name="submit" class="btn btn-primary btn-block" value="Add User" type="submit">
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
                        Edit User Details
                    </h4>
                    <div class="onboarding-text">
                        Change the information about Emeka Okeke.
                    </div>
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="fname">First Name</label><input name="name" class="form-control" data-error="Please input the First Name" placeholder="eg: John" required="required" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="lname">Last Name</label><input name="lname" class="form-control" data-error="Please input the Last Name" placeholder="eg: Doe" required="required" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="lname">Username</label><input name="vname" class="form-control" data-error="Please input the Vendor's Name" placeholder="eg: johndoe" required="required" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="password">Change Password</label>
                                    <input name="password_new" id="password" class="form-control" data-error="Please input the user's password" placeholder="Input your new password" required="required" type="password">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">User Role</label>
                                    <select class="form-control" name="bank">
                                        <option>Admin</option>
                                        <option selected>User</option>
                                        <option>Supervisor</option>
                                    </select>
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
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="">State</label>
                                    <select class="form-control" name="ctype">
                                        <option>Enugu State</option>
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
    <?php
    require_once '../includes/footer.php';
?>
