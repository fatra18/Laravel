<?php
include 'koneksi.php';

$queryCategory ='SELECT * FROM Categoryr';

$resultCategory= mysqli_query($koneksi, $queryCategory);

$querySupleir ='SELECT * FROM Suplier';

$resultSupleir= mysqli_query($koneksi, $querySupleir);
?>
<h2>Buat Data</h2>
<br>
<br>
<br>
<form method="POST" action="create-proses.php">
	<label>name</label>	
	<input type="text" name="name">
	<br>
	<br>
	
	<label>harga</label>
	<input type="number" name="harga">
	<br>
	<br>
	
	
	
	<label>Category</label>
	<select name="Categoryr_id">
		
	<?php while ($dataCategory=mysqli_fetch_assoc($resultCategory)){?>
	<option value ="<?=$dataCategory['ID']?>">
	<?= $dataCategory['Name']?>
	</option>
	
	<?php }?>
		
		
	</select>
	<br>
	<br>
	
	<label>Suplier</label>
	<select name="Suplier_id">
	<?php while ($dataSuplier=mysqli_fetch_assoc($resultSupleir)){?>
	<option value ="<?=$dataSuplier['id']?>">
	<?= $dataSuplier['name']?>
	</option>
	
	<?php }?>
		
	</select>		
	<button type="submit">kirim</button>
</form>