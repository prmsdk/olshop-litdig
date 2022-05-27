<div class="container-fluid">
  <div class="row justify-content-center mb-5">
    <div class="col-md-10 card shadow p-0">
      <div class="card-header text-center">
        <h4>Detail Pesanan</h4>
      </div>  
      <div class="card-body">
        <div class="badge mb-2 p-2 badge-success">No. Invoice : <?php echo $invoice->id?></div>
        <table class="table-hover table-striped table-bordered table">
          <tr>
            <th>ID PRODUK</th>
            <th>NAMA PRODUK</th>
            <th>JUMLAH PESANAN</th>
            <th>HARGA SATUAN</th>
            <th>SUB TOTAL</th>
          </tr>

          <?php 
          $total = 0;
          foreach ($pesanan as $psn ) {
            $subtotal = $psn->jumlah * $psn->harga;
            $total +=  $subtotal;
          ?>

            <tr>
              <td class="text-center"><?= $psn->id_brg?></td>
              <td><?= $psn->nama_brg?></td>
              <td class="text-center"><?= number_format($psn->jumlah,0,',','.')?></td>
              <td class="text-right">Rp. <?= number_format($psn->harga,0,',','.')?></td>
              <td class="text-right">Rp. <?= number_format($subtotal,0,',','.')?></td>
            </tr>

          <?php } ?>

          <tr>
            <td colspan="4" class="text-right font-weight-bold">Total Harga :</td>
            <td class="text-right">Rp. <?=number_format($total,0,',','.')?></td>
          </tr>
        </table>

        <div class="text-right">
          <a href="<?= base_url() . 'admin/invoice/index'?>" class="btn btn-primary btn-sm">Kembali</a>  
        </div>
      </div>
    </div>
  </div>
  

  


</div>