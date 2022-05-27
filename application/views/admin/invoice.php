<div class="container-fluid">
  <h4>Invoice Pemesanan Produk</h4>

  <table class="table table-bordered table-striped table-hover">
    <tr>
      <th>ID INVOICE</th>
      <th>NAMA PEMESAN</th>
      <th>ALAMAT</th>
      <th>TGL PEMESANAN</th>
      <th>BATAS BAYAR</th>
      <th>AKSI</th>
    </tr>
    
    <?php
    foreach ($invoice as $inv ) { ?>
      <tr>
        <td><?= $inv->id?></td>
        <td><?= $inv->nama?></td>
        <td><?= $inv->alamat?></td>
        <td><?= $inv->tgl_pesan?></td>
        <td><?= $inv->batas_bayar?></td>
        <td><a href="<?= base_url() . 'admin/invoice/detail/' . $inv->id?>" class="btn btn-primary btn-sm">Detail</a></td>
      </tr>
    <?php } ?>
  </table>
</div>