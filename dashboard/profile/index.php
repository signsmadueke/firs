<?php 
require_once 'core/init.php';

$user = new User();
$payment = new Payment();
if (!$user->isLoggedIn()) {
    Redirect::to('../login.php');
}

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
                <div class="row">
                    <div class="col-sm-12 pt-4 text-center">
                        <?php if (isset($errors)) { 
                            foreach ($errors as $error) { ?>
                            <div class="alert alert-info">
                                <?php echo $error; ?>
                            </div>
                        <?php 
                            }
                        }
                        if (Session::exists('c_password')) { ?>
                            <div class="alert alert-info">
                                <?php echo Session::flash('c_password'); ?>
                            </div>
                        <?php } 
                        if (Session::exists('update')) { ?>
                            <div class="alert alert-info">
                                <?php echo Session::flash('update'); ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-sm-12 p-0">
                    <div class="users-list-w">
                        <div class="user-w with-status status-green p-0">
                            <div class="user-name p-0">
                                <h3 class="user-title">
                                    <strong><?php echo $user->data()->firstname . ' ' . $user->data()->lastname; ?></strong>
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
                                        <input readonly class="form-control" value="<?php echo $user->data()->lastname; ?>" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">First Name</label>
                                        <input readonly class="form-control" value="<?php echo $user->data()->firstname; ?>" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Phone Number</label>
                                        <input readonly class="form-control" value="0801 234 5678" type="text">
                                    </div>
                                </div> -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Email address</label>
                                        <input readonly class="form-control" value="<?php echo $user->data()->email;?>" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group mb-0">
                                        <label for="">User Status</label>
                                        <input readonly class="form-control" value="<?php if($user->data()->status == 1) {echo 'Active';} else {echo 'Inactive';} ?>" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group mb-0">
                                        <label for="">State</label>
                                        <input readonly class="form-control" value="<?php echo $user->data()->state; ?> State" type="text">
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
                            <form method="post" action="update.php">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="lname">Last Name</label><input name="lname" value="<?php echo $user->data()->lastname; ?>" class="form-control" data-error="Please input your Last Name" placeholder="eg: Doe" required="required" type="text">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="fname">First Name</label><input name="fname" value="<?php echo $user->data()->firstname; ?>" class="form-control" data-error="Please input your First Name" placeholder="eg: John" required="required" type="text">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email address</label><input name="email" value="<?php echo $user->data()->email;?>" class="form-control" data-error="Your email address is invalid" placeholder="Enter email" autocomplete="email" required="required" type="email">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="status">User Status</label>
                                            <select class="form-control" name="status">
                                                <option <?php if($user->data()->status == 1) {echo "selected";} ?> value="1">Active</option>
                                                <option <?php if($user->data()->status == 0) {echo "selected";} ?> value="0">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="user_role">User Role</label>
                                            <select class="form-control" name="user_role">
                                                <?php foreach ($user->get_roles('user_roles') as $role) {?> ?>
                                                <option <?php if($user->data()->user_role == $role->role_id) {echo "selected";} ?> value="<?php echo $role->role_id; ?>"><?php echo $role->role_name; ?></option>
                                                <?php 
                                                } 
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="state">State</label><input name="state" value="<?php echo $user->data()->state;?> State" class="form-control" data-error="Please input your State" placeholder="eg: Enugu State" required="required" autocomplete="state" type="text">
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
                            <form method="post" action="change_password.php">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="currentpassword">Current Password</label>
                                            <input name="password_current" id="currentpassword" class="form-control" data-error="Please input your current password" placeholder="Input your current password" required="required" type="password">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="password">New Password</label>
                                            <input name="password_new" id="password" class="form-control" data-error="Please input your new password" placeholder="Input your new password" required="required" type="password">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="password2">Re-type New Password</label>
                                            <input name="password_new_again" id="password2" class="form-control" data-error="Please re-type your new password" placeholder="Re-type your new password" required="required" type="password">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-4">
                                    <div class="col-sm-12 col-md-4 mb-2">
                                        <button class="btn btn-white btn-block" data-dismiss="modal" type="button">Cancel</button>
                                    </div>
                                    <div class="col-sm-12 col-md-8 mb-2">
                                        <input name="submit1" class="btn btn-primary btn-block" value="Change Password" type="submit">
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
