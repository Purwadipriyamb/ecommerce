<?php
include"koneksi.php";

$folder="C:/wamp/www/db_olshop/gambar/";
$gambar=$_FILES['gambar']['name'];
$id=$_POST['id'];
$n=$_POST['nama'];
$k=$_POST['kategori'];
$h=$_POST['harga'];
$u=$_POST['ukuran'];
if(!empty($_FILES["gambar"]["tmp_name"]))
{
	$jenis=$_FILES['gambar']['type'];
	$fileError=$_FILES['gambar']['error']; 
	$uploaddir='./gambar/';
	$lokasi=$uploaddir.$gambar;
		$g=$folder.basename($_FILES['gambar']['name']);
		if(move_uploaded_file($_FILES['gambar']['tmp_name'],$lokasi))
		{
			echo"Gambar Berhasil Disimpan".$g;
			$q=mysql_query("insert into tb_produk values('$id','$n','$k','$gambar','$h','$u')",$c) or die (mysql_error());
			header('location:admin.php');
		}
else {echo"gagal mengubah";}
}else echo"gagal gkjgkk";
?>