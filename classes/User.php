<?php 
/**
 * 
 */

class User
{
	
	private $_db,
			$_data,
			$_sessionName;

	public $_isLoggedIn;
	function __construct($user = null)
	{
		$this->_db = DB::getInstance();

		$this->_sessionName = Config::get('session/session_name');

		$this->_cookieName = Config::get('remember/cookie_name');

		if (!$user) {
			if (Session::exists($this->_sessionName)) {
				$user = Session::get($this->_sessionName);

				if ($this->find($user)) {
					$this->_isLoggedIn = true;
				} else {

				}
			}
		} else {
			$this->find($user);
		}
	}

	public function update($fields = array(), $id = null)
	{
		if (!$id && $this->isLoggedIn()) {
			$id = $this->data()->id;
		}
		if (!$this->_db->update('users', $id, 'id', $fields)) {
			throw new Exception("There was a problem updating.");
		}
		return true;
	}

	public function create($fields = array())
	{
		if (!$this->_db->insert('users', $fields)) {
			throw new Exception('There was a problem creating an account.');
			
		}
	}

	public function find($user =null)
	{
		if ($user) {
			$field = (is_numeric($user)) ? 'id' : 'username';
			$data = $this->_db->get('users', array($field, '=', $user));

			if ($data->count()) {
				$this->_data = $data->first();
				return true;
			}
		}
		return false;
	}

	public function otp($otp, $user_id)
	{
		$user = $this->find($user_id);
		if ($user) {
			if ($this->data()->otp == $otp) {
				$result = $this->update(array("otp" => ""), $user_id);
				if ($result) {
					$this->login();
					return true;
				} return false;
			} return false;
		} return false;
	}
	public function initialLogin($username = null, $password = null, $remember = null)
	{
		$user = $this->find($username);
		if ($user) {
			if ($this->data()->password == Hash::make($password, $this->data()->salt)) {
				$name = $this->data()->username;
				$to = $this->data()->email;
				$url =  $_SERVER['SERVER_NAME'] . "/fir3/otp_template.php";
				$logo =  $_SERVER['SERVER_NAME'] . "/fir3/assets/img/firs.png";
				$login =  $_SERVER['SERVER_NAME'] . "/fir3/login.php";
				$ch = curl_init();
				curl_setopt ($ch, CURLOPT_URL, $url);
				curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 5);
				curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
				$body = curl_exec($ch);
				if (curl_errno($ch)) {
				  echo curl_error($ch);
				  echo "\n<br />";
				  $body = '';
				} else {
				  curl_close($ch);
				}
				if (!is_string($body) || !strlen($body)) {
					echo "Failed to get body.";
					$body = '';
				}
				$otp_rand = rand(1000000000, 1800000000);
				$body = str_replace('#logo#', $logo, $body);
				$body = str_replace('#login#', $login, $body);
				$body = str_replace('#otp#', $otp_rand, $body);
				$result = send_mail($to, $name, 'OTP Authentication', $body);
			// return $result;
				if ($result) {
					$upd = $this->update(array("otp" => $otp_rand), $this->data()->id);
					if ($upd === true) {
						return $this->data()->id;
					}
				}
			} return false;
		} return false;
	}

	public function login($username = null, $password = null, $remember = null)		
	{
	
		if (!$username && !$password && $this->exists()) {
			Session::put($this->_sessionName, $this->data()->id);
			return;
		} else {
			$user = $this->find($username);
			if ($user) {
				if ($this->data()->password == Hash::make($password, $this->data()->salt)) {
					Session::put($this->_sessionName, $this->data()->id);
					if ($remember) {
						$hash = Hash::unique();
						$hashCheck = $this->_db->get('users_sessions', array('user_id', '=', $this->data()->id));

						if (!$hashCheck->count()) {
							$this->_db->insert('users_sessions', array(
								'user_id' => $this->data()->id,
								'users_session' => $hash
							));
						} else {
							$hash = $hashCheck->first()->hash;
						}

						Cookie::put($this->_cookieName, $hash, Config::get('remember/cookie_expiry'));					
					}
					return true;
				}
			}
		}
		return false;
	}

	public function hasPermission($key)
	{
		$group = $this->_db->get('groups', array('id', '=', $this->data()->group));
		if ($group->count()) {
			$permissions = json_decode($group->first()->permission, true);
			// return var_dump($permissions);
			if ($permissions[$key] == true) {
				return true;
			}
		}
		return false;
	}
	public function logout()
	{
		Session::delete($this->_sessionName);
	}
	public function exists()
	{
		return (!empty($this->_data)) ? true : false;
	}
	public function get_roles()
	{
		return $this->_db->get_group('user_roles');
	}
	public function data()
	{
		return $this->_data;
	}
	public function isLoggedIn()
	{
		return $this->_isLoggedIn;
	}
}