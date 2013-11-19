<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	
    public $outputData;		//Holds the output data for each view
	public $loggedInUser;

	public function index(){
	
		//$this->lang->lang();
		$this->load->model('user');
		
		//Load the session library
		$this->load->library('session');	
		
		// Redirect if not logged
		$sessionUserID = $this->session->userdata('front_logged_in');
		if($sessionUserID) { 
		//	redirect('/');
		
		
		//Get all users
		$this->outputData['listOfUsers']	= $this->user->getAdminChat();
		
		$userdata  = $this->session->all_userdata(); 
		$this->outputData['session_dataa'] = $userdata;
		}
		
		$this->outputData['admin'] = 0;
		if(isset($sessionUserID) && !empty($sessionUserID)) {
			if(isset($sessionUserID['usertype']) && $sessionUserID['usertype'] == 'admin') {
				$this->outputData['admin'] = 1;	
			}
		}
		
		
		$this->outputData['header_1'] = $this->getBlocks('header_1');
		$this->outputData['header_2'] = $this->getBlocks('header_2');
		
		$this->outputData['slide_1'] = $this->getBlocks('slide_1');
		$this->outputData['slide_2'] = $this->getBlocks('slide_2');
		
		$this->outputData['block_1'] = $this->getBlocks('block_1');
		$this->outputData['block_2'] = $this->getBlocks('block_2');
		$this->outputData['block_3'] = $this->getBlocks('block_3');
		
		//load lang here
		$this->outputData['lang'] = 'english';
		
		if($this->input->get('language')) {
			$this->outputData['lang'] = $this->input->get('language');
			//still questioning if it is really needed to put it in session
			$this->session->set_userdata('lang', $this->outputData['lang']);
			$this->lang->load('front', $this->outputData['lang']); 
		} 
		//default lang is english
		
		$this->lang->load('front', $this->outputData['lang']);
		//exit;
		$this->load->frontTemplate('home',$this->outputData);
	}
	
	public function getBlocks($key) {
		$query = $this->db->get_where('app_copy', array('key' => $key));
		return $query->result_array();
	
	}
	
	public function sendMessage() {
		
		$this->checkField();
		$res = $this->db->insert('message', $_POST['data']);
		echo json_encode(array('result'=>$res));
		exit;
	}
	
	public function logout() {
		
		$this->session->unset_userdata('front_logged_in');
		
		redirect('/', 'refresh');
 	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */