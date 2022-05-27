<div class="container-fluid">

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="<?=base_url()?>/assets/img/slider/slider1.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?=base_url()?>/assets/img/slider/slider2.jpg" alt="Second slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="row mt-4 mb-4 text-center">
    <?php foreach ($pakaian_wanita as $wanita) { ?>
      <div class="card ml-3 mb-3" style="width: 16rem;">
        <img class="card-img-top overflow-hidden img-fluid" style="max-height:250px;" src="<?=base_url() . 'assets/img/barang/' . $wanita->gambar?>" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title font-weight-bold"><?=$wanita->nama_brg?></h5>
          <p class="card-text mb-0"><?=read_more($wanita->keterangan)?></p>
        </div>
        <div class="card-footer">
          <span class="badge badge-md mb-0 badge-pill badge-success">Rp. <?=number_format($wanita->harga, 0, ".", ".");?></span><br>
          <small class="mt-0 mb-2 d-block">Stok : <?= $wanita->stok?></small>
          <div>
            <?php if ($wanita->stok < 1) { ?>
              <a class="btn text-light btn-primary btn-sm btn-disabled">Tambah ke Keranjang</a>
            <?php }else{ ?>
              <a href="<?=base_url() . 'dashboard/add_to_chart/' . $wanita->id_brg?>" class="btn btn-primary btn-sm">Tambah ke Keranjang</a>
            <?php }?>
            <a href="<?=base_url() . 'dashboard/detail/' . $wanita->id_brg?>" class="btn btn-success btn-sm">Detail</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>

</div>