<?php
    $title = 'Profile';
    require_once '../includes/header.php';
    // require_once '../includes/bgcolor.php';
    // require_once '../includes/chat.php';
?>
<div class="content-box">
    <div class="row">
        <div class="element-wrapper col-sm-12">
            <h6 class="element-header">
                <?php echo $title; ?>
            </h6>
            <div class="user-profile compact mb-4 p-5">
                <div class="col-sm-12 p-0">
                    <div class="users-list-w">
                        <div class="user-w with-status status-green p-0">
                            <div class="user-name p-0">
                                <h3 class="user-title">
                                    <strong>Signs Madueke</strong>
                                </h3>
                                <div class="user-role mt-2">
                                    <strong>User</strong>
                                </div>
                                <div class="mt-2 d-md-none">
                                    <button class="col-sm-2 p-2 btn btn-primary btn-sm mb-2" data-target="#editProfileModal" data-toggle="modal" type="button">Edit Profile</button>
                                    <button class="col-sm-2 p-2 btn btn-outline-primary btn-sm mb-2" data-target="#changePasswordModal" data-toggle="modal" type="button">Change Password</button>
                                </div>
                                <div class="mt-2 d-none d-md-block">
                                    <button class="btn btn-primary" data-target="#editProfileModal" data-toggle="modal" type="button">Edit Profile</button>
                                    <button class="btn btn-outline-primary" data-target="#changePasswordModal" data-toggle="modal" type="button">Change Password</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="element-wrapper p-0">
                    <div class="pt-5 p-0">
                        <form>
                            <div class="element-info mb-4 pb-4">
                                <div class="element-info-text">
                                    <h4 class="element-inner-header">
                                        Profile Details
                                    </h4>
                                    <div class="element-inner-desc">
                                        All the info we have about you.
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Last Name</label>
                                        <input readonly class="form-control" value="Madueke" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">First Name</label>
                                        <input readonly class="form-control" value="Signs" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Phone Number</label>
                                        <input readonly class="form-control" value="0801 234 5678" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Email address</label>
                                        <input readonly class="form-control" value="signs@madueke.com" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group mb-0">
                                        <label for="">User Status</label>
                                        <input readonly class="form-control" value="Active" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group mb-0">
                                        <label for="">State</label>
                                        <input readonly class="form-control" value="Enugu State" type="text">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div aria-hidden="true" class="onboarding-modal modal fade animated" id="editProfileModal" role="dialog" tabindex="-1">
                <div class="modal-dialog modal-centered" role="document">
                    <div class="modal-content text-center">
                        <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="btn btn-link">Close</span><span class="os-icon os-icon-close btn-link"></span></button>
                        <div class="onboarding-content p-5 mt-5">
                            <h4 class="onboarding-title">
                                Edit Profile Details
                            </h4>
                            <div class="onboarding-text">
                                Change the information we have about you.
                            </div>
                            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="lname">Last Name</label><input name="lname" value="Madueke" class="form-control" data-error="Please input your Last Name" placeholder="eg: Doe" required="required" type="text">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="fname">First Name</label><input name="fname" value="Signs" class="form-control" data-error="Please input your First Name" placeholder="eg: John" required="required" type="text">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="phone">Phone Number</label><input name="phone" value="0801 234 5678" class="form-control" data-error="Your Phone Number is invalid" placeholder="eg: 0801 234 5678" type="tel" maxlength="11" minlength="11" autocomplete="tel" required="required">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email address</label><input name="email" value="signs@madueke.com" class="form-control" data-error="Your email address is invalid" placeholder="Enter email" autocomplete="email" required="required" type="email">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="status">User Status</label>
                                            <select class="form-control" name="status">
                                                    <option value="Zenith Bank">Active</option>
                                                    <option value="Zenith Bank">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="state">State</label><input name="state" value="Enugu State" class="form-control" data-error="Please input your State" placeholder="eg: Enugu State" required="required" autocomplete="state" type="text">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-4">
                                    <div class="col-sm-12 col-md-4 mb-2">
                                        <button class="btn btn-white btn-block" data-dismiss="modal" type="button">Cancel</button>
                                    </div>
                                    <div class="col-sm-12 col-md-8 mb-2">
                                        <input name="submit" class="btn btn-primary btn-block" value="Update Profile" type="submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div aria-hidden="true" class="onboarding-modal modal fade animated" id="changePasswordModal" role="dialog" tabindex="-1">
                <div class="modal-dialog modal-centered" role="document">
                    <div class="modal-content text-center">
                        <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="btn btn-link">Close</span><span class="os-icon os-icon-close btn-link"></span></button>
                        <div class="onboarding-content p-5 mt-5">
                            <h4 class="onboarding-title">
                                Change Your Password
                            </h4>
                            <div class="onboarding-text">
                                Fill the form to change your password.
                            </div>
                            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="currentpassword">Current Password</label>
                                            <input name="currentpassword" class="form-control" data-error="Please input your current password" placeholder="Input your current password" required="required" type="password">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="password">New Password</label>
                                            <input name="password" class="form-control" data-error="Please input your new password" placeholder="Input your new password" required="required" type="password">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="password2">Re-type New Password</label>
                                            <input name="password2" class="form-control" data-error="Please re-type your new password" placeholder="Re-type your new password" required="required" type="password">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-4">
                                    <div class="col-sm-12 col-md-4 mb-2">
                                        <button class="btn btn-white btn-block" data-dismiss="modal" type="button">Cancel</button>
                                    </div>
                                    <div class="col-sm-12 col-md-8 mb-2">
                                        <input name="submit" class="btn btn-primary btn-block" value="Change Password" type="submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
    require_once '../includes/footer.php';
?>
