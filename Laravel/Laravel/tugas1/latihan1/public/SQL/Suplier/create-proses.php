<?php

include "koneksi.php";

$name  =$_POST['name'];
$addres =$_POST['Alamat'];
$wa  =$_POST['Nomor'];




$query="INSERT INTO Suplier (name,Alamat,NomorWa) VALUES
('$name','$addres','$wa')";


$result=mysqli_query($koneksi,$query);

if($result) {
	header("location:index.php");
}else{
	echo "data gagal di tambahkan";
}
?>x
