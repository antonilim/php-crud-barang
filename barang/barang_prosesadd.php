<?php
include('includes/config.php');
// Query nambah barang
$kode_barang	= $_POST['kode_barang'];
$nama_barang	= $_POST['nama_barang'];
$jenis	= $_POST['jenis'];
$satuan	= $_POST['satuan'];
$merk	= $_POST['merk'];
$produsen	= $_POST['produsen'];
$harga_beli	= $_POST['harga_beli'];

$sql 	= "INSERT INTO tb_barang (kode_barang,nama_barang,jenis,satuan,merk,produsen,harga_beli) VALUES ('$kode_barang','$nama_barang','$jenis','$satuan','$merk','$produsen','$harga_beli')";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			alert('Berhasil tambah data barang.'); 
			document.location = 'index.php'; 
		</script>";

}else {
	echo "<script type='text/javascript'>
			alert('Data belum berhasil di Input, silahkan coba lagi!.');
			document.location = 'barang_formadd.php?kode=$kode'; 
		</script>";
}
?>