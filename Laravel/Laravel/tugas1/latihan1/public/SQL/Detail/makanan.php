<?php
	include"koneksi.php";
	
	
?>
	<?php
	$id = $_GET['ID'];
	$query="Select product.ID, product.Name,Categoryr.Name as category_name from product  join Categoryr on category_id=Categoryr.ID where Categoryr.Name='Makanan'
	";
	
	$result=mysqli_query($koneksi,$query);
	$no= 1;
	while($data=mysqli_fetch_assoc($result)){
	
			
	?>		
		
		<?=$data['Name']; ?>
		
		
		<?php
		};
		?>
