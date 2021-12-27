@extends('layout.v_template')
@section('title','home')


@section('content')

<h1>Halaman home</h1>
<p>
    ini content
</p>
<br>
    <img src="{{asset('gambar/florian-unsplash.jpg')}}" alt="" style="width:200px; height:200px;">
    <img src="{{asset('gambar/florian1.jpg')}}" alt="" style="width:200px; height:200px;">
    <img src="{{asset('gambar/markus-unsplash.jpg')}}" alt="" style="width:200px; height:200px;">
@endsection
