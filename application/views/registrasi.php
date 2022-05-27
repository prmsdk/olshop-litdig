
<body class="bg-gradient-primary mx-auto">

  <div class="container row mx-auto justify-content-center">

    <div class="card col-lg-6 col-sm-10 o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Buat Akun!</h1>
              </div>
              <form method="post" action="<?=base_url() . 'registrasi/index'?>" class="user">
                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Nama Anda.." name="nama">
                    <?= form_error('nama', '<div class="text-danger mt-2 mb-1 text-center small">', '</div>')?>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Username.." name="username">
                  <?= form_error('username', '<div class="text-danger mt-2 mb-1 text-center small">', '</div>')?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password.." name="password_1">
                    <?= form_error('password_1', '<div class="text-danger mt-2 mb-1 text-center small">', '</div>')?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password.." name="password_2">
                    <?= form_error('password_2', '<div class="text-danger mt-2 mb-1 text-center small">', '</div>')?>
                  </div>
                </div>
                <button class="btn btn-primary btn-user btn-block" type="submit">Daftar Akun</button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="<?= base_url('auth/login')?>">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
