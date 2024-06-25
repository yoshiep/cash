<?php
include './config/koneksi.php';
$delete = mysqli_query($conn, "DELETE FROM tabungan WHERE id = '".$_GET['id']."'");

 if($delete){
	header('location: daftar_tabungan.php?hapus=sukses');
}
else{
		header('location: daftar_tabungan.php?hapus=gagal');
}

?>
