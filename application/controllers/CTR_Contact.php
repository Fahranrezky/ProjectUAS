<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CTR_Contact extends CI_Controller {

	function __construct(){
    parent::__construct();

    $this->load->helper('url','form');
    // Model BukuHeader
    $this->load->model('MODEL_Contact','data');
  }

		public function index()
		{
		$data ['daftar_con'] = $this->data->GetAllCon();
		$this->load->view('View_Contact',$data);
		}

		public function DashboardContact()
		{
		$data ['daftar_con'] = $this->data->GetAllCon();
		$this->load->view('View_IndexContact',$data);
		}		

		public function HapusData()
		{

		$id = $this->uri->segment(3);
		$this->data->DeleteData($id);

		}

		public function SimpanContact()
		{

		$this->data->InsertData();

		}

		public function SimpanData()
		{

		$this->data->InsertContact();

		}

		public function EditData()
		{

		$this->data->UpdateData();

		}

		public function AddForm()
		{
		$data ['daftar_con'] = $this->data->GetAllCon();
		$this->load->view('View_IndexContactAdd',$data);
		}

		public function GetData()
		{
		$id = $this->uri->segment(3);
		$data ['daftar_con'] = $this->data->GetDataByID($id);
		$this->load->view('View_IndexContentEdit',$data);
		}

}