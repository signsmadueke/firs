<?php 
require_once 'core/init.php';
if (!$user->isLoggedIn()) {
	Redirect::to('login.php');
}
if(Input::exists()){
    if (Token::check(Input::get('token'))) {
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

        if($validation->passed()){
            $vendor = new Vendor();
            try {
                $vendor->create(array(
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
                    'bank' => Input::get('bank'),
                    'status' => Input::get('status'),
                ));

                Session::flash('vendor', 'You have been registered and can now login');
                Redirect::to('add_vendor.php');
            } catch (Exception $e) {
            	Session::flash('vendor', "$e->getMessage()");
                Redirect::to('add_vendor.php');
            }
        } else{
            foreach ($validation->errors() as $value) {
                echo "{$value}<br>";
            }
        }
    }
}