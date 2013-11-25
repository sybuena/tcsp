<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends MY_Controller {
	
    protected $outputData;		
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
	
	public function index(){
		$this->load->model('user');
			
		//Load the session library
		$this->load->library('session');	
		
		// Redirect if not logged
		$sessionUserID = $this->session->userdata('front_logged_in');
		if(!$sessionUserID) { 
		//	redirect('/');
		}
		
		//Get all users
		$this->outputData['listOfUsers']	= $this->user->getAdminChat();
		$this->outputData['message'] = count($this->getMessage());
		$this->outputData['new'] = count($this->user->getNewRegister());
		$this->outputData['session_data'] = $this->session->all_userdata();
		$this->outputData['login'] 	= $this->session->userdata('logged_in');
		//echo '<pre>'; print_r($this->outputData); echo '</pre>';
		$this->load->adminTemplate('admin', $this->outputData);
	
		
	}
	
	
	
	
	public function newRegister() {
		$res = $this->user->getNewRegister();
		
		echo json_encode(array('count' => count($res),'row'=>$res));
		return true;
	}

	public function getMessage() {
		$this->db->select();
	   	$this->db->from('message');
	   	$this->db->where('is_mark', 0);
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	
	
	public function logout() {
		$res = $this->session->userdata('logged_in');
		
		$this->db->where('id', $res['id']);
		$this->db->update('user', array('online'=>0));
			
   		$this->session->unset_userdata('logged_in');
		
   		redirect('admin', 'refresh');
 	}
	
	public function accept($id) {
		
		$this->db->where('payment_user', $id);
		$this->db->update('payment', array('is_ok'=>1));
		
   		redirect('admin/users', 'refresh');
	}
	
	public function MarkAsRead($id) {
		
		$this->db->where('ID', $id);
		$this->db->update('message', array('is_mark'=>1));
		
   		redirect('admin/message', 'refresh');
	}
	public function declined($id) {
		
		$this->db->where('payment_user', $id);
		$this->db->update('payment', array('is_ok'=>3));
		
   		redirect('admin/users', 'refresh');
	}
	
	public function removeNow($id) {
		
		$this->db->where('payment_user', $id);
		$this->db->update('payment', array('is_ok'=>4));
		
   		redirect('admin/users', 'refresh');
	}
	
	
	public function users($action ='list', $ID = 0) {
		//switch for page action
		switch($action) {
			//for user detail view
			case 'detail' : 
				return $this->detail($ID);
				
				break;
			//for user remove action
			case 'remove' :
				return $this->remove($ID);
				
				break;
			//for user edit action	
			case 'edit' :
				return $this->edit($ID);
				
				break;
			//for user edit action	
			case 'editUser' :
				return $this->editUser($ID);
				
				break;	
			//set view user list as default
			default :
				$new = $this->user->getNewRegister();
				//get user member list
				$this->outputData['row'] = json_decode(json_encode($this->user->getUser()), true);
				$this->outputData['new'] = count($new);
				$this->outputData['unpaid'] = $new;
				$this->outputData['declined'] = $this->user->getDeclined();
				
				$this->load->adminTemplate('admin/users', $this->outputData);
				
				break;	
		}
	}
	
	public function editUser($ID) {
		$data = array(
			'firstname'		=> $this->input->post('firstname'),
			'surname'		=> $this->input->post('surname'),
			'email'			=> $this->input->post('email'),
			'username'		=> $this->input->post('username'),
			'enable'		=> ($this->input->post('enable')) ? 1 : 0,
			'city'			=> $this->input->post('city'),
			'address'		=> $this->input->post('address'),
			'note'			=> $this->input->post('note'),
		);
		
		$this->db->where('ID', $ID);
		$this->db->update('user', $data);
		 
   		redirect('admin/users/edit/'.$ID, 'refresh');
	
	}
	
	public function edit($ID) {
		$this->outputData['row'] = json_decode(json_encode($this->user->getDetail($ID)), true);
		$this->outputData['new'] = count($this->user->getNewRegister());
				
		//echo '<pre>';	print_r($data['row']); exit;
		$this->load->adminTemplate('admin/user_detail', $this->outputData);
		
	}
	
	public function remove($ID) {
		$res = $this->db->where('ID', $ID)
			->update('user', array('enable'=>0));
		print_r($res);
		redirect('/admin/users', 'refresh');	
	}
	
	public function user($id = 0) {
		if($id == 0) {
			$this->load->template('admin/user');
		} else {
			$this->load->template('admin/user_detail');
		
		}
	}
	
	public function message() {
		
		$this->outputData['row'] = $this->getMessage();
		
		$this->load->adminTemplate('admin/message', $this->outputData);
	}
	
	public function activity() {
		
		$this->load->template('admin/activity');
	}
	
	public function signupAdmin() {
		//This method will have the credentials validation
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('email', 'Username', 'trim|required|email|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database2');
		$username = $this->input->post('username');
		
		if($this->form_validation->run() == FALSE) {
		 //Field validation failed.  User redirected to login page
		 $this->load->loginTemplate('admin/sign_up');
		} else {
		 //Go to private area
		 redirect('admin', 'refresh');
		}
		
	}
	
	public function sign_up() {
		$this->load->helper(array('form'));
   		$this->load->loginTemplate('admin/sign_up');
		
	}
	
	public function dash() {
		$this->load->view('admin/dash');
	
	}
	public function charts() {
		$this->load->view('admin/charts');
	
	}
	public function calendar() {
		$this->load->view('admin/calendar');
	
	}
	public function form() {
		$this->load->view('admin/form');
	
	}
	public function general() {
		$this->load->view('admin/general');
	
	}
	public function tables() {
		$this->load->view('admin/tables');
	
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */