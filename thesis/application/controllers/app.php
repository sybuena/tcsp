<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends MY_Controller {
	
	public function index(){
		
	}
	
	public function edit($id) {
		$data = $this->getBlocks($id);
   		$data['html'] = $data[0]['data'];
   		$data['ID'] = $id;
		$this->load->loginTemplate('admin/app', $data);
	
	}
	
	public function update() {
		$this->checkField();
		$this->db->where('id', $_POST['id']);
		$res = $this->db->update('app_copy', array('data'=>$_POST['val']));
		echo json_encode(array('result'=>$res));
		exit;
	}
	
	public function getBlocks($id) {
		$query = $this->db->get_where('app_copy', array('ID' => $id));
		return $query->result_array();
	
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */