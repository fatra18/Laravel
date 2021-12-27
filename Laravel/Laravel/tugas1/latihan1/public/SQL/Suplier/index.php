<?php
	include "koneksi.php";
?>
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
   <table class="table">
			<tr class="table-dark">
				<th>No</th>
				<th>Nama</th>
				<th>action</th>
				
			</tr>
			
			<?php
			$query="SELECT * FROM Suplier ";
			$result=mysqli_query($koneksi,$query);
			$no= 1;
			while($data=mysqli_fetch_assoc($result)){
			
			?>
			<tr>
				<td><?= $no++;  ?></td>
				<td><?=$data['name']; ?></td>
				<!--<td><?=$data['Alamat']; ?></td>
				<td><?=$data['NomorWa']; ?></td>-->
				
				
				<td>
					<a href="edit.php?id=<?= $data['id']?>" class="btn btn-sm btn-primary">Edit</a>
					<form method="POST" action="proses-hapus.php" class="d-inline">
						<input type="hidden" name="id" value="<?= $data['id']?>" /> 
						<button type="submit" class="btn btn-sm btn-danger">Hapus</button>
					
					</form>
				</td>
				<td>
				<a href="Detail-suplier.php?id=<?= $data['id']?>">Detail</a>
				<a href="detail-produk.php?id=<?= $data['id']?>">Detail</a>
				<td>
			
								
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




<html>
	<head>
		<title>kelas</title>
	</head>
	</body>
		<?php
		  include "Judul.php";
		?>
		<a href="create.php">BUAT DATA</a>
		
	</body>
