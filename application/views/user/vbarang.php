<!-- TAMPIL TABLE BARANG -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Status</th>
      <th scope="col">Tanggal</th>
      
           


    </tr>
  </thead>
  <tbody>
  	<h3 >Daftar Barang</h3>

     
  
  <!-- 	<a href="" class="btn btn-primary">Tambah Data Barang</a> -->
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
     	
<br>
<br>
    <tr>
      <?php $no=1; 
      foreach ($barang as $brg): ?>

		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $brg['nama_barang']; ?></td>
			<td><?php if($brg['status']==1){
        echo "<button class='btn btn-sm btn-primary' disabled><b>Ready</b></button>";
      }elseif($brg['status']==0){
        echo"<button class='btn btn-sm btn-warning' disabled><b>Not Ready</b></button>";
      }; ?></td>
      <td>  
          <?=date('Y-m-d')?>

      </td>
      
      
      
     		</tr>

	<?php endforeach; ?>
    </tr>
  </tbody>
</table>



<?php $no=0;
foreach ($barang as $brg): $no++; ?>


<div class="modal fade" id="editmodal<?php echo $brg['id_barang']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Form Edit Barang</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url('admin/proses_editdata'); ?>">
           <input type="hidden" name="id_barang" value="<?php echo $brg['id_barang']; ?>">
          
          <div class="form-group">
            <label>Nama barang</label>
            <input type="text" name="nama_barang" class="form-control" value="<?php echo $brg['nama_barang']; ?>">
             <?php echo form_error('nama_barang','<small class="text-danger pl-3">','</small>');  ?>
          </div>
          <div class="form-group">
            <label>Stock</label>
            <input type="text" name="stock" class="form-control" value="<?php echo $brg['stock']; ?>">
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
<?php endforeach; ?>
 











 </div>
        <!-- /.container-fluid -->

      </div>
  
