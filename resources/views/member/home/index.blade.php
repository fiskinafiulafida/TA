@extends('layouts/mainMember')

@section('title','Halaman Home Member')
@section('banner')
    <img src="{{asset('member/img/simple-house-logo.png')}}" alt="Logo" class="tm-site-logo" /> 
	<div class="tm-site-text-box">
		<h1 class="tm-site-title">pubBrary</h1>
	</div>
@endsection
@section('nav')
    <ul class="tm-nav-ul">
		<li class="tm-nav-li"><a href="homeMember" class="tm-nav-link active">Home</a></li>
		<li class="tm-nav-li"><a href="aboutMember" class="tm-nav-link">About</a></li>
		<li class="tm-nav-li"><a href="kontakMember" class="tm-nav-link ">Contact</a></li>
		<li class="tm-nav-li"><a href="{{ route ('transaksi.create')}}" class="tm-nav-link ">PeminjananBuku</a></li>
		<li class="tm-nav-li"><a href="halLogin2" class="tm-nav-link ">Profil</a></li>
	</ul>
@endsection
@section('header')
    <h1 class="col-12 text-center tm-section-title">Welcome pubBrary</h1>
@endsection
@section('container')
    <nav>
		<ul>
			@foreach ($kategori as $as)
				<li class="tm-btn tm-btn-default tm-right"><a href="{{ route('homeMember.showPostByCategory', $as->kategori) }}" >{{ $as->deskripsi}}</a></li>
			@endforeach
		</ul>
	</nav>
@endsection
@section('maps')
	<div class="tm-container-inner tm-featured-image">
		<div class="row">
			<div class="col-12">
				<div class="placeholder-2">
					<div class="parallax-window-2" data-parallax="scroll" data-image-src="{{asset('member/img/1.jpg')}}"></div>		
				</div>
			</div>
		</div>
	</div>
@endsection

