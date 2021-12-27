<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
<?php
	include "koneksi.php";
?>
<html>
	<head>
		<title>Product</title>
	</head>
	</body>
		<?php
		  include "judul.php";
		?>
		
		<a href="create.php">BUAT DATA</a>
		<?php
			include "koneksi.php";
			$queryCate ="SELECT * FROM Categoryr";
			$resCate=mysqli_query($koneksi,$queryCate);
			$noCate = 1;
			while($data=mysqli_fetch_assoc($resCate)){
		?>
		<a href="index.php?cateId=<?=$data['ID']?>">
				<?=$data['Name']?>
		</a>
				<?php
			};
			?>
		
	
		<table border="1" cellpadding="10" class="table table-dark table-hover">
			<tr class="table-dark">
				<th>No</th>
				<th>Produk</th>
				<!-- <th>harga</th> -->
				<th></th>
				<th>action</th>
				
			</tr>
				<?php
				if (isset($_GET['cateId'])){
					$query =
					"SELECT
					product.ID,
					product.Name
					From product
					WHERE category_id =".$_GET['cateId']."
					";
				}
				else{
					$query="SELECT product.ID,product.Name,product.harga,Categoryr.Name as category_name,Suplier.name as suplier_name From product
				JOIN Categoryr on product.category_id=Categoryr.ID
				JOIN Suplier on product.suplier_id=Suplier.id
				 ";}
				$result=mysqli_query($koneksi,$query);
				$no= 1;
				while($data=mysqli_fetch_assoc($result)){
				
				?>
			<tr>
				<td><?= $no++;  ?></td>
				<td><?=$data['Name']; ?></td>
				<!-- <td><?=$data['harga']; ?></td> -->
				
				<!--<td><?=$data['category_name']; ?></td>				
				
				<td><?=$data['suplier_name']; ?></td>-->
					
				<td>
				     
				</td>	 	
				<td>
					<a href="edit.php?ID=<?= $data['ID']?>">Edit</a>
					<form method="POST" action="proses-hapus.php">
						<input type="hidden" name="id" value="<?= $data['ID']?>" /> 
						<button type="submit">Hapus</button>
					
					</form>
					<a href="detail-product.php?ID=<?= $data['ID']?>">detail</a> 
					
				</td>
				
								
			</tr>
			<tr>
			
			</tr>
			
			<?php
			 };
			?>
		</table>
			<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>
		
	</body>
