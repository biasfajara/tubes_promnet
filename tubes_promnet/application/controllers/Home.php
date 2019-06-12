<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();		
		$this->load->model('mMobil');
	}

	public function home(){
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}

	public function cari(){
		$data['jenis_layanan'] = $this->input->post('jenis_layanan');
		$data['lama_peminjaman'] = $this->input->post('lama_peminjaman');
		$data['tanggal_peminjaman'] = $this->input->post('tanggal_peminjaman');
		$data['jam_peminjaman'] = $this->input->post('jam_peminjaman');

		$this->mMobil->getMobilBy($data);
	}
}
