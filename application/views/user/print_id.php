<title>Sistem Peminjaman Sarana</title>


 <h1 align="center"> PEMINJAMAN SARANA</h1> <h2 align="center">BPJS KC PAYAKUMBUH</h2>
 
<hr>	
<table border="1.5" rules="all" width="50%" height="15%" align="center">
<h2 align="center">Cetak Peminjamanan <br></h2>
	<tr>
		<td>
			NPP
		</td>
		<td >
			<?=$data->npp?>
		</td>
	</tr>
	<tr>
		<td>
			Nama
		</td>
		<td>
			<?=$data->name?>
		</td>
	</tr>
	<tr>
		<td>
			Bidang
		</td>
		<td>
			<?=$data->bidang?>
		</td>
	</tr>
	<tr>
		<td>
			Barang
		</td>
		<td>
			<?=$data->nama_barang?>
		</td>
	</tr>
	<tr>
		<td>
			Tanggal Pinjam
		</td>
		<td>
			<?=$data->tgl_pinjam?>
		</td>
	</tr>
	<tr>
		<td>
			Tanggal Kembali
		</td>
		<td>
			<?=$data->tgl_kembali?>
		</td>
	</tr>
</table>
<br><br><br><br>
<div class="text-rigth" align="right">
<h3> Payakumbuh, <?= date('d F Y');?>&emsp;&emsp;&emsp;&emsp;</h3>
<br><br><br><br><br><br>
<h3> (..................................................)&emsp;&emsp;&emsp;&emsp;</h3>

<script type="text/javascript">
	window.print();
</script>