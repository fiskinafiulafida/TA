@extends('layouts/mainTransaksi')

@section('title','Halaman Transaksi Member')
@section('banner')
    <img src="{{asset('member/img/simple-house-logo.png')}}" alt="Logo" class="tm-site-logo" /> 
	<div class="tm-site-text-box">
		<h1 class="tm-site-title">pubBrary</h1>
	</div>
@endsection
@section('nav')
    <ul class="tm-nav-ul">
		<li class="tm-nav-li"><a href="homeMember" class="tm-nav-link">Home</a></li>
		<li class="tm-nav-li"><a href="aboutMember" class="tm-nav-link">About</a></li>
		<li class="tm-nav-li"><a href="kontakMember" class="tm-nav-link ">Contact</a></li>
	</ul>
@endsection
@section('header')
    <h1 class="col-12 text-center tm-section-title">Transaksi Peminjaman Buku Berhasil</h1>
@endsection
@section('container')
	<center>
	<div>
		<img src="{{asset('member/img/transaksi-berhasil.png')}}" alt="profile Pic" height="300" width="300">
	</div>
	</center>
@endsection

