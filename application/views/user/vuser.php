<!-- TAMPIL TABLE BARANG -->
<table class="table">
  <thead>
    <tr>
       <th scope="col">No</th>
      <th scope="col">Npp</th>
      <th scope="col">Nama</th>
      <th scope="col">Bidang</th>
      <th scope="col">Nomor HP</th>


    </tr>
  </thead>
  <tbody>
    <h3 >Daftar User</h3>
  
  <!--  <a href="" class="btn btn-primary">Tambah Data Barang</a> -->
  <!-- MODAL TAMBAH DATA -->
  <section class="Content">
    <?php if ( $this->session->flashdata('flash')): ?>
      <div class="row mt-3">
        <div class="col-md-6">
          <div class="alert alert-success alert-dismissible fade show" role="alert">Data Barang <strong><?php echo $this->session->flashdata('flash'); ?> </strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
              </button>
          </div>
        </div>
      </div>
    <?php endif; ?>
 

      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>
         Tambah Data Barang
      </button> 
      
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Form Iput Barang</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url('admin/tambah'); ?>">
          
          <div class="form-group">
            <label>Nama barang</label>
            <input type="text" name="nama_barang" class="form-control">
             <?php echo form_error('nama_barang','<small class="text-danger pl-3">','</small>');  ?>
          </div>
          <div class="form-group">
            <label>Stock</label>
            <input type="text" name="stock" class="form-control">
             <?php echo form_error('stock','<small class="text-danger pl-3">','</small>');  ?>
           
          </div>          
          <button type="reset" class="btn btn-danger" data-dismiss="modal">RESET</button>
          <button type="submit" class="btn btn-primary">SIMPAN</button>
        </form>

      </div>
     
    </div>
  </div>
</div>
</div>
<br>
<br>
    <tr>
      <?php $no=1; 
      foreach ($user as $us): ?>

    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $us['npp']; ?></td>
      <td><?php echo $us['name']; ?></td>
      <td><?php echo $us['bidang']; ?></td>
      <td><?php echo $us['nomor_hp']; ?></td>

      
      
      <td> <button type="button" class="btn-warning" data-toggle="modal" data-target="#editmodal<?php echo $us['id']; ?>"><i class="fa fa-fw fa-edit"></i>
        </button>   
      <a href="<?php echo base_url(); ?>admin/hapususer/<?php echo $us['id']; ?>"><div class="btn btn-danger btn-sm float-right" onclick="return confirm('yakin?');"><i class="fa fa-fw fa-trash"></i></div></a> </td>
       <td></td>
        </tr>

  <?php endforeach; ?>
    </tr>
  </tbody>
</table>










 </div>
        <!-- /.container-fluid -->

      </div>
  
