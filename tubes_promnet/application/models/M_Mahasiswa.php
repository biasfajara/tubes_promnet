<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Mahasiswa extends CI_Model {

	public function getAll(){
    $this->db->select("*");
    $this->db->from("mahasiswa");
    $hasil = $this->db->get();
    return $hasil;
  }

  public function addMahasiswa($data = array()){
    $this->db->insert('mahasiswa', $data);
  }
}
