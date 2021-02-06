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

    <tr>
      <?php $no=1; ?>
      <td align="center"><?php echo $no++; ?></td>
       <?php  ?>
      <td align="center"><?php  echo $user['name'] ?></td>
      <td align="center"><?php  echo $user['bidang'] ?></td>
      <!-- <td ><?php echo $u->name; ?></td> -->
      <!-- <td ><?php echo $d->nama_barang; ?></td>
      <td align="center"><?php echo $d->tgl_pinjam; ?></td>
      <td align="center"><?php echo $d->tgl_kembali; ?></td> -->
    </tr>

</tbody>
</table>
<br>  
<div class="text-rigth" align="right">
<h3> Payakumbuh, <?= date('d F Y');?></h3>
<br><br><br><br><br><br>
<h3> (..................................................) </h3>
<script type="text/javascript">
  window.print()
</script>
