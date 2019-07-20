<?php 
require_once 'core/init.php';

$user = new User();
$user->logout();

Session::flash('login', 'You are now logged out');
Redirect::to('login.php'); 