@extends('layouts.mainDetail')

@section('title','Halaman Home Member')
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
    <h1 class="col-12 text-center tm-section-title">Welcome pubBrary</h1>
@endsection
@section('inner')
	@foreach($buku as $member)
		<article class="col-lg-6">
			<figure class="tm-person">
				<img src="{{asset('image/'.$member->cover_img)}}" alt="Image" class="img-fluid tm-gallery-img" style='width:170px; height:230px;'/>
				<center>
					<figcaption class="tm-person-description">
						<h5 class="tm-person-name">{{ $member->id_buku }}</h5>
						<h4 class="tm-person-name">{{ $member->judul_buku }}</h4>
						<p class="tm-person-title">{{ $member->isbn }}</p>
						<p class="tm-person-about">{{ $member->penerbit }}</p>
						<div>
							<a href="" class="tm-social-link"><i class="fab fa-facebook tm-social-icon"></i></a>
							<a href="" class="tm-social-link"><i class="fab fa-twitter tm-social-icon"></i></a>
							<a href="" class="tm-social-link"><i class="fab fa-instagram tm-social-icon"></i></a>
						</div>
						<a href="{{ route('homeMember.detailBuku', $member->id_buku) }}" class="tm-btn tm-btn-success">Read More</a>
					</figcaption>
				</center>
			</figure>
		</article>
	@endforeach
@endsection