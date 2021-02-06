<title>Sistem Peminjaman Sarana</title>


 <h3 align="center"> LAPORAN PEMINJAMAN SARANA BPJS KC PAYAKUMBUH</h3>
 <h3 align="center"> <?= date('M Y');  ?></h3>
<table border="1" rules="all" width="100%" >


  <thead>
    <tr>
      <th scope="col">Npp</th>
      <th scope="col">Nama</th>
      <th scope="col">Bidang</th>
      <th scope="col">Barang</th>
      <th scope="col">Tanggal Pinjam</th>
      <th scope="col">Tanggal Kembali</th>

    </tr>
  </thead>
  <tbody>
      <?php $no=1; 
      foreach ($data as $d): ?>

    <tr>
      <td align="center"><?php echo $no++; ?></td>
      <td align="center"><?php echo $d->npp; ?></td>
      <td ><?php echo $d->name; ?></td>
      <td ><?php echo $d->nama_barang; ?></td>
      <td align="center"><?php echo $d->tgl_pinjam; ?></td>
      <td align="center"><?php echo $d->tgl_kembali; ?></td>
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
