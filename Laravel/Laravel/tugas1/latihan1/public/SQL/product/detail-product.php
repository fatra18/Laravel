<h2> detail Product</h2>
<?php
	include"koneksi.php";
	
	
?>

<?php
 $id = $_GET['ID'];
 $query="Select product.Name,product.harga,Categoryr.Name as category_name,Suplier.Name as suplier_name from product
 join Categoryr on product.category_id=Categoryr.ID
 join Suplier on product.suplier_id=Suplier.id
 where product.ID='$id';
 ";
 var_dump($id);
 $result=mysqli_query($koneksi,$query);
 $no= 1;
 while($data=mysqli_fetch_assoc($result)){
 
 ?>
 <?= $no++; ?>
 <?= $data['Name']; ?>
 <?= $data['harga']; ?>
 <?= $data['category_name']; ?>
 <?= $data['suplier_name']; ?>
 
	
<?php			
};
?>
