<div class="container-fluid">
  <div class="row justify-content-center my-3">
    <div class="col-md-8 card shadow p-0">
      <div class="card-header text-center">
        <h4 class="font-weight-bold">Keranjang Belanja</h4>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-striped table-hover table-light">
          <tr class="text-center font-weight-bold">
            <th>NO</th>
            <th>AKSI</th>
            <th>NAMA PRODUK</th>
            <th>JUMLAH</th>
            <th>HARGA</th>
            <th>SUB TOTAL</th>
          </tr>

          <?php 
          $no=1;
          foreach ($this->cart->contents() as $items) { ?>
            
            <tr>
              <td><?=$no++?></td>
              <td class="text-center"><a href="<?=base_url() . 'dashboard/delete_item_cart/' . $items['rowid'] ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a></td>
              <td><?=$items['name']?></td>
              <td class="text-center"><?=$items['qty'] ?></td>
              <td class="text-right">Rp. <?=number_format( $items['price'], 0,',','.')?></td>
              <td class="text-right">Rp. <?=number_format( $items['subtotal'], 0,',','.')?></td>
            </tr>

          <?php } ?>

          <tr>
            <td colspan="5" class="font-weight-bold text-right">Total Harga :</td>
            <td class="text-right">Rp. <?=number_format( $this->cart->total(), 0,',','.') ?></td>
          </tr>
        </table>

        <div class="text-right">
          <a href="<?= base_url() . 'dashboard/delete_all_cart'?>" class="btn btn-danger btn-sm">Hapus Keranjang</a>
          <a href="<?= base_url() . 'dashboard/index'?>" class="btn btn-primary btn-sm">Lanjutkan Belanja</a>
          <a href="<?= base_url() . 'dashboard/pembayaran'?>" class="btn btn-success btn-sm">Pembayaran</a>
        </div>
      </div>
    </div>
  </div>
</div>