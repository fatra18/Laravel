<?php
	include 'koneksi.php';
	
	
	$name  =$_POST['name'];
	$harga  =$_POST['harga'];
	$Categoryr_name =$_POST['Categoryr_id'];
	$Suplier_name  =$_POST['Suplier_id'];
	
	$query= "
   	 INSERT INTO product 
  	  (Name, harga , category_id, suplier_id) 
   	 VALUES 
  	  ('$name','$harga','$Categoryr_name','$Suplier_name')
  	  ";	
  	 
   	 $result= mysqli_query($koneksi,$query);

   	 if ($result){
        header('location:index.php');
  	  }else {
        echo "data gagal ditambahkan";
  	  }