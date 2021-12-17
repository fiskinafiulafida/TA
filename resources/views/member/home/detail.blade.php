@extends('layouts/mainDetail')

@section('title','Halaman Detail Buku')

@section('banner')
    <img src="{{asset('member/img/simple-house-logo.png')}}" alt="Logo" class="tm-site-logo" /> 
	<div class="tm-site-text-box">
		<h1 class="tm-site-title">pubBrary</h1>
	</div>
@endsection

@section('nav')
    <ul class="tm-nav-ul">
		<li class="tm-nav-li"><a href="{{ route('homeMember.index') }}" class="tm-nav-link active">Home</a></li>
		<li class="tm-nav-li"><a href="{{ route('aboutMember.index') }}" class="tm-nav-link">About</a></li>
		<li class="tm-nav-li"><a href="{{ route('kontakMember.index') }}" class="tm-nav-link ">Contact</a></li>
	</ul>
@endsection

@section('header')
    <h1 class="col-12 text-center tm-section-title">Detail Buku</h1>
@endsection

@section('inner')
    <article class="col-md-12">
		<figure class="tm-person">
			<img src="{{asset('image/'.$member->cover_img)}}" alt="Image" class="img-fluid tm-person-img" style='width:700px; height:350px;'/>
            <center>
			    <figcaption class="tm-person-description">
			    	<h1 class="tm-person-title">{{ $member->judul_buku }}</h1>
			    	<h3 class="tm-person-name">{{ $member->penerbit }}</h3>
			    	<h4 class="tm-person-name">{{ $member->isbn }}</h4>
                    <h4 class="tm-person-name">{{ $member->kategori }}</h4>
                    <h4 class="tm-person-name">{{ $member->ketersediaan }}</h4>
                    <h3 class="tm-person-name">{{ $member->tahu_terbit }}</h3>
                    <h3 class="tm-person-name">{{ $member->deskripsi }}</h3>
			    	
			    </figcaption>
            </center>
		</figure>
	</article>
@endsection