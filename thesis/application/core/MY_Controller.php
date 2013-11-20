<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	
	public function __construct() {
		
		parent::__construct();
		
		//SET ALL LOADER HERE
		$this->load->helper('url');
		$this->load->model('user','',TRUE);
	}
	
	public function checkField() {
		//if no submitted
		if(!isset($_POST) || empty($_POST)) {
			//show error
			echo json_encode(array('result'=>0));
			exit;
		}
	}
	
	public function verify() {
		//This method will have the credentials validation
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
		
		
		if($this->form_validation->run() == FALSE) {
		 	//Field validation failed.  User redirected to login page
			$this->load->adminTemplate('admin/login');
		} else {
		 	//Go to private area
		 	redirect('admin', 'refresh');
		}
	}
	
	public function check_database($password) {
   		//Field validation succeeded.  Validate against database
   		$username = $this->input->post('username');

   		//query the database
   		$result = $this->user->login($username, $password);
		
   		if($result) {
     		$sess_array = array();
			foreach($result as $row) {
      			
				$sess_array = array(
         			'id' 		=> $row['id'],
         			'username' 	=> $row['username'],
         			'firstname' => $row['firstname'],
         			'surname' 	=> $row['surname']
       			);
				
       			$this->session->set_userdata('logged_in', $row);
     		}
			
     		return TRUE;
   		} else {
     		$this->form_validation->set_message('check_database', 'Invalid username or password');
     		return false;
   		}
 	}
	
	public function check_database2($password) {
   		//Field validation succeeded.  Validate against database
   		$username = $this->input->post('username');
   		$email = $this->input->post('email');
   		$firstname = $this->input->post('firstname');
   		$surname = $this->input->post('surname');
		$dataset = array(
			'username' => $username,
			'email' => $email,
			'firstname' => $firstname,
			'surname' => $surname,
			'password' => $password,
			'usertype' => 'admin',
		);
		
		$res = $this->db->insert('user', $dataset);
   		//query the database
   		$result = $this->user->login($username, $password);
		
   		if($result) {
     		redirect('admin', 'refresh');
   		} else {
     		$this->form_validation->set_message('check_database2', 'Invalid username or password');
     		return false;
   		}
 	}
	
		
}