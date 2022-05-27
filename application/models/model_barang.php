<?php

class Model_Barang extends CI_Model 
{
  
  public function get_all()
  {
    return $this->db->get('tb_barang');
  }

  public function detail_brg($id)
  {
    $result = $this->db->where('id_brg', $id)->get('tb_barang');
    if ($result->num_rows() > 0) {
      return $result->result();
    }else{
      return false;
    }
  }

  public function tambah_data($data, $table)
  {
    $this->db->insert($table, $data);
  }

  public function edit($where, $table)
  {
    return $this->db->get_where($table, $where);
  }

  public function update($where, $data, $table)
  {
    $this->db->where($where);
    $this->db->update($table, $data);
  }

  public function destroy($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }

  public function find($id)
  {
    $result = $this->db->where('id_brg', $id)->limit(1)->get('tb_barang');

    if ($result->num_rows() > 0) {
      return $result->row();
    }else {
      return array();
    }
  }

}
