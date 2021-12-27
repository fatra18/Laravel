<?php
	include 'koneksi.php';
	
	$id = $_GET['id'];
	$query= "SELECT * FROM Categoryr WHERE ID='$id'";
	$res =mysqli_query($koneksi,$query);
	$data =mysqli_fetch_assoc($res);
	
	
?>

<h2>Edit Nama</h2>

<form method="POST" action="prosesedit.php">
	<input type="hidden" name="id" value="<?=$id?>">
		
	<label>name</label>	
	<input type="text" name="name" value="<?=$data['Name']?>">
	

	<button type="submit">kirim</button>
</form>
