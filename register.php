<?php
require_once 'core/init.php';
$user = new User();
if (Session::exists('register')) {
    echo '<p>' . Session::flash('register'). '</p>';
}
if(Input::exists()){
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

        if($validation->passed()){
            try {
                $salt = Hash::salt(32);
                $user->create(array(
                    'username' => Input::get('username'),
                    'password' => Hash::make(Input::get('password'), $salt),
                    'salt' => $salt,
                    'firstname' => Input::get('fname'),
                    'lastname' => Input::get('lname'),
                    'email' => Input::get('email'),
                    'user_role' => Input::get('user_role'),
                    'status' => Input::get('status'),
                    'state' => Input::get('state'),
                    'date_created' => date('Y-m-d H:i:s'),
                ));

                Session::flash('register', 'You have been registered and can now login');
                Redirect::to('register.php');
            } catch (Exception $e) {
                Session::flash('register', "$e->getMessage()");
                Redirect::to('register.php');

            }
        } else{
            foreach ($validation->errors() as $value) {
                echo "{$value}<br>";
            }
        }
    }
}
?>
<form action="" method="post">
    <div class="field">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" autocomplete="off" value="<?php echo Input::get('username'); ?>">
    </div>

    <div class="field">
        <label for="password">Choose a password</label>
        <input type="password" name="password" id="password">
    </div>

    <div class="field">
        <label for="password_again">Enter Your Password again</label>
        <input type="password" name="password_again" id="password">
    </div>

    <div class="field">
        <label for="name">Enter Your First Name</label>
        <input type="text" name="fname" id="name">
    </div>

    <div class="field">
        <label for="name">Enter Your Last Name</label>
        <input type="text" name="lname" id="name">
    </div>

    <div class="field">
        <label for="name">Enter Email</label>
        <input type="text" name="email" id="name">
    </div>

    <div class="field">
        <label for="name">Enter state</label>
        <input type="text" name="state" id="name">
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
    <input type="submit" value="Register">
</form>