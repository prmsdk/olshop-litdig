<div class="container-fluid">
  <div class="row justify-content-center py-3">
    <div class="col-md-8 card p-0">
      <div class="card-header">
        <h3>EDIT DATA BARANG</h3>
      </div>
      <div class="card-body">

        <?php foreach ($barang as $brg) { ?>
          
          <form action="<?=  base_url() . 'admin/data_barang/update'?>" method="post">
            <input type="hidden" name="id_brg" value="<?=$brg->id_brg?>">

            <div class="form-group">
              <label for="nama_brg">Nama Barang</label>
              <input type="text" name="nama_brg" id="nama_brg" class="form-control" value="<?=$brg->nama_brg?>">
            </div>

            <div class="form-group">
              <label for="keterangan">Keterangan</label>
              <textarea name="keterangan" id="keterangan" cols="30" rows="3" class="form-control"><?=nl2br($brg->keterangan)?></textarea>
            </div>

            <div class="form-group">
              <label for="kategori">Kategori</label>
              <select name="kategori" id="kategori" class="form-control w-50">
                <option value="Hotspot" <?php echo $brg->kategori == 'Hotspot' ? 'selected' : ''; ?>>Hotspot</option>
                <option value="Pakaian Pria" <?php echo $brg->kategori == 'Pakaian Pria' ? 'selected' : ''; ?>>Pakaian Pria</option>
                <option value="Pakaian Wanita" <?php echo $brg->kategori == 'Pakaian Wanita' ? 'selected' : ''; ?>>Pakaian Wanita</option>
                <option value="Pakaian Anak" <?php echo $brg->kategori == 'Pakaian Anak' ? 'selected' : ''; ?>>Pakaian Anak</option>
                <option value="Alat Kecantikan" <?php echo $brg->kategori == 'Alat Kecantikan' ? 'selected' : ''; ?>>Alat Kecantikan</option>
              </select>
            </div>

            <div class="form-group">
              <label for="harga">Harga</label>
              <input type="number" name="harga" id="harga" class="form-control w-50" value="<?=$brg->harga?>">
            </div>

            <div class="form-group">
              <label for="stok">Stok</label>
              <input type="number" name="stok" id="stok" class="form-control w-50" value="<?=$brg->stok?>">
            </div>

            <div class="form-group">
              <label for="gambar">Gambar Produk</label><br>
              <img src="<?=base_url() . 'assets/img/barang/' . $brg->gambar?>" alt="" width="300px" class="img-fluid img-responsive img-rounded d-block">
              <input type="file" name="gambar" id="gambar" class="form-control w-50">
            </div>

            <div class="form-group text-center">
              <button class="btn btn-primary px-2 mr-1" type="submit">Simpan</button>
              <button class="btn btn-secondary" onclick="window.history.back()"><i class="fas fa-arrow-left"></i></button>
            </div>
          </form>

        <?php }?>

      </div>
    </div>
  </div>

  
</div>