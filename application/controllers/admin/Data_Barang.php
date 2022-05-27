<?php

class Data_Barang extends CI_Controller 
{

  public function __construct()
  {
    parent::__construct();

    if ($this->session->userdata('role_id') != '1') {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        Anda Belum Login.
      </div>');
      redirect('auth/login');
    }
  }
  
  public function index()
  {
    $data['barang'] = $this->model_barang->get_all()->result();
    $this->load->view('templates_admin/header');
    $this->load->view('templates_admin/sidebar');
    $this->load->view('admin/data_barang', $data);
    $this->load->view('templates_admin/footer');
  }

  public function tambah_data()
  {
    $nama_brg = $this->input->post('nama_brg');
    $keterangan = $this->input->post('keterangan', true);
    $kategori = $this->input->post('kategori');
    $harga = $this->input->post('harga');
    $stok = $this->input->post('stok');
    $gambar = $_FILES['gambar']['name'];

    if ($gambar = '') {
      # code...
    }else{
      $config['upload_path'] = './assets/img/barang';
      $config['allowed_types'] = 'jpg|jpeg|png';
      $config['max_size'] = '5024';
      // $config['max_width']  = '2048';
      // $config['max_height']  = '2048';
      $config['encrypt_name'] = TRUE;

      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('gambar'))
      {
        $error = array('error' => $this->upload->display_errors());
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_barang', $error);
        $this->load->view('templates_admin/footer');
      }
      else
      {
        $gambar = $this->upload->data('file_name');

        $data = array(
          'nama_brg' => $nama_brg,
          'keterangan' => $keterangan,
          'kategori' => $kategori,
          'harga' => $harga,
          'stok' => $stok,
          'gambar' => $gambar
        );
    
        $this->model_barang->tambah_data($data, 'tb_barang');
    
        redirect('admin/data_barang');
      }
    }
  }

  public function edit($id)
  {
    $where = array('id_brg' => $id);
    $data['barang'] = $this->model_barang->edit($where, 'tb_barang')->result();
    $this->load->view('templates_admin/header');
    $this->load->view('templates_admin/sidebar');
    $this->load->view('admin/edit_barang', $data);
    $this->load->view('templates_admin/footer');
  }

  public function update()
  {
    $id_brg = $this->input->post('id_brg');
    $nama_brg = $this->input->post('nama_brg');
    $keterangan = $this->input->post('keterangan');
    $kategori = $this->input->post('kategori');
    $harga = $this->input->post('harga');
    $stok = $this->input->post('stok');

    $data = array(
      'nama_brg' => $nama_brg,
      'keterangan' => $keterangan,
      'kategori' => $kategori,
      'harga' => $harga,
      'stok' => $stok
    );

    $where = array(
      'id_brg' => $id_brg
    );

    $this->model_barang->update($where, $data, 'tb_barang');
    redirect('admin/data_barang/index');
  }

  public function destroy($id)
  {
    $where = array('id_brg' => $id);
    $this->model_barang->destroy($where, 'tb_barang');
    redirect('admin/data_barang/index');
  }
}
