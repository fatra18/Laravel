<?php
	include 'koneksi.php';
	
	$id = $_GET['ID'];
	$query= "SELECT * FROM product WHERE ID='$id'";
	$res =mysqli_query($koneksi,$query);
	$data =mysqli_fetch_assoc($res);
	var_dump($data);
	$queryCategoryr ='SELECT  * FROM Categoryr';
	
	$resultCategoryr= mysqli_query($koneksi, $queryCategoryr);

	$querySuplier ='SELECT * FROM Suplier';
	
	$resultSuplier= mysqli_query($koneksi, $querySuplier);
?>
	
	


<h2>Edit Data</h2>
<br>
<br>
<br>
<form method="POST" action="proses-edit.php">
       <label>id</label>	
	<input type="hidden" name="id" value="<?=$data['ID']?>">
	<br>
	<br>
	
	<label>name</label>	
	<input type="text" name="name" value="<?=$data['Name']?>">
	<br>
	<br>
	
	<label>harga</label>
	<input type="number" name="harga"value="<?=$data['harga']?>">
	<br>
	<br>
	
	
	
	<label>Category</label>
	<select name="Categoryr_id">
		
	<?php while ($dataCategoryr=mysqli_fetch_assoc($resultCategoryr)){?>
	<option value ="<?=$dataCategoryr['ID']?>">
	<?= $dataCategoryr['Name']==$dataCategoryr['ID']?'selected':null?>
	<?=$dataCategoryr['Name']?>
	</option>
	
	<?php };?>
		
		
	</select>
	<br>
	<br>
	
	<label>Suplier</label>
	<select name="Suplier_id">
	<?php while ($dataSuplier=mysqli_fetch_assoc($resultSuplier)){?>
	<option value ="<?=$dataSuplier['id']?>">
	<?= $dataSuplier['name']==$dataSuplier['id']?'selected':null?>
	<?=$dataSuplier['name']?>
	</option>
	
	<?php }?>
		
	</select>		
	<button type="submit">kirim</button>
</form>
