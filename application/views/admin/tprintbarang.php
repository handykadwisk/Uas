  <h1 align="center">BPJS Kesehatan</h1><h2 align="center">Kantor Cabang Payakumbuh</h2>
 
<hr>  
 <h4 align="center"> Sistem Peminjaman Sarana</h4>  
 <h3 align="center"> List Sarana</h3>
 <h3 align="center"> <?= date('M Y');  ?></h3>
<table align="center" border="1" rules="all" width="70%" >


  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Stock</th>
      

    </tr>
  </thead>
  <tbody>
      <?php $no=1; 
      foreach ($data as $d): ?>

    <tr>
      <td align="center"><?php echo $no++; ?></td>
      
      <td ><?php echo $d['nama_barang']; ?></td>
      <td align="center"><?php echo $d['stock']; ?></td>
      </tr>
      <?php endforeach; ?>

</tbody>
</table>
<br>  
<div class="text-rigth" align="right">
<h3> Payakumbuh, <?= date('d F Y');?>&emsp;&emsp;&emsp;&emsp;</h3>
<br><br><br><br><br><br>
<h3> (..................................................)&emsp;&emsp;&emsp;&emsp;</h3>
<script type="text/javascript">
  window.print()
</script>
