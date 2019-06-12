<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function index()
	{
		$this->load->model('M_Mahasiswa');
		$data['mahasiswa'] = $this->M_Mahasiswa->getAll()->result();
		//$this->load->view('daftar_mahasiswa', $data);
		$this->load->view('home');
	}

	public function add(){
		$data['nim'] = $this->input->post('nim');
		$data['nama'] = $this->input->post('nama');
		$data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
		$data['program_studi'] = $this->input->post('program_studi');
		$data['alamat'] = $this->input->post('alamat');

		$this->load->model('M_Mahasiswa');
		$this->M_Mahasiswa->addMahasiswa($data);
		redirect(site_url("Mahasiswa/index"));
	}
	public function v_Add(){
		$this->load->view('tambah_mahasiswa');
	}
}
