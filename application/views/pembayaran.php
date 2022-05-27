.<div class="container-fluid">
  <div class="row justify-content-center mb-5">
    <div class="col-md-8 card shadow p-0">
      <div class="card-header text-center">
        <h4>Pembayaran</h4>
      </div>
      <div class="card-body">
        <?php 
        if($keranjang = $this->cart->contents()){?>
          <div class="text-center alert alert-success">Total Belanja Anda : Rp. <?=number_format( $this->cart->total(), 0,',','.')?></div>

          <h3>Input Alamat Pengiriman dan Pembayaran</h3>
          <form action="<?= base_url() . 'dashboard/proses_pesanan'?>" method="post">
            <div class="form-group">
              <label for="nama">Nama Lengkap</label>
              <input type="text" name="nama" id="nama" placeholder="Nama Lengkap Anda" class="form-control">
            </div>

            <div class="form-group">
              <label for="alamat">Alamat Lengkap</label>
              <textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control"></textarea>
            </div>

            <div class="form-group">
              <label for="no_hp">Nomor Telepon</label>
              <input type="number" name="no_hp" id="no_hp" placeholder="Nomor Telepon Anda" class="form-control">
            </div>

            <div class="form-group">
              <label for="jasa_pengiriman">Jasa Pengiriman</label>
              <select name="jasa_pengiriman" id="jasa_pengiriman" class="form-control w-50">
                <option value="JNE">JNE</option>
                <option value="J&T">J&T</option>
                <option value="TIKI">TIKI</option>
                <option value="POS Indonesia">POS Indonesia</option>
                <option value="GoSend">GoSend</option>
              </select>
            </div>

            <div class="form-group">
              <label for="pilih_bank">Pilih Bank</label>
              <select name="pilih_bank" id="pilih_bank" class="form-control w-50">
                <option value="BCA">BCA</option>
                <option value="BNI">BNI</option>
                <option value="BRI">BRI</option>
                <option value="Mandiri">Mandiri</option>
              </select>
              <small>Mohon periksa dan pastikan kembali formulir pembayaran diatas secara seksama sebelum melakukan pesanan</small>
            </div>

            <div class="text-center">
              <button type="submit" class="btn btn-primary">Pesan Sekarang</button>
            </div>
          </form> 
        <?php }else{?>
          <div class="text-center alert alert-success">Keranjang Belanja Anda Masih Kosong</div>
          <div class="text-center"><a href="<?= base_url() . 'dashboard/index'?>" class="btn btn-primary btn-sm">Lanjutkan Belanja</a></div>
        <?php }?>
      </div>
    </div>
  </div>
</div>