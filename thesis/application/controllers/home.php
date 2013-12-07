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
		
		
		$this->outputData['countryList'] = $this->_countryList();
		$this->outputData['documents'] = $this->_getScannedDocu($sessionUserID['id']);
		
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
		
		$this->load->frontTemplate('home',$this->outputData);
	}
	
	public function upload() { 
		//get login user 
		$login = $this->session->userdata('front_logged_in');
		//use user id for upload flag
		$path = 'assets/'.$login['id'].'/';
		//if user folder is no existing
		if(!is_dir($path)) {
			//create one
    		mkdir($path);
		}
		//now move the file to the user folder
		$targetPath = $path.basename($_FILES['fileData']['name'] );
		move_uploaded_file( $_FILES['fileData']['tmp_name'], $targetPath);
		//after moving the file we will now save the path to the database
		$dataset = array(
			'image_parent' 	=> $login['id'],
			'image_name'	=> $_FILES['fileData']['name'],
			'image'			=> $targetPath
		);
		$res = $this->db->insert('image', $dataset);
		redirect('/#Profile');
		//echo '<img src="'.$content.'">';
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
	
	protected function _getScannedDocu($id) {
		return $this->db->select()
			->from('image')
			->where('image_parent', $id)
			->get()->result_array();
	}
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */