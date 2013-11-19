<?php 
 
class Chat extends CI_Controller {

	//Global variable  
    public $outputData;		//Holds the output data for each view
	public $loggedInUser;

	public function index()
    {
		//Load the users model 
		$this->load->model('user');
		
		//Load the session library
		$this->load->library('session');	
		
		// Redirect if not logged
		$sessionUserID = $this->session->userdata('front_logged_in');
		if(!$sessionUserID) { 
			redirect('/');
		}
		
		//Get all users
		$this->outputData['listOfUsers']	= $this->user->getAdminChat();
		
		$userdata  = $this->session->all_userdata(); 
		$this->outputData['session_dataa'] = $userdata;
					
						
		 $this->load->view('chat/userList',$this->outputData);
    }
	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

