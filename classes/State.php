<?php 
/**
 * 
 */
class State
{
	
	private $_db;
	private $_data;
	
	function __construct($state_id = null)
	{
		$this->_db = DB::getInstance();
		$this->find_vendor($state_id);
	}

	public function create($fields = array())
	{
		if (!$this->_db->insert('state', $fields)) {
			throw new Exception('There was a problem adding a state.');
		}
	}

	public function find_vendor($state =null)
	{
		if ($state) {
			$field = (is_numeric($state)) ? 'state_id' : 'state_name';
			$data = $this->_db->get('state', array($field, '=', $state));

			if ($data->count()) {
				$this->_data = $data->first();
				return true;
			}
		}
		return false;
	}

	public function update_state($fields = array(), $id = null)
	{
		if (!$this->_db->update('state', $id, $fields)) {
			throw new Exception("There was a problem updating.");	
		}
	}

	public function readAll()
	{
		return $this->_db->get_group('state');
	}

	public function data()
	{
		return $this->_data;
	}
}