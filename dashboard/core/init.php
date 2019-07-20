<?php
session_start();

$GLOBALS['config'] = array(
    'mysql' => array(
        'host' => '127.0.0.1',
        'username' => 'root',
        'password' => '',
        'db' => 'firs'
    ),
    'remember' => array(
        'cookie_name' => 'hash',
        'cookie_expiry' => 604800
    ),
    'session' => array(
        'session_name' => 'user',
        'session_token' => 'token'
    )
);

require_once '../functions/mail_function.php';

spl_autoload_register(function($class)
{
    require_once '../classes/' . $class . '.php';   
});

require_once '../functions/sanitize.php';

if (Cookie::exists(config::get('remember/cookie_name')) && Session::exists(Config::get('session/session_name'))) {
    $hash = Cookie::get(Config::get('remember/cookie_name'));
    $hashCheck = DB::getInstance()->get('users_sessions', array('users_session', '=', $hash));
    if ($hashCheck->count()) {
        $user = new User($hashCheck->first()->user_id);
        die($user);
        $user->login();
        // Redirect::to('dashboard.php');
    }
}