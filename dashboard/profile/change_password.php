<?php 
require_once 'core/init.php';
$user = new User();
$payment = new Payment();
if (!$user->isLoggedIn()) {
    Redirect::to('../login.php');
}
if (Input::exists()) {        
    $validate = new Validate();
    $validation = $validate->check($_POST, array(
        'password_current' => array(
            'required' => true,
            'min' => 6
        ),
        'password_new' => array(
            'required' => true,
            'min' => 6
        ),
        'password_new_again' => array(
            'required' => true,
            'min' => 6,
            'matches' => 'password_new'
        )
    ));

    if ($validation->passed()) {
            
        if (Hash::make(Input::get('password_current'), $user->data()->salt) !== $user->data()->password) {
            Session::flash('c_password', 'Your current password is wrong.');
            Redirect::to('../profile');
            // echo "Your current password is wrong.";
        } else{
            $salt = Hash::salt(32);
            $user->update(array(
                'password' => Hash::make(Input::get('password_new'), $salt),
                'salt' => $salt
            ));

            Session::flash('c_password', 'Your password has been changed!');
            Redirect::to('../profile');
        }    
    } else {
        foreach ($validation->errors() as $error) {
            Session::flash('c_password', "$error");
            Redirect::to('../profile');
        }
    }
}