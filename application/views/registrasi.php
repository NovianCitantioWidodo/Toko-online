<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-6 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Daftar sebuah akun !</h1>
              </div>
              <form method="post" class="user" action="<?php echo site_url('registrasi') ?>">
                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <input type="text" name="nama" class="form-control form-control-user" id="exampleFirstName" placeholder="Nama Lengkap">
                      <?php echo form_error('nama', '<div class="text-danger small">','</div>'); ?>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail" placeholder="Username">
                      <?php echo form_error('username', '<div class="text-danger small">','</div>'); ?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="password1" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password1">
                      <?php echo form_error('password1', '<div class="text-danger small">','</div>'); ?>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="password2" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Ulangi Password">
                      <?php echo form_error('password2', '<div class="text-danger small">','</div>'); ?>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">Daftar</button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="<?php echo site_url('auth/login') ?>">Sudah memiliki akun? Silahkan login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
