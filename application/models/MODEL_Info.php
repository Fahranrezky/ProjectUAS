<?php
class MODEL_Info extends CI_Model {
public function ValidasiLogin($Username,$Password)
	{
		$this->db->where('Username',$Username);
		$this->db->where('Password',$Password);

		$row = $this->db->get('tbl_admin');
		$res = $row->result();

		if($row->num_rows()> 0)
			return TRUE;
		else
			return FALSE;
	}

	function GetAllData(){
		 $this->db->select('*')->from('tbl_info');
		 $rs=$this->db->get();
		 return $rs->result();
	}

	function GetAllGallery(){
		 $this->db->select('*')->from('tbl_gallery');
		 $this->db->order_by('Photo_ID','DECS');
		 $rs=$this->db->get();
		 return $rs->result();
	}

	function GetAllAdmin(){
		 $this->db->select('*')->from('tbl_admin');
		 $rs=$this->db->get();
		 return $rs->result();
	}

	function GetDataByInfo($id){
		 $this->db->select('*')->from('tbl_info')->where('Information_ID',$id);
		 $rs=$this->db->get();
		 return $rs->result();
	}

	function GetDataByID($id){
		 $this->db->select('*')->from('tbl_admin')->where('Username',$id);
		 $rs=$this->db->get();
		 return $rs->result();
	}

	function GetDataByGallery($id){
		 $this->db->select('*')->from('tbl_gallery')->where('Photo_ID',$id);
		 $rs=$this->db->get();
		 return $rs->result();
	}

	function DeleteData($id){
		$this->db->where('Username',$id);
		$this->db->delete('tbl_admin');
		redirect('CTR_Index/DashboardAdmin');
	}
	function DeleteDataInfo($id){
		$this->db->where('Information_ID',$id);
		$this->db->delete('tbl_info');
		redirect('CTR_Index/DashboardInfo');
	}
	function DeleteDataGallery($id){
		$this->db->where('Photo_ID',$id);
		$this->db->delete('tbl_gallery');
		redirect('CTR_Gallery/DashboardGallery');
	}

	function InsertData(){
	  
		$data = array(
			'Username' 			=> $this->input->post('Username') ,
			'Password' 		 	=> $this->input->post('Password') ,
			'Full_Name' 		=> $this->input->post('Full_Name') ,
			
			 );
		$this->db->insert('tbl_admin', $data);
		redirect('CTR_Index/DashboardAdmin');
	}
	function InsertGallery(){

			$config['upload_path']          = './gambar/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 10000;
			$config['max_width']            = 10000;
			$config['max_height']           = 10000;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('userfile'))
			{
				echo "Gagal Tambah";
			}
			else
			{
						$Photo = $this->upload->data();
						$Photo = $Photo['file_name'];
						$Photo_ID = $this->input->post('Photo_ID', TRUE);

						$data = array(
						'Photo_ID' 	=> $Photo_ID,
						'Photo'		=> $Photo,
						);
						$this->db->insert('tbl_gallery', $data);
						redirect('CTR_Gallery/DashboardGallery');
			}	

	}

	function InsertInfo(){

			$config['upload_path']          = './gambar/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 10000000;
			$config['max_width']            = 10000000;
			$config['max_height']           = 10000000;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('userfile'))
			{
				echo "Gagal Tambah";
			}
			else
			{
						$Photo = $this->upload->data();
						$Photo = $Photo['file_name'];
						$Information_ID = $this->input->post('Information_ID', TRUE);
						$Title = $this->input->post('Title', TRUE);
						$Content = $this->input->post('Content', TRUE);

						$data = array(
						'Information_ID' 	=> $Information_ID,
						'Title' 			=> $Title,
						'Content' 			=> $Content,
						'Photo'				=> $Photo,
						);
						$this->db->insert('tbl_info', $data);
						redirect('CTR_Index/DashboardInfo');
			}	

	}

	function UpdateData(){

	$id = $this->input->post('Username');
		$data = array(

			'Password' 		 	=> $this->input->post('Password') ,
			'Full_Name' 		=> $this->input->post('Full_Name') 
			
			 );
		$this->db->where('Username', $id);
		$this->db->update('tbl_admin',$data);
		redirect('CTR_Index/DashboardAdmin');
	}

	function UpdateGallery(){

	$image = addslashes(file_get_contents($_FILES['userfile']['tmp_name']));
    $image_name = addslashes($_FILES['userfile']['name']);
    $image_size = getimagesize($_FILES['userfile']['tmp_name']);

    move_uploaded_file($_FILES["userfile"]["tmp_name"], "gambar/" . $_FILES["userfile"]["name"]);
    $photo = "gambar/" . $_FILES["userfile"]["name"];
    $id = $this->input->post('Photo_ID');
    $data = array(
    	'Photo' => $Photo
    );

    $this->db->where('Photo_ID',$id);
    $this->db->delete('tbl_gallery');
    redirect('CTR_Gallery/DashboardGallery');
}
}
