<?php
include"koneksi.php";
$id=$_POST['id'];
$n=$_POST['nama'];
$k=$_POST['kategori'];
$h=$_POST['harga'];
$u=$_POST['ukuran'];
$q=mysql_query("update tb_produk set nama_produk='$n',nama_kategori='$k',harga='$h',ukuran='$u'
	where id_produk like'$id'",$c) or die (mysql_error());
if ($q){header('location:admin.php');}
else echo"gagal mengubah";
?>