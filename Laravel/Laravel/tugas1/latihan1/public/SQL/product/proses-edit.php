<?php
	include 'koneksi.php';
	
	$id =$_POST['id'];
	$name  =$_POST['name'];
	$harga =$_POST['harga'];
	$Categoryr_id=$_POST['Categoryr_id'];
	$Suplier_id=$_POST['Suplier_id'];
	
	var_dump($name);
	
	$query =
	"UPDATE product SET Name='$name',harga='$harga',category_id='$Categoryr_id',suplier_id='$Suplier_id' WHERE ID='$id'";
	 
	$res = mysqli_query($koneksi,$query);
	
	if($res){
	
	header('location:index.php');
	
	}else{
	echo('data gagal di update');
	}
