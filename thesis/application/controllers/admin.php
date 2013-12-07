<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends MY_Controller {
		
	public $loggedInUser;
	
	public function __construct() {
		
		parent::__construct();
		
		//if there is login user, this will continue to index 
		if($this->session->userdata('logged_in')) {
			
		
		//If login user, redirect to login page	
		} else {
			redirect('verifyLogin/login', 'refresh');
		}
	}
	
	public function index($data = array()){
		//load all
		$this->load->model('user');
		$this->load->library('session');	
		
		//prepare variables
		$data['listOfUsers'] = $this->user->getAdminChat();
		$data['message'] 	 = count($this->getMessage());
		$data['messageRow']  = $this->getMessage();
		$data['newRegister'] = $this->user->getNewRegister();
		$data['trial'] 		= $this->user->getTrial();
		$data['declined'] 	 = $this->user->getDeclined();
		$data['memberList']  = json_decode(json_encode($this->user->getUser()), true);
		$data['location'] 	 = $this->getByLocation($data['memberList']);
		$data['date'] 	 = $this->getByDate($data['memberList']);
		$data['adminList'] 	 = $this->getAdmin();
		
		$this->load->adminTemplate('admin', $data);
	}
	
	public function getDocuments($id) {
		$res = $this->user->getDocu($id);
		echo json_encode($res);
	}
	
	public function approve($action, $id) {
		//if accepted
		if($action) { 
			$this->_approvedUser($id);
		//else declined	
		} else {
			$this->_declinedUser($id);
		}
	}
	public function getAdmin() {
		
		return $this->db->select()
			->from('user')
			->where('usertype', 'admin')
			->or_where('usertype', 'super-admin')
			->get()->result_array();
	}
	
	public function getMessage() {
		
		return $this->db->select()
			->from('message')
			->where('is_mark', 0)
			->get()->result_array();
	}
	
	public function newRegister() {
		$res = $this->user->getNewRegister();
		
		echo json_encode(array('count' => count($res),'row'=>$res));
		return true;
	}
	
	public function getByLocation($user = array()) {
		if(!empty($user)) {
			$res = $user;
		} else {
			$res = json_decode(json_encode($this->user->getUser()), true);
		}
		$city = array();
		foreach($res as $v) {
			if(isset($v['city'])) {
				$city[] = strtolower($v['city']);
			}
		}
		
		$location = array_count_values($city);
		
		return $location;
	}
	
	public function getByDate($user = array()) {
		if(!empty($user)) {
			$res = $user;
		} else {
			$res = json_decode(json_encode($this->user->getUser()), true);
		}
		
		$raw = array();
		foreach($res as $v) {
			if(isset($v['created'])) {
				$raw[] = date('F',strtotime($v['created']));
			}
		}
		
		$date = array_count_values($raw);
		
		return $date;
	}
	
	public function newMessage() {
		$res = $this->getMessage();
		
		echo json_encode(array('count' => count($res),'row'=>$res));
		return true;
	}
	
	public function accept($id) {
		//send notification
		$this->_sendNotification($id, 'approved');
		
		$this->db->where('payment_user', $id);
		$this->db->update('payment', array('payment_plan'=>'trial'));
		
		
   		redirect('admin#users', 'refresh');
	}
	
	public function MarkAsRead($id) {
		
		$this->db->where('ID', $id);
		$this->db->update('message', array('is_mark'=>1));
		
   		redirect('admin/#message', 'refresh');
	}
	
	public function remove($ID) {
		$this->_sendNotification($id, 'decline');
		$res = $this->db->where('ID', $id)
			->update('user', array('enable'=>0));
		
		redirect('admin#users', 'refresh');	
	}
	
	
	public function removeNow($id) {
		
		$this->_sendNotification($id, 'decline');
		
		$this->db->where('payment_user', $id);
		$this->db->update('payment', array('is_ok'=>4));
		
   		redirect('admin#users', 'refresh');
	}
	
	public function declined($id) {
		//send notification
		$this->_sendNotification($id, 'decline');
		
		$this->db->where('id', $id);
		$this->db->update('user', array('enable'=>0));
		
		$this->db->where('payment_user', $id);
		$this->db->update('payment', array('is_ok'=>0));
		
   		redirect('admin#archive', 'refresh');
	}
	
	public function logout() {
		$res = $this->session->userdata('logged_in');
		
		$this->db->where('id', $res['id']);
		$this->db->update('user', array('online'=>0));
			
   		$this->session->unset_userdata('logged_in');
		
   		redirect('admin', 'refresh');
 	}
	
	protected function _approvedUser($id) {
		//send notification
		$this->_sendNotification($id, 'activate');
		
		$data = array(
			'payment_created' 	=> date('Y-m-d'),
			'payment_due'		=> date('Y-m-d', strtotime('+1 year')),
			'payment_plan'		=> 'premium',
			'is_ok'				=> '1'
		);
			
		$res = $this->db->where('payment_user', $id)
			->update('payment', $data);
		
		//TODO: ADD SENDING EMAIL
			
		redirect('/admin#approve', 'refresh');	
	}
	
	protected function _declinedUser($id) {
		//send notification
		$this->_sendNotification($id, 'decline');
		
		$res = $this->db->where('ID', $id)
			->update('user', array('enable'=>0));
		
		//TODO: ADD SENDING EMAIL
			
		redirect('/admin#archve', 'refresh');	
	}
	
	protected function _sendNotification($id, $notification) {
		$user = $this->session->userdata('logged_in');
		$toUSer = $this->db->select()
			->from('user')
			->where('id', $id)
			->get()->row_array();
			
		$data['content'] = $this->notification($notification);
		$data['subject'] = 'TCSP Registration';
		$data['from_email'] = $user['email'];
		$data['from_name'] = $user['firstname'];
		$data['to_email'] = $toUSer['email'];
		$this->send($data);
		
	}
	
}
