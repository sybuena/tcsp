<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('user','',TRUE);
	}
	
	function index() {
		//This method will have the credentials validation
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
		$username = $this->input->post('username');
		
		if($this->form_validation->run() == FALSE) {
		 //Field validation failed.  User redirected to login page
		 $this->load->view('admin/login');
		} else {
		 //Go to private area
		 redirect('home', 'refresh');
		}
		
	}
	
	public function signup() {
		$this->checkField();
		$query 		= $this->db->get_where('user', array('username' => $_POST['data']['username']));
		$username 	= $query->result_array();
		//convert password to md5
		//$_POST['data']['password'] = md5($_POST['data']['password']);
		
		if(!empty($username)) {
			echo json_encode(array('result'=>0,'error'=>'username already taken'));
			exit;
		}
		 
		$res = $this->db->insert('user', $_POST['data']);
		
		if($res) {
			$id = $this->db->insert_id();	
			
			$_POST['subs']['payment_user'] 		= $id;
			
			$plan = $this->db->insert('payment', $_POST['subs']);
			
			echo json_encode(array('result'=>1));
			exit;
		}
		echo json_encode(array('result'=>0));
		exit;
	}
	
	public function signup2() {
		$this->checkField();
		$query 		= $this->db->get_where('user', array('username' => $_POST['data']['username']));
		$username 	= $query->result_array();
	
		if(!empty($username)) {
			echo json_encode(array('result'=>0,'error'=>'username already taken'));
			exit;
		}
		//make user as admin
		$_POST['data']['usertype'] = 'admin';
		$res = $this->db->insert('user', $_POST['data']);
		
		if($res) {
		
			echo json_encode(array('result'=>1));
			exit;
		}
		echo json_encode(array('result'=>0));
		exit;
	}
	
	public function login() {
			
		$this->load->helper(array('form'));
   		$this->load->adminTemplate('admin/login');
	}
	
	function frontLogin() {
		$this->checkField();
   		$result = $this->user->frontLogin($_POST['username'], $_POST['password']);
		
		//if failed
		if(!$result) {
			echo json_encode(array('result'=>'0'));
			exit;
		} else {
			   
		   	$this->session->set_userdata('front_logged_in', $result[0]);
		 	
			echo json_encode(array('result'=>'1'));
			exit;
		
		}
	}
			
	function check_database($password) {
		//Field validation succeeded.  Validate against database
		$username = $this->input->post('username');
		
		//query the database
		$result = $this->user->login($username, $password);
		
		if($result) {
			
			$this->session->set_userdata('logged_in', $result);
		 	
			
		 	return TRUE;
		} else {
			$this->form_validation->set_message('check_database', 'Invalid username or password');
		 return false;
		
		}
 	}
	
}
?>