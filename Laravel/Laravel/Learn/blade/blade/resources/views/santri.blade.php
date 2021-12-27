@extends('layout.templet')
@section('title','santri')


@section('content')
<?php

    $mahasiswa = [
        ["Fatra Dinata","088282897","Teknik Informatika","fatra88876@gmail.com"],
        ["Muji Kuwat","056284897","Teknik Informasi","fajar33276@gmail.com"],
        ["Abdurrahman","056835557","Teknik Nuklir","yana94376@gmail.com"],
        ["Hudzaifah","056284897","Teknik Informasi","fajar33276@gmail.com"],
        ["Ramah","074643698","Teknik Nuklir","yana94376@gmail.com"],
        ["Ihsan","092699745","Teknik Nuklir","yana94376@gmail.com"],
        ["Septian","027921487","Teknik Nuklir","yana94376@gmail.com"],
];

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>
<body>

<h1>Daftar Santri</h1>
<ul>

   <?php foreach( $mahasiswa as $mhs) : ?>
</ul>

<ul>
    <li>Nama : <?=  $mhs[0];?></li>

    <li>NRP : <?=  $mhs[1];?></li>

    <li>Jurusan : <?=  $mhs[2];?></li>

    <li>Email : <?=  $mhs[3];?></li>
</ul>

<?php endforeach;?>



</body>
</html>

@endsection

