<div class="container-fluid">
  <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm mr-2"></i>Tambah Barang</button>

  <table id="DataTable" class="table table-bordered table-white">
    <tr>
      <th>No</th>
      <th>NAMA BARANG</th>
      <th>KETERANGAN</th>
      <th>KATEGORI</th>
      <th>HARGA</th>
      <th>STOK</th>
      <th colspan="3">AKSI</th>
    </tr>

    <?php 
    $no = 1;
    foreach ($barang as $brg ) { ?>
      <tr>
        <td><?=$no++?></td>
        <td><?=$brg->nama_brg?></td>
        <td><?=$brg->keterangan?></td>
        <td><?=$brg->kategori?></td>
        <td><?=$brg->harga?></td>
        <td><?=$brg->stok?></td>
        <td>
          <?php echo anchor('admin/data_barang/detail/' . $brg->id_brg, '
          <div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>')?>
        </td>
        <td>
          <?php echo anchor('admin/data_barang/edit/' . $brg->id_brg, '
          <div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>')?>
        </td>
        <td>
          <?php echo anchor('admin/data_barang/destroy/' . $brg->id_brg, '
          <div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?>
        </td>
      </tr>
    <?php }?>
  </table>
</div>


<!-- Modal -->
<div class="modal modal-md fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="<?= base_url() . 'admin/data_barang/tambah_data'; ?>" method="post" enctype="multipart/form-data">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          


        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>