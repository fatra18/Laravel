<?php
	include"koneksi.php";
	
	
?>
	<?php
	$id = $_GET['id'];
	$query="Select product.ID, product.Name,Suplier.Name as name_suplier from product  join Suplier on suplier_id=Suplier.ID where Suplier.ID='$id'
	";
	$result=mysqli_query($koneksi,$query);
	$no= 1;
	while($data=mysqli_fetch_assoc($result)){
			
	?>
	<tr>
		
				<td><?=$data['Name']; ?></td>
				
				<?php
				};
				?>

				
