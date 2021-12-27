<center>
<h2> detail Suplier</h2>
<?php
	include"koneksi.php";
	
?>

<?php
 $id = $_GET['id'];
 $query="Select * from Suplier
 where Suplier.id='$id';
 ";
 
 
 $result=mysqli_query($koneksi,$query);
 $no= 1;
 while($data=mysqli_fetch_assoc($result)){
 
 ?>
 
 <p>Nama:
 	<?= $data['name']; ?>
 <br><hr></p>
 <p>Alamat:
 <?= $data['Alamat']; ?><br><hr>
 </p>
 <p>Telepon:
 <?= $data['NomorWa']; ?><br><hr>
 </p>
 
 
	
<?php			
};
?>
</center>
