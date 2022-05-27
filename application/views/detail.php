<div class="container-fluid">
  <div class="row justify-content-center mt-2 mb-5">
    <div class="col-md-10 card shadow p-0">
      <div class="card">
        <div class="card-header text-center">
          <h4 class="font-weight-bold">Detail Produk</h4>
        </div>
        <div class="card-body px-5">
          <?php foreach ($barang as $brg ) { ?>
          <div class="row">
            <div class="col-md-4">\
              <img class="img-fluid img-rounded" src="<?=base_url().'assets/img/barang/'.$brg->gambar?>" alt="">
            </div>
            <div class="col-md-8">
              <table class="table table-borderless">
                <tr>
                  <td width="150px">Nama Produk</td>
                  <td>:</td>
                  <td><?=$brg->nama_brg?></td>
                </tr>

                <tr>
                  <td>Keterangan</td>
                  <td>:</td>
                  <td class="text-justify"><?= nl2br( $brg->keterangan)?></td>
                </tr>

                <tr>
                  <td>Kategori</td>
                  <td>:</td>
                  <td><?=$brg->kategori?></td>
                </tr>

                <tr>
                  <td>Stok</td>
                  <td>:</td>
                  <td><?=$brg->stok?></td>
                </tr>

                <tr>
                  <td>Harga</td>
                  <td>:</td>
                  <td><div class="btn btn-success btn-sm">Rp. <?=number_format($brg->harga,0,',','.')?></div></td>
                </tr>
              </table>
              <div>
                <?php if ($brg->stok < 1) { ?>
                  <a class="btn text-light btn-primary btn-sm btn-disabled">Tambah ke Keranjang</a>
                <?php }else{ ?>
                  <a href="<?=base_url() . 'dashboard/add_to_chart/' . $brg->id_brg?>" class="btn btn-primary btn-sm">Tambah ke Keranjang</a>
                <?php }?>
                <a href="<?=base_url() . 'dashboard/index/'?>" class="btn btn-success btn-sm">Kembali</a>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>