<?php //-->

Class User extends CI_Model {
	
	public function login($username, $password) {
	 
   		$this->db->select('id, username, firstname, surname, created');
	   	$this->db->from('user');
	   	$this->db->where('username', $username);
	   	$this->db->where('password', $password);
	   	$this->db->where('usertype', 'admin');
	   	$this->db->limit(1);

		$query = $this->db->get();
	
		if($query->num_rows() == 1) {
			$res = $query->result_array();
			
			$this->db->where('id', $res[0]['id']);
			$this->db->update('user', array('online'=>1));
			
			return $res;
		} else {
			return false;
		}
 	}
	
	public function frontLogin($username, $password) {
	 
   		$this->db->select('id, username, firstname, surname, created, usertype');
	   	$this->db->from('user');
	   	$this->db->join('payment', 'payment.payment_user = user.ID');
		
		$this->db->where('user.username', $username);
	   	$this->db->where('user.password', $password);
		$this->db->where('payment.is_ok', 1);
		
	   	$this->db->limit(1);

		$query = $this->db->get();
	
		if($query->num_rows() == 1) {
			$res = $query->result_array();
			
			$this->db->where('id', $res[0]['id']);
			$this->db->update('user', array('online'=>1));
			
			return $res;
		} else {
			return false;
		}
 	}
	
	public function getAdminChat() {
		$this->db->select('id, username, firstname, surname, created, email, city, online');
	   	$this->db->from('user');
	   	$this->db->where('usertype', 'admin');
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function getNewRegister() {
		$this->db->select('id, username, firstname, surname, created, email, city');
	   	$this->db->from('user');
		$this->db->join('payment', 'id=payment_user', 'left');
	   	$this->db->where('usertype !=', 'admin');
	   	$this->db->where('is_ok', '0');
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function getDeclined() {
		$this->db->select('id, username, firstname, surname, created, email, city');
	   	$this->db->from('user');
		$this->db->join('payment', 'id=payment_user', 'left');
	   	$this->db->where('usertype !=', 'admin');
	   	$this->db->where('is_ok', '3');
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function getUser() {
   		return $this->db->select('id, username, firstname, surname, created, email, city')
			->from('user')
			->join('payment', 'id=payment_user', 'left')
			->where('usertype !=', 'admin')
			->where('enable', 1)
			->where('is_ok', '1')
			->get()->result();
	}
	
	public function getDetail($ID) {
   		$this->db->select();
		$query = $this->db->get_where('user', array('id' => $ID));
		return min(array_values($query->result_array()));	
	}
}

