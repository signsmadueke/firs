<?php 
require_once 'core/init.php';
$user = new User();
$payment = new Payment();
if (!$user->isLoggedIn()) {
    Redirect::to('../login.php');
}
// var_dump(Input::get('acs'));
// die();
if (Input::exists() && Input::get('acs')) {        
    foreach (Input::get('acs') as $key => $value) {
        $payment->update(array(
            'payment_status' => 1
        ), $key);
    }
    Session::flash('payment', 'payments updated successfully');
    Redirect::to('../payments');
} else{
    Session::flash('payment', 'No payment was selected');
    Redirect::to('../payments');
}

//         }    
//     } else {
//         foreach ($validation->errors() as $error) {
//             Session::flash('c_password', "$error");
//             Redirect::to('../profile');
//         }
//     }
// }