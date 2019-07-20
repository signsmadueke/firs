<?php  
require_once 'core/init.php';
$user = new User();

if (!$user->isLoggedIn()) {
	Redirect::to('login.php');
}

if (Input::exists()) {
	if (Token::check(Input::get('token'))) {
		if (!Input::get('v')) {
			Redirect::to('dashboard.php');
		}
		$validate = new Validate();
		$validation = $validate->check($_POST, array(
			'vname' => array(
                'requires' => true,
                'min' => 2
            ),
            'TIN' => array(
                'requires' => true,
                'min' => 2
            ),
            'cfname' => array(
                'requires' => true,
                'min' => 2
            ),
            'clname' => array(
                'requires' => true,
                'min' => 2
            ),
            'tel' => array(
                'requires' => true,
                'min' => 2
            ),
            'email' => array(
                'requires' => true,
                'min' => 2
            ),
            'state' => array(
                'requires' => true,
                'min' => 2
            ),
            'address' => array(
                'requires' => true,
                'min' => 2
            ),
            'acc_no' => array(
                'requires' => true,
                'min' => 2
            ),
            'bank' => array(
                'requires' => true,
                'min' => 2
            ),
            'company_type' => array(
                'requires' => true,
                'min' => 2
            ),
            'company_cat' => array(
                'requires' => true,
                'min' => 2
            ),
            'status' => array(
                'requires' => true,
                'min' => 2
            )
		));

		if ($validation->passed()) {
			$v_id = Input::get('v');
			$vendor = new Vendor($v_id);
            try {
                $vendor->update_vendor(array(
                    'vendor_name' => Input::get('vname'),
                    'TIN' => Input::get('TIN'),
                    'contact_firstname' => Input::get('cfname'),
                    'cantact_lastname' => Input::get('clname'),
                    'phone_no' => Input::get('tel'),
                    'email' => Input::get('email'),
                    'state' => Input::get('state'),
                    'address' => Input::get('address'),
                    'account' => Input::get('acc_no'),
                    'bank' => Input::get('bank'),
                    'company_type' => Input::get('company_type'),
                    'company_cat' => Input::get('company_cat'),
                    'status' => Input::get('status'),
                ), $v_id);

				Session::flash('vendor', 'Your details have been updated');
				Redirect::to('edit_vendor.php');
			} catch (Exception $e) {
				Session::flash('vendor', "$e->getMessage()");
				Redirect::to('edit_vendor.php');	
			}
		} else{
			foreach ($validation->errors() as $error) {
				echo $error."<br>";
			}
		}
	}
}
?>
<form action="" method="post">
	<div class="field">
		<label for="vname">vname</label>
		<input type="text" id="vname" name="vname" value="<?php echo escape($vendor->data()->vname); ?>">
		<label for="TIN">TIN</label>
		<input type="text" id="TIN" name="TIN" value="<?php echo escape($vendor->data()->TIN); ?>">
		<label for="cfname">cfname</label>
		<input type="cfname" id="cfname" name="cfname" value="<?php echo escape($vendor->data()->cfname); ?>">
		<label for="clname">clname</label>
		<input type="text" id="clname" name="clname" value="<?php echo escape($vendor->data()->clname); ?>">
		<label for="tel">tel</label>
		<input type="number" id="tel" name="tel" value="<?php echo escape($vendor->data()->tel); ?>">
		<label for="email">email</label>
		<input type="email" id="email" name="email" value="<?php echo escape($vendor->data()->email); ?>">
		<label for="state">state</label>
		<input type="text" id="state" name="state" value="<?php echo escape($vendor->data()->state); ?>">
		<label for="address">address</label>
		<input type="text" id="address" name="address" value="<?php echo escape($vendor->data()->address); ?>">
		<label for="acc_no">acc_no</label>
		<input type="text" id="acc_no" name="acc_no" value="<?php echo escape($vendor->data()->acc_no); ?>">
		<label for="bank">bank</label>
		<select name="vendor_bank_id" id="vendor_bank_id">
			<?php foreach ($vendor->get_cats('vendor_bank') as $bank) { ?>
				<option value="1" <?php if ($vendor->data()->bank == $bank->vendor_bank_id) {echo "Selected";} ?>><?php escape(echo $bank->vendor_bank); ?></option>
			<?php 	
			} ?>
        </select>
		<label for="company_type">company_type</label>
		<select name="company_type" id="company_type">
		<?php foreach ($vendor->get_cats('company_type') as $type) { ?>
				<option value="<?php escape(echo $type->company_type_id); ?>" <?php if ($vendor->data()->company_type == $type->company_type_id) {echo "Selected";} ?>><?php escape(echo $type->company_type_name); ?></option>
			<?php 	
			} ?>
		</select>
		<select name="company_cat" id="company_cat">
		<?php foreach ($vendor->get_cats('company_cat') as $cat) { ?>
				<option value="<?php escape(echo $cat->company_cat_id); ?>" <?php if ($vendor->data()->company_cat_id == $cat->company_cat_id) {echo "Selected";} ?>><?php escape(echo $cat->company_cat_name); ?></option>
			<?php 	
			} ?>
		</select>
		<label for="tel">tel</label>
		<input type="text" id="tel" name="tel" value="<?php echo escape($vendor->data()->tel); ?>">

		<input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
		<input type="submit" value="Update">
	</div>
</form>