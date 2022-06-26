<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CTR_Index extends CI_Controller {

	function __construct(){
    parent::__construct();

    $this->load->helper('url','form');
    // Model BukuHeader
    $this->load->model('MODEL_Info','data');
  }

		public function index()
		{
		$this->load->view('View_Login');
		}

		public function DashboardAdmin(){
		$data ['daftar_info'] = $this->data->GetAllData();
		$data ['daftar_gal'] = $this->data->GetAllGallery();
		$data ['daftar_adm'] = $this->data->GetAllAdmin();
		$this->load->view('View_IndexAdmin',$data);
		}

		public function DashboardInfo(){
		$data ['daftar_info'] = $this->data->GetAllData();
		$this->load->view('View_IndexInfo',$data);
		}

		public function Dashboard(){
		$data ['daftar_info'] = $this->data->GetAllData();
		$data ['daftar_gal'] = $this->data->GetAllGallery();
		$this->load->view('View_Index',$data);
		}		

		public function validasi(){
		$Username = $this->input->post('Username');
		$Password = $this->input->post('Password');
		$status   = $this->data->ValidasiLogin($Username,$Password);
		if($status !=true){
			redirect('CTR_Index/index');
		}
		else{
			$my_session = array(
				'Username' => $Username,
				'Password' => $Password
			);
			$this->session->set_userdata($my_session);
			redirect('CTR_Index/DashboardAdmin');
		}
		}

		public function About()
		{
		$this->load->view('View_About');
		}

		public function HapusData()
		{
		$id = $this->uri->segment(3);
		$this->data->DeleteData($id);
		}

		public function HapusInfo()
		{
		$id = $this->uri->segment(3);
		$this->data->DeleteDataInfo($id);
		}

		public function SimpanData()
		{
		$this->data->InsertData();
		}

		public function SimpanInfo()
		{
		$this->data->InsertInfo();
		}

		public function EditData()
		{
		$this->data->UpdateData();
		}

		public function AddForm()
		{
		$data ['daftar_adm'] = $this->data->GetAllAdmin();
		$this->load->view('View_IndexAdminAdd',$data);
		}

		public function AddInfo()
		{
		$data ['daftar_info'] = $this->data->GetAllData();
		$this->load->view('View_IndexInfoAdd',$data);
		}		

		public function GetData()
		{
		$id = $this->uri->segment(3);
		$data ['daftar_adm'] = $this->data->GetDataByID($id);
		$this->load->view('View_IndexAdminEdit',$data);
		}

		public function GetInfo()
		{
		$id = $this->uri->segment(3);
		$data ['daftar_info'] = $this->data->GetAllData($id);
		$this->load->view('View_IndexInfoEdit',$data);
		}

		public function Logout(){
		$this->session->sess_destroy();
		redirect('CTR_Index/Index');
		}

}