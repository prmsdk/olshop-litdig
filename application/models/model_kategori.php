<?php

class Model_Kategori extends CI_Model 
{
  public function data_hotspot()
  {
    $where = array('kategori' => 'Hotspot');
    return $this->db->get_where('tb_barang', $where);
  }

  public function data_pakaian_pria()
  {
    $where = array('kategori' => 'Pakaian Pria');
    return $this->db->get_where('tb_barang', $where);
  }

  public function data_pakaian_wanita()
  {
    $where = array('kategori' => 'Pakaian Wanita');
    return $this->db->get_where('tb_barang', $where);
  }

  public function data_pakaian_anak()
  {
    $where = array('kategori' => 'Pakaian Anak');
    return $this->db->get_where('tb_barang', $where);
  }

  public function data_alat_kecantikan()
  {
    $where = array('kategori' => 'Alat Kecantikan');
    return $this->db->get_where('tb_barang', $where);
  }
}
