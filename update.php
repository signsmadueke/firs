<?php  
require_once 'core/init.php';
$user = new User();

if (!$user->isLoggedIn()) {
	Redirect::to('login.php');
}

if (Input::exists()) {
    if (Token::check(Input::get('token'))) {
        
        $validate = new Validate();
        $validation = $validate->check($_POST, array(
            'username' => array(
                'requires' => true,
                'min' => 2,
                'max' => 20,
                'unique' => 'users'
            ),
            'password' => array(
                'reqiured' => true,
                'min' => 6
            ),
            'password_again' => array(
                'required' => true,
                'min' => 6,
                'matches' => 'password'
            ),
            'fname' => array(
                'required' => true,
                'min' => 2,
                'max' => 50
            ),
            'lname' => array(
                'required' => true,
                'min' => 2,
                'max' => 50
            ),
            'email' => array(
                'required' => true,
                'min' => 2,
                'max' => 50
            ),
            'username' => array(
                'required' => true,
                'min' => 2,
                'max' => 50
            ),
            'state' => array(
                'required' => true,
                'min' => 2,
                'max' => 50
            )
        ));

        if ($validation->passed()) {
            
            try {
                $salt = Hash::salt(32);
                $user->update(array(
                    'username' => Input::get('username'),
                    'password' => Hash::make(Input::get('password'), $salt),
                    'salt' => $salt,
                    'firstname' => Input::get('fname'),
                    'lastname' => Input::get('lname'),
                    'email' => Input::get('email'),
                    'user_role' => Input::get('user_role'),
                    'status' => Input::get('status'),
                    'state' => Input::get('state'),
                    'date_created' => date('Y-m-d H:i:s')
                ));

                Session::flash('home', 'Your details have been updated');
                Redirect::to('index.php');
            } catch (Exception $e) {
                die($e->getMessage());      
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
        <label for="username">Username</label>
        <input type="text" name="username" id="username" autocomplete="off" value="<?php echo escape($user->data()->username); ?>">
    </div>

    <div class="field">
        <label for="password">Choose a password</label>
        <input type="password" name="password" id="password">
    </div>

    <div class="field">
        <label for="name">Enter Your First Name</label>
        <input type="text" name="fname" id="name" value="<?php echo escape($user->data()->firstname); ?>">
    </div>

    <div class="field">
        <label for="name">Enter Your Last Name</label>
        <input type="text" name="lname" id="name" value="<?php echo escape($user->data()->lastname); ?>">
    </div>

    <div class="field">
        <label for="name">Enter Email</label>
        <input type="text" name="email" id="name" value="<?php echo escape($user->data()->email); ?>">
    </div>

    <div class="field">
        <label for="name">Enter state</label>
        <input type="text" name="state" id="name" value="<?php echo escape($user->data()->lastname); ?>">
    </div>

    <div class="field">
        <label for="name">Enter User Role</label>
        <select name="user_role">
            <?php
            // var_dump($user->get_roles());
             foreach ($user->get_roles() as $role) {?>
                <option value="<?php echo $role->role_id ?>"><?php echo $role->role_name;?></option>
            <?php 
            }?>
            <!-- <option value="0">Non Active</option> -->
        </select>
    </div>

    <div class="field">
        <label for="name">Enter status</label>
        <select name="status">
            <option value="1">Active</option>
            <option value="0">Non Active</option>
        </select>
    </div>
    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
    <input type="submit" value="Update">
</form>
<form action="" method="post">
	<div class="field">
		<label for="lname">Name</label>
		<input type="text" id="lname" name="lname" value="<?php echo escape($user->data()->lastname); ?>">
		<input type="text" id="fname" name="fname" value="<?php echo escape($user->data()->firstname); ?>">
		<input type="email" id="email" name="email" value="<?php echo escape($user->data()->email); ?>">
		<input type="text" id="username" name="username" value="<?php echo escape($user->data()->username); ?>">
		<input type="text" id="password" name="password" value="<?php echo escape($user->data()->password); ?>">

		<input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
		<input type="submit" value="Update">
	</div>
</form>