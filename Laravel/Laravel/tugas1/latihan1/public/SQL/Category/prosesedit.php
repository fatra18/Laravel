<?php
	include 'koneksi.php';
	
	$id  =$_POST['id'];
	$name  =$_POST['name'];
	
	$query ="UPDATE Categoryr SET Name='$name' WHERE ID='$id'";
	$res = mysqli_query($koneksi,$query);
	
	if($res){
	
	header('location:index.php');
	
	}else{
	echo('data gagal di update');
	}
