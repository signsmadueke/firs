<?php  
require_once 'core/init.php';
$user = new User();
$payment = new Payment();
if (!$user->isLoggedIn()) {
    Redirect::to('../login.php');
}
if (Input::exists()) {
// var_dump(Token::check(Input::get('token')));        
    $validate = new Validate();
    $validation = $validate->check($_POST, array(
        // 'username' => array(
        //     'requires' => true,
        //     'min' => 2,
        //     'max' => 20,
        //     'unique' => 'users'
        // ),
        // 'password' => array(
        //     'reqiured' => true,
        //     'min' => 6
        // ),
        // 'password_again' => array(
        //     'required' => true,
        //     'min' => 6,
        //     'matches' => 'password'
        // ),
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
        // 'username' => array(
        //     'required' => true,
        //     'min' => 2,
        //     'max' => 50
        // ),
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
                'firstname' => Input::get('fname'),
                'lastname' => Input::get('lname'),
                'email' => Input::get('email'),
                'user_role' => intval(Input::get('user_role')),
                'status' => Input::get('status'),
                'state' => Input::get('state'),
                'date_created' => date('Y-m-d H:i:s')
            ));

            Session::flash('update', 'Your details have been updated');
            Redirect::to('../profile');
        } catch (Exception $e) {
            die($e->getMessage());      
        }
    } else{
        foreach ($validation->errors() as $error) {
            Session::flash('update', "$error");
            Redirect::to('../profile');
        }
    }
}