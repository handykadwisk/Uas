  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" method="post" action="<?php echo base_url('auth/registration'); ?>">
                <div class="form-group">
                  <input type="number" class="form-control form-control-user" id="npp" name="npp" placeholder="Npp" value="<?php echo set_value('npp'); ?>">
                  <?php echo form_error('npp','<small class="text-danger pl-3">','</small>');  ?>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full Name" value="<?php echo set_value('name'); ?>">
                  <?php echo form_error('name','<small class="text-danger pl-3">','</small>');  ?>
                </div><!-- 
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address"value="<?php echo set_value('email'); ?>" >
                   <?php echo form_error('email','<small class="text-danger pl-3">','</small>');  ?>
                </div>  -->
                <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <!-- <select class="form-control-user"  name="bidang" placeholder="Bidang">
                    <option>SDMUKP</option>
                    <option>PMP</option>
                    <option>PMR</option>
                    <option>PKEU</option>
                    <option>P4</option>
                  </select> -->
                  <!-- <input type="text" class="form-control form-control-user" id="bidang" name="bidang" placeholder="Bidang"value="<?php echo set_value('bidang'); ?>" >
                   <?php echo form_error('bidang','<small class="text-danger pl-3">','</small>');  ?> -->
                </div>
                <input type="hidden" name="level" value="2">
                <!-- <div class="col-sm-6">
                  <input type="number" class="form-control form-control-user" id="nomor_hp" name="nomor_hp" placeholder="No HP"value="<?php echo set_value('nomor_hp'); ?>" >
                   <?php echo form_error('nomor_hp','<small class="text-danger pl-3">','</small>');  ?>
                </div> -->
              </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                     <?php echo form_error('password1','<small class="text-danger pl-3">','</small>');  ?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Register Account
                </button>             
              </form>
              <hr>
              
              <div class="text-center">
                <a class="small" href="<?php echo base_url('auth'); ?>">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>