<?php
$pinjam = $this->db->get('tr_pinjam')->result();
?>
<?php
$barang = $this->db->get('barang')->result();
?>
<?php
$pengguna = $this->db->get('user')->result();
?>
<div class="container-fluid">
 <h1 class="h3 mb-4 text-gray-800">Selamat Datang <br><?php echo $user['name']; ?></h1>
<div class="row">
<div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><?= $title ?></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Peminjaman <?=count($pinjam) ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-exchange-alt fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
 <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><?= $title ?></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Barang <?=count($barang) ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-briefcase fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
 <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><?= $title ?></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">User <?=count($pengguna) ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
</div>


































</div>
</div>


    
