<!-- TAMPIL TABLE BARANG -->
<table class="table" id="dataTable">
  <thead>
    <tr>
      <th scope="col">Npp</th>
      <th scope="col">Nama</th>
      <th scope="col">Bidang</th>
      <th scope="col">Barang</th>
      <th scope="col">Tanggal Pinjam</th>
      <th scope="col">Tanggal Kembali</th>
      <th scope="col">Ubah Status</th>

    </tr>
  </thead>
  <tbody>
    <h3 >Peminjaman</h3>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>
         Pinjam Barang
      </button> 
        <a href="<?php echo base_url(); ?>admin/print/" class="btn btn  btn-danger   float">Print<i class="fa fa-fw fa-print"></i></a>
         
  
  <!--  <a href="" class="btn btn-primary">Tambah Data Barang</a> -->
  <!-- MODAL TAMBAH DATA -->
  <section class="Content">
    <?php if ( $this->session->flashdata('flash')): ?>
      <div class="row mt-3">
        <div class="col-md-6">
          <div class="alert alert-success alert-dismissible fade show" role="alert">Peminjaman <strong><?php echo $this->session->flashdata('flash'); ?> </strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
              </button>
          </div>
        </div>
      </div>
    <?php endif; ?>
 

            
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Form Peminjaman</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url('user/tambah'); ?>">
          
          <div class="form-group" >
            <label>Npp</label>
            <input type="text" name="npp" class="form-control" value="<?php  echo $user['npp'] ?>" >
             <?php echo form_error('npp','<small class="text-danger pl-3">','</small>');  ?>
          </div>

          <div class="form-group">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" value="<?php  echo $user['name'] ?>">
             <?php echo form_error('name','<small class="text-danger pl-3">','</small>');  ?>
          </div>
          
          <!-- <div class="form-group">
            <label>Bidang</label>
            <input type="text" name="bidang" class="form-control" value="<?php  echo $user['bidang'] ?>">
             <?php echo form_error('bidang','<small class="text-danger pl-3">','</small>');  ?>
          </div> -->
          
          <div class="form-group">
            <label>Barang</label>
              <select name="nama_barang" class="form-control" required >
                <option value="">pilih barang</option>
            <?php foreach ($barang as $key ) :?>
                 <option value="<?php echo $key->id_barang ?>"><?php if ($key->status == 1){ echo $key->nama_barang;}?></option>    
            
            <?php endforeach ?>
              </select>
             
             <?php echo form_error('bidang','<small class="text-danger pl-3">','</small>');  ?>
          </div>
          <div class="form-group">
            <label>Tanggal Pinjam</label>
            <input type="date" name="tgl_pinjam" class="form-control" value="<?=date('Y-m-d')?>">
             <?php echo form_error('tgl_pinjam','<small class="text-danger pl-3">','</small>');  ?>
          </div>
          
          <!-- <div class="form-group">
            <label>Tanggal Kembali</label>
            <input type="date" name="tgl_kembali" class="form-control" required>
             <?php echo form_error('tgl_kembali','<small class="text-danger pl-3">','</small>');  ?>
          </div>
           -->
          <button type="reset" class="btn btn-danger" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Pinjam</button>
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
      foreach ($data as $d): ?>

    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $d->npp ?></td>
      <td><?php echo $d->name ?></td>
      <td><?php echo $d->nama_barang; ?></td>
      <td><?php echo $d->tgl_pinjam; ?></td>
      <!-- <td><?php echo $d->tgl_kembali; ?></td> -->
      <td>
        <?php if ($d->status==0){ ?>
          <button class='btn btn-sm btn-danger' disabled><b>Proses</b></button>  
        <?php } elseif ($d->status==1){ ?>
            <button class='btn btn-sm btn-danger' disabled><b>Belum di Kembalikan</b></button>
        <?php } 
             elseif ($d->status==3){ ?>
            <button class='btn btn-sm btn-danger' disabled><b>Ditolak</b></button>
        <?php } elseif ($d->status==2){ ?>
            <?= $d->tgl_kembali ?>
        <?php } 



        ?>
      </td>
      <td>
        <?php if ($d->status==0){ ?>
            <a href="<?php echo base_url(); ?>admin/acc/<?php echo $d->id_pinjam; ?>"><div class="btn btn-sm btn-primary" onclick="return confirm('yakin?');">Setuju</div></a>
            <a href="<?php echo base_url(); ?>admin/reject/<?php echo $d->id_pinjam; ?>"><div class="btn btn-sm btn-danger" onclick="return confirm('yakin?');">Tolak</div></a>
        <?php } elseif ($d->status==1){ ?>
            <a href="<?php echo base_url(); ?>admin/finish/<?php echo $d->id_pinjam; ?>"><div class="btn btn-sm btn-primary" onclick="return confirm('yakin?');">Selesai</div></a>
        <?php } 
             elseif ($d->status==3){ ?>
            <button class='btn btn-sm btn-danger' disabled><b>Ditolak</b></button>
        <?php } elseif ($d->status==2){ ?>
            <button class='btn btn-sm btn-warning' disabled><b>Selesai</b></button>
        <?php } 



        ?>     
      </td>

      
      
      <td> <button type="button" class="btn-warning" data-toggle="modal" data-target="#editmodal<?php echo $d->id_pinjam; ?>"><i class="fa fa-fw fa-edit"></i>
        </button>   
      <a href="<?php echo base_url(); ?>admin/hapuspinjam/<?php echo $d->id_pinjam; ?>"><div class="btn btn-danger btn-sm float-right" onclick="return confirm('yakin?');"><i class="fa fa-fw fa-trash"></i></div></a> </td>
       <td></td>
        </tr>

  <?php endforeach; ?>
    </tr>
  </tbody>
</table>












 </div>
        <!-- /.container-fluid -->


  
