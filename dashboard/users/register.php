<?php
require_once 'core/init.php';
$user = new User();

if(Input::exists()){
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
                'date_created' => time()
            ));

            Session::flash('register', 'You have added a user');
            Redirect::to('../users');
        } catch (Exception $e) {
            Session::flash('register', $e->getMessage());
            Redirect::to('../users');

        }
    } else{
        foreach ($validation->errors() as $value) {
            Session::flash('register', $value);
            Redirect::to('../users');
        }
    }
}
?>
