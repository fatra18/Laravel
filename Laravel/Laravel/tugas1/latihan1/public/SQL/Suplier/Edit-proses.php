<?php
	include 'koneksi.php';
	
	$id  =$_POST['id'];
	$name  =$_POST['name'];
	$addres  =$_POST['Alamat'];
	$nomor  =$_POST['NomorWa'];
	
	
	$query ="UPDATE Suplier SET name,='$name',Alamat='$addres',NomorWa='$nomor WHERE id='$id'";
	 
	 
	$res = mysqli_query($koneksi,$query);
	
	if($res){
	
	header('location:index.php');
	
	}else{
	echo('data gagal di update');
	}
	
