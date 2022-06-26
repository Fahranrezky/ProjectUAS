<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CTR_Gallery extends CI_Controller {

	function __construct(){
    parent::__construct();

    $this->load->helper('url','form');
    // Model BukuHeader
    $this->load->model('MODEL_Info','data');
  }

		public function index()
		{

		$data ['daftar_gal'] = $this->data->GetAllGallery();
		$this->load->view('View_Gallery',$data);

		}

		public function DashboardGallery()
		{
		$data ['daftar_adm'] = $this->data->GetAllAdmin();
		$data ['daftar_gal'] = $this->data->GetAllGallery();
		$this->load->view('View_IndexGallery',$data);
		}

		public function HapusGallery()
		{

		$id = $this->uri->segment(3);
		$this->data->DeleteDataGallery($id);

		}

		public function SimpanGallery()
		{

		$this->data->InsertGallery();

		}

		public function EditGallery()
		{

		$this->data->UpdateGallery();

		}

		public function AddGallery()
		{
		$data ['daftar_gal'] = $this->data->GetAllGallery();
		$this->load->view('View_IndexGalleryAdd',$data);
		}
		public function GetData()
		{

		$id = $this->uri->segment(3);
		$data ['daftar_gal'] = $this->data->GetDataByGallery($id);
		$this->load->view('View_IndexGalleryEdit',$data);
		}

}