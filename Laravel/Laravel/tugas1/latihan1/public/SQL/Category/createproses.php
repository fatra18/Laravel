<?php

include "koneksi.php";

$name=$_POST['name'];


$query="INSERT INTO Categoryr (name) VALUES
('$name')";

$result=mysqli_query($koneksi,$query);

if($result) {
	header("location:index.php");
}else{
	echo "data gagal di tambahkan";
}
?>
