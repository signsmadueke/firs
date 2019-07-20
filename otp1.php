<?php 
require_once 'core/init.php'; 
if (Input::exists() OR Input::exists('get')) {
	if (is_null(Input::get('u')) OR empty(Input::get('u')) OR Input::get('u') == '') {
		Session::flash('login', 'Unauthorize access');
		Redirect::to('login.php');
	}
	$user = new User();
	if (!$user->find(Input::get('u'))) {
		Session::flash('login', 'Unauthorize access');
		Redirect::to('login.php');
	}
	if (Token::check(Input::get('token')) && Input::get('u')) {
		
		$validate = new Validate();
		$validation = $validate->check($_POST, array(
			'otp' => array('required' => true),
		));

		if ($validation->passed()) {

			$login = $user->otp(Input::get('otp'), Input::get('u'));

			if ($login) {
				Redirect::to('dashboard.php');
			}else {
				Session::flash('login', 'Sorry OTP not correct');
				Redirect::to('login.php');
			}
		} else {
			foreach ($validation->errors() as $error) {
				echo $error.'<br>';
			}
		}
	}
} else {
	Redirect::to('login.php');
}
?>

<form action="" method="post">
	<div class="field">
		<label for="username">Enter OTP:</label>
		<input type="text" name="otp" id="otp">
	</div>

	<input type="hidden" name="token" value="<?php echo Token::generate() ?>">
	<input type="submit" value="Log in" name="submit">
</form>