<?php
include('includes/config.php');
// Query edit barang
$id		= $_POST['id'];
$kode_barang	= $_POST['kode_barang'];
$nama_barang	= $_POST['nama_barang'];
$jenis	= $_POST['jenis'];
$satuan	= $_POST['satuan'];
$merk	= $_POST['merk'];
$produsen	= $_POST['produsen'];
$harga_beli	= $_POST['harga_beli'];

$sql 	= "UPDATE tb_barang SET kode_barang='$kode_barang', nama_barang='$nama_barang', jenis='$jenis', satuan='$satuan', merk='$merk', produsen='$produsen', harga_beli='$harga_beli' WHERE id='$id'";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			alert('Berhasil edit data.'); 
			document.location = 'index.php'; 
		</script>";

}else {
	echo "<script type='text/javascript'>
			alert('Data belum berhasil di Update, silahkan coba lagi!.'); 
			document.location = 'karyawan_formedit.php?kode_barang=$kode_barang'; 
		</script>";

}
?>