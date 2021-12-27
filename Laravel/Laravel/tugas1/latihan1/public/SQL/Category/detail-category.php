<?php
	include"koneksi.php";
	
	
?>
	<?php
	$id = $_GET['ID'];
	$query="Select product.Name,Categoryr.ID as categoryr_id from product
	join Categoryr on product.category_id=Categoryr.ID
	where Categoryr.ID='$id';
	";
	$result=mysqli_query($koneksi,$query);
	$no= 1;
	while($data=mysqli_fetch_assoc($result)){
			
	?>
	<tr>
		
				<td><?=$data['Name']; ?></td>
				<td><?=$data['categoryr_id']; ?></td>
				<?php
				};
				?>

				
				
