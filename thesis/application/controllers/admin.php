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
		$data['declined'] 	 = $this->user->getDeclined();
		$data['memberList']  = json_decode(json_encode($this->user->getUser()), true);
				
		$this->load->adminTemplate('admin', $data);
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
	
	public function getByLocation() {
		$res = $this->user->getUser();
		echo '<pre>';
		print_r($res);
	}

	public function newMessage() {
		$res = $this->getMessage();
		
		echo json_encode(array('count' => count($res),'row'=>$res));
		return true;
	}
	
	
	public function accept($id) {
		
		$this->db->where('payment_user', $id);
		$this->db->update('payment', array('is_ok'=>1));
		
   		redirect('admin#users', 'refresh');
	}
	
	public function MarkAsRead($id) {
		
		$this->db->where('ID', $id);
		$this->db->update('message', array('is_mark'=>1));
		
   		redirect('admin/#message', 'refresh');
	}
	
	public function remove($ID) {
		$res = $this->db->where('ID', $ID)
			->update('user', array('enable'=>0));
		
		redirect('admin#users', 'refresh');	
	}
	
	
	public function removeNow($id) {
		
		$this->db->where('payment_user', $id);
		$this->db->update('payment', array('is_ok'=>4));
		
   		redirect('admin#users', 'refresh');
	}
	
	public function declined($id) {
		
		$this->db->where('payment_user', $id);
		$this->db->update('payment', array('is_ok'=>3));
		
   		redirect('admin#users', 'refresh');
	}
	
	public function logout() {
		$res = $this->session->userdata('logged_in');
		
		$this->db->where('id', $res['id']);
		$this->db->update('user', array('online'=>0));
			
   		$this->session->unset_userdata('logged_in');
		
   		redirect('admin', 'refresh');
 	}
	
}
