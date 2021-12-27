@extends('layout.templet')
@section('title','santri')


@section('content')
<?php

    $santri = [
        ["Fatra Dinata","087723451865","Programmer","fatra88876@gmail.com"],
        ["Rama","083223451865","Programmer","rama@gmail.com"],
        ["Hudzaifah","089923451865","Programmer","Hudzaifah88876@gmail.com"],
        ["Septian","088723451865","Programmer","Septian88876@gmail.com"],
        ["Muji Kuwat","0832113451865","Programmer","Muji@gmail.com"],
        ["Abdurrahman","083115451865","Programmer","fatra88876@gmail.com"],
        ["Ihsan","08144451865","Programmer","fatra88876@gmail.com"],

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

<h1>Daftar  contact Santri</h1>
<ul>

   <?php foreach( $santri as $sns) : ?>
</ul>

<ul>
    <li>Nama : <?=  $sns[0];?></li>

    <li>Nomor Hp : <?=  $sns[1];?></li>

    <li>Jurusan : <?=  $sns[2];?></li>

    <li>Email : <?=  $sns[3];?></li>
</ul>

<?php endforeach;?>



</body>
</html>

@endsection


