
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-7">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login Page <br>SPBU <br> <small> Sistim Peminjaman Barang Umum</small></h1>
                    <center><img src="assets/img/bpjs.jpg"></center></center>
                  </div>
                  <?php echo $this->session->flashdata('message'); ?>
                  <form class="user" method="post" action="<?php echo base_url('auth') ?>">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Enter User name">
                      <?php echo form_error('name','<small class="text-danger pl-3">','</small>');  ?>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                      <?php echo form_error('password','<small class="text-danger pl-3">','</small>');  ?>
                      <br>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                    <hr>
                  
                  <!-- <div class="text-center">
                    <a class="small" href="<?php echo base_url('auth/registration'); ?>">Create an Account!</a>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  