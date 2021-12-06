@extends('layouts/mainMember')

@section('title','Halaman Kontak Member')
@section('banner')
    <img src="{{asset('member/img/simple-house-logo.png')}}" alt="Logo" class="tm-site-logo" /> 
	<div class="tm-site-text-box">
		<h1 class="tm-site-title">pubBrary</h1>
		<!-- <h6 class="tm-site-description">new restaurant template</h6>	 -->
	</div>
@endsection
@section('nav')
    <ul class="tm-nav-ul">
		<li class="tm-nav-li"><a href="index.html" class="tm-nav-link ">Home</a></li>
		<li class="tm-nav-li"><a href="aboutMember" class="tm-nav-link active">About</a></li>
		<li class="tm-nav-li"><a href="kontakMember" class="tm-nav-link ">Contact</a></li>
	</ul>
@endsection
@section('header')
    <h2 class="col-12 text-center tm-section-title">About Page</h2>
@endsection
@section('container')
    @foreach ($index as $about)
		<h4 class="tm-info-title tm-text-success">{{ $about->judul }}</h4>
		<p class="col-12 text-center">{{ $about->deskripsi }} </p>
    @endforeach
@endsection
