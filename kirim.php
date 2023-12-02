<?php
include"koneksi.php";
$id=$_GET['id'];
$q=mysql_query("update tb_transaksi set status='lama'
	where id_transaksi like'$id'",$c) or die (mysql_error());
if ($q){header('location:chart.php');}
else echo"gagal mengubah";
?>