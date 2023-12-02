<?php
include"koneksi.php";
	$nama = $_POST['nama'];
	$sex = $_POST['sex'];
	$email = $_POST['email'];
	$kredit = $_POST['kredit'];
	$produk = $_POST['produk'];
	$harga = $_POST['harga'];
	$jumlah = $_POST['jumlah'];
	$ukuran = $_POST['ukuran'];
	
	$q=mysql_query("insert into tb_transaksi(tgl_transaksi,jumlah,pembeli,jk,email,kredit,total,ukuran,status) 
	values(now(),'$jumlah','$nama','$sex','$email','$kredit',$jumlah * $harga,'$ukuran','baru');",$c) or die(mysql_error());
	if($q){
		header('location:inde.php');
	}
	else echo"gagal menyimpan";
?>