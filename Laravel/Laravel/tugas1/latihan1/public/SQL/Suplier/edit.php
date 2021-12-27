<?php
	include 'koneksi.php';
	
	$id = $_GET['id'];
	$query= "SELECT * FROM Suplier WHERE id='$id'";
	$res =mysqli_query($koneksi,$query);
	$data =mysqli_fetch_assoc($res);
	
	
?>

<h2>Edit Nama</h2>

<form method="POST" action="Edit-proses.php">
	<input type="hidden" name="id" value="<?=$id?>">
		
	<label>name</label>	
	<input type="text" name="name" value="<?=$data['name']?>">
	<label>Alamat</label>	
	<input type="text" name="Alamat" value="<?=$data['Alamat']?>">
	<label>NomorWa</label>	
	<input type="text" name="NomorWa" value="<?=$data['NomorWa']?>">	
	
	
	

	<button type="submit">kirim</button>
</form>
