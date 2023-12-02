<?php
	include"koneksi.php";
	$un=$_POST['username'];
	$pn=$_POST['password'];
	$q=mysql_query("select status from admin where username='$un' and password='$pn'",$c) or die (mysql_error);
	while($r=mysql_fetch_array($q)){
	$s= $r['status'];
	if ($s=='admin'){
		header('location:admin.php');
	}
}
?>