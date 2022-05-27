<?php

class Kategori extends CI_Controller 
{
  public function hotspot()
  {
    $data['hotspot'] = $this->model_kategori->data_hotspot()->result();
    $this->load->view('templates/helper');
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('hotspot', $data);
    $this->load->view('templates/footer');
  }

  public function pakaian_pria()
  {
    $data['pakaian_pria'] = $this->model_kategori->data_pakaian_pria()->result();
    $this->load->view('templates/helper');
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('pakaian_pria', $data);
    $this->load->view('templates/footer');
  }

  public function pakaian_wanita()
  {
    $data['pakaian_wanita'] = $this->model_kategori->data_pakaian_wanita()->result();
    $this->load->view('templates/helper');
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('pakaian_wanita', $data);
    $this->load->view('templates/footer');
  }

  public function pakaian_anak()
  {
    $data['pakaian_anak'] = $this->model_kategori->data_pakaian_anak()->result();
    $this->load->view('templates/helper');
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('pakaian_anak', $data);
    $this->load->view('templates/footer');
  }

  public function alat_kecantikan()
  {
    $data['alat_kecantikan'] = $this->model_kategori->data_alat_kecantikan()->result();
    $this->load->view('templates/helper');
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('alat_kecantikan', $data);
    $this->load->view('templates/footer');
  }
}
