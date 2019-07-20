<?php  
/**
 * 
 */
class Vendor
{
	private $_db;
	private $_data;
	
	function __construct($vendor_id = null)
	{
		$this->_db = DB::getInstance();
		$this->find_vendor($vendor_id);
	}

	public function create($fields = array())
	{
		if (!$this->_db->insert('vendor', $fields)) {
			throw new Exception('There was a problem adding a vendor.');
		}
	}

	public function find_vendor($vendor =null)
	{
		if ($vendor) {
			$field = (is_numeric($vendor)) ? 'vendor_id' : 'vendor_name';
			$data = $this->_db->get('vendor', array($field, '=', $vendor));

			if ($data->count()) {
				$this->_data = $data->first();
				return true;
			}
		}
		return false;
	}

	public function update_vendor($fields = array(), $id = null)
	{
		if (!$this->_db->update('vendor', $id, $fields)) {
			throw new Exception("There was a problem updating.");	
		}
	}

	public function get_cats($table)
	{
		return $this->_db->get_group($table);
	}

	public function readAll()
	{
		return $this->_db->get_group('vendor');
	}

	public function data()
	{
		return $this->_data;
	}
}