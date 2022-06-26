<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CTR_Product extends CI_Controller {

	function __construct(){
    parent::__construct();

    $this->load->helper('url','form');
    // Model BukuHeader
    $this->load->model('MODEL_Product','data');
  }

		public function index()
		{
		$data ['daftar_prod'] = $this->data->GetAllProd();
		$this->load->view('View_Product',$data);
		}

		public function DashboardProduct()
		{
		$data ['daftar_prod'] = $this->data->GetAllProd();
		$this->load->view('View_IndexProduct',$data);
		}

		public function HapusProduct()
		{

		$id = $this->uri->segment(3);
		$this->data->DeleteProduct($id);

		}

		public function SimpanData()
		{

		$this->data->InsertData();

		}

		public function EditData()
		{

		$this->data->UpdateData();

		}
		public function AddProduct()
		{
		$data ['daftar_prod'] = $this->data->GetAllProd();
		$this->load->view('View_IndexProductAdd',$data);
		}
		public function GetData()
		{

		$id = $this->uri->segment(3);
		$data ['daftar_prod'] = $this->data->GetDataByProd($id);
		$this->load->view('View_IndexProductEdit',$data);


		}

}