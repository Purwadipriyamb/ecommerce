<?php
include"koneksi.php";
$id=$_GET['id'];
$q=mysql_query("delete from tb_produk where id_produk like '$id'",$c) or die (mysql_error());
if($q){header('location:admin.php');}
else echo"gagal menghapus";
?>