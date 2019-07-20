<?php 
/**
 * 
 */
class Payment
{
	
	private $_db;
	private $_data;
	
	function __construct($payment_id = null)
	{
		$this->_db = DB::getInstance();
		$this->find_payment($payment_id);
	}

	public function create($fields = array())
	{
		if (!$this->_db->insert('vendor', $fields)) {
			throw new Exception('There was a problem adding a vendor.');
		}
	}

	public function update($fields = array(), $id)
	{
		if (!$this->_db->update('payment', $id, 'payment_id', $fields)) {
			throw new Exception("There was a problem updating.");
		}
		return true;
	}

	public function find_payment($payment =null)
	{
		if ($payment) {
			$field = (is_numeric($payment)) ? 'payment_id' : 'vendor';
			$data = $this->_db->get('payment', array($field, '=', $payment));

			if ($data->count()) {
				$this->_data = $data->first();
				return true;
			}
		}
		return false;
	}

	 public function payment_count($type)
    {   
        $pay = $this->_db->get_group('payment');
        // return var_dump(time());
        if ($pay) {
            $c = 0;
            foreach ($pay as $p) {
                if (date('M') == date('M', intval($p->payment_time))) {
                    if ($type == 'vat') {
                        $c = $c + $p->VAT;
                    } elseif ($type == 'wht') {
                        $c = $c + $p->WHT;
                    } elseif ($type == 'stamp_duty') {
                        $c = $c + $p->stamp_duty;
                    } elseif ($type == 'total_amount') {
                        $c = $c + $p->amount;
                    } else {
                        return false;
                    }
                }            
            } return $c;
        } return false;
    }

    public function readAll()
	{
		return $this->_db->get_group('payment');
	}

	public function read($condition)
	{
		if ($condition == 'approved') {
			$get = $this->_db->get('payment', array('payment_status', '=', '1'));
			// return var_dump($get);
			if ($get->count()) {
				return $get->results();
			} else {
				return false;
			}
		} elseif ($condition == 'pending') {
			$get = $this->_db->get('payment', array('payment_status', '=', '0'));
			if ($get->count()) {
				return $get->results();
			} else {
				return false;
			}
		} else {
			return false;
		}
	}

	public function t_payment()
	{
		$ct = $this->_db->query("SELECT * FROM payment", []);
		return $ct->count();
	}

	public function completed_payment()
	{
		$ct = $this->_db->get('payment', array('payment_status', '=', '1'));
		return $ct->count();
	}

	public function pending_payment()
	{
		$ct = $this->_db->get('payment', array('payment_status', '=', '1'));
		return $ct->count();
	}
}