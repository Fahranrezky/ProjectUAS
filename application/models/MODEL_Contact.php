<?php
class MODEL_Contact extends CI_Model {

	function GetAllCon(){
		 $this->db->select('*')->from('tbl_contacts');
		 $rs=$this->db->get();
		 return $rs->result();
	}

	function GetDataByID($id){
		 $this->db->select('*')->from('tbl_contacts')->where('Name',$id);
		 $rs=$this->db->get();
		 return $rs->result();
	}

	function DeleteData($id){
		$this->db->where('Name',$id);
		$this->db->delete('tbl_contacts');
		redirect('CTR_Contact/DashboardContact');
	}

	function InsertData(){
		$data = array(
			'Name' 				=> $this->input->post('name') ,
			'Email' 		 	=> $this->input->post('email') ,
			'Message' 			=> $this->input->post('message') ,
			'Subject' 			=> $this->input->post('subject'),
			
			 );
		$this->db->insert('tbl_contacts', $data);
		redirect('CTR_Contact/index');
	}
	function InsertContact(){
		$data = array(
			'Name' 				=> $this->input->post('name') ,
			'Email' 		 	=> $this->input->post('email') ,
			'Message' 			=> $this->input->post('message') ,
			'Subject' 			=> $this->input->post('subject'),
			
			 );
		$this->db->insert('tbl_contacts', $data);
		redirect('CTR_Contact/DashboardContact');
	}
}