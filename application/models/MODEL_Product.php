<?php
class MODEL_Product extends CI_Model {

	function GetAllProd(){
		 $this->db->select('*')->from('products');
		 $rs=$this->db->get();
		 return $rs->result();
	}

	function GetDataByProd($id){
		 $this->db->select('*')->from('products')->where('Product_ID',$id);
		 $rs=$this->db->get();
		 return $rs->result();
	}

	function DeleteProduct($id){
		$this->db->where('Product_ID',$id);
		$this->db->delete('products');
		redirect('CTR_Product/DashboardProduct');
	}

	function InsertData(){
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
			$Product_ID = $this->input->post('Product_ID', TRUE);
			$Name = $this->input->post('Name', TRUE);
			$Description = $this->input->post('Description', TRUE);
			$Price = $this->input->post('Price', TRUE);


			$data = array(
			'Product_ID' 	=> $Product_ID,
			'Name' 			=> $Name,
			'Description' 	=> $Description,
			'Product_ID' 	=> $Product_ID,
			'Photo'			=> $Photo,
			);
			$this->db->insert('products', $data);
			redirect('CTR_Product/DashboardProduct');
		}	
	}

	function UpdateData(){

			$id = $this->input->post('id_buku');	
			$config['upload_path']          = './gambar/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 10000;
			$config['max_width']            = 10000;
			$config['max_height']           = 10000;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('userfile'))
			{
					
						$judul_buku = $this->input->post('judul_buku', TRUE);
						$jenis_buku = $this->input->post('jenis_buku', TRUE);
						$tahun_terbit = $this->input->post('tahun_terbit', TRUE); 
						$stock_buku = $this->input->post('stock_buku', TRUE);

						$data = array(
							'judul_buku' 	=> $judul_buku,
							'jenis_buku' 	=> $jenis_buku,
							'tahun_terbit' 	=> $tahun_terbit,
							'stock_buku' 	=> $stock_buku,
							);
							$this->db->where('id_buku', $id);
							$this->db->update('tb_buku', $data);
							redirect('CTR_Buku/index');
			}
			else
			{
						$gambar = $this->upload->data();
						$gambar = $gambar['file_name'];
		
						$judul_buku = $this->input->post('judul_buku', TRUE);
						$jenis_buku = $this->input->post('jenis_buku', TRUE);
						$tahun_terbit = $this->input->post('tahun_terbit', TRUE); 
						$stock_buku = $this->input->post('stock_buku', TRUE);

						$data = array(
							'judul_buku' 	=> $judul_buku,
							'jenis_buku' 	=> $jenis_buku,
							'tahun_terbit' 	=> $tahun_terbit,
							'stock_buku'	=> $stock_buku,
							'gambar' 		=> $gambar,
						);
						$this->db->where('id_buku', $id);
						$this->db->update('tb_buku', $data);
						redirect('CTR_Buku/index');

					}

	}

}