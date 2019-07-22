<?php 
require_once 'core/init.php';
$user = new User();
if (!$user->isLoggedIn()) {
	Redirect::to('login.php');
}
// var_dump(Input::exists());
// die();
if(Input::exists()){
    $validate = new Validate();
    $validation = $validate->check($_POST, array(
        'vendor_name' => array(
            'requires' => true,
            'min' => 2
        ),
        'TIN' => array(
            'requires' => true,
            'min' => 2
        ),
        'contact_first_name' => array(
            'requires' => true,
            'min' => 2
        ),
        'contact_last_name' => array(
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
            // 'min' => 2
        )
    ));
    if($validation->passed()){
        $vendor = new Vendor();
        try {
            $vendor->create(array(
                'vendor_name' => Input::get('vendor_name'),
                'TIN' => Input::get('TIN'),
                'contact_firstname' => Input::get('contact_first_name'),
                'contact_lastname' => Input::get('contact_last_name'),
                'phone_no' => Input::get('tel'),
                'email' => Input::get('email'),
                'state' => Input::get('state'),
                'address' => Input::get('address'),
                'account_no' => Input::get('acc_no'),
                'bank' => Input::get('bank'),
                'company_type' => Input::get('company_type'),
                'company_cat' => Input::get('company_cat'),
                'status' => Input::get('status'),
                'date_created' => time()
            ));

            Session::flash('vendor', 'You have added a new vendor');
            Redirect::to('../vendors');
        } catch (Exception $e) {
        	Session::flash('vendor', $e->getMessage());
            Redirect::to('../vendors');
        }
    } else{
        foreach ($validation->errors() as $value) {
            Session::flash('vendor', "$value");
            Redirect::to('../vendors');
        }
    }
}