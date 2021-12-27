@extends('layout.v_template')
@section('title','home')




<?php

$santri = [
    ["Fatra dinata","088282897212","Teknik Informatika","fatra88876@gmail.com"],
    ["Rama","086284897121","Teknik Informasi","fajar18266@gmail.com"],
    ["Muji","086835557112","Teknik Nuklir","muji74246@gmail.com"],
    ["Hudzaifah","0882828971","Teknik Informatika","ujay32876@gmail.com"],
    ["Septian","086284897121","Teknik Informasi","septian33276@gmail.com"],
    ["Ihsan","086835557141","Teknik Nuklir","Ihsan94376@gmail.com"],
    ["Abdurrahman","086835557121","Teknik Nuklir","abdu94376@gmail.com"]
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
@section('content')

<h1>Daftar Contact Santri</h1>
<ul>

   <?php foreach( $santri as $san) : ?>
</ul>

<ul>
    <li>Nama : <?=  $san[0];?></li>

    <li>Contact : <?=  $san[1];?></li>

    <li>Jurusan : <?=  $san[2];?></li>

    <li>Email : <?=  $san[3];?></li>
</ul>

<?php endforeach;?>


@endsection

</body>
</html>
