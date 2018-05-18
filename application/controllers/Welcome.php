<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->data['hasil'] = $this->model_pelanggan->getUser('pelanggan');
		$this->load->view('welcome_message', $this->data);
	}
	public function form_input(){

		$this->load->view('form-input');
	}
	public function insert(){
		$kodepel = $_POST['kode'];
		$namapel = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$notelp = $_POST['telepon'];
		$data = array ('kd_pelanggan'=> $kodepel, 'nm_pelanggan' => $namapel, 'al_pelanggan' => $alamat, 'no_tlp' => $notelp);
		$tambah = $this->model_pelanggan->tambahData('pelanggan', $data);
		if ($tambah > 0){
			redirect('Welcome/index');
		}else{
			echo 'gagal disimpan';
		}
	}
	public function delete($id){
		$hapus = $this->model_pelanggan->hapusData('pelanggan', $id);
		if($hapus > 0){
			redirect('welcome/index');
			}else{
			echo 'gagal disimpan';
		}
	}
	public function form_Edit($id){
		$this->data['dataEdit'] = $this->model_pelanggan->dataEdit('pelanggan', $id);
		$this->load->view('form-edit', $this->data);
	}

	public function update($id){
		$kodepel = $_POST['kode'];
		$namapel = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$notelp = $_POST['telepon'];
		$data = array ('kd_pelanggan'=> $kodepel, 'nm_pelanggan' => $namapel, 'al_pelanggan' => $alamat, 'no_tlp' => $notelp);
		$edit = $this->model_pelanggan->editData('pelanggan', $data, $id);
		if ($edit > 0){
			redirect('Welcome/index');
		}else{
			echo 'gagal disimpan';
		}
	}
}
