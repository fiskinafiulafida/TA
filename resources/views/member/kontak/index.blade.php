@extends('layouts/mainMember')

@section('title','Halaman Kontak Member')
@section('banner')
    <img src="{{asset('member/img/simple-house-logo.png')}}" alt="Logo" class="tm-site-logo" /> 
	<div class="tm-site-text-box">
		<h1 class="tm-site-title">pubBrary</h1>
	</div>
@endsection
@section('nav')
    <ul class="tm-nav-ul">
		<li class="tm-nav-li"><a href="{{ route('homeMember.index') }}" class="tm-nav-link ">Home</a></li>
		<li class="tm-nav-li"><a href="{{ route('aboutMember.index') }}" class="tm-nav-link">About</a></li>
		<li class="tm-nav-li"><a href="{{ route('kontakMember.index') }}" class="tm-nav-link active">Contact</a></li>
		<li class="tm-nav-li"><a href="{{ route ('transaksi.create')}}" class="tm-nav-link ">PeminjananBuku</a></li>
		<li class="tm-nav-li"><a href="halLogin2" class="tm-nav-link ">Profil</a></li>
	</ul>
@endsection
@section('header')
    <h2 class="col-12 text-center tm-section-title">Contact Page</h2>
@endsection
@section('container')
    @foreach ($index as $kontak)
		<h4 class="tm-info-title tm-text-success">{{ $kontak->nama }}</h4>
		<address>
			{{ $kontak->alamat }}
		</address>
		<i class="fas fa-phone">{{ $kontak->noTlp }}</i>
    @endforeach
@endsection
@section('maps')
    <div class="row">
		<div class="col-12">
			<div class="tm-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.2130499781256!2d112.62161081447782!3d-7.976918894254876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd628212d067cef%3A0x5b62e516fe60f2b8!2sMall%20Olympic%20Garden%20Malang!5e0!3m2!1sid!2sid!4v1638773593633!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
		</div>
	</div>
@endsection
