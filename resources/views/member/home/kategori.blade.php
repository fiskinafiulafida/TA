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
	</ul>
@endsection
@section('header')
    <h1 class="col-12 text-center tm-section-title">Welcome pubBrary</h1>
@endsection
@section('container')
    <!-- <nav>
		<ul>
			<li class="tm-paging-item"><a href="#" class="tm-paging-link">Novel</a></li>
			<li class="tm-paging-item"><a href="#" class="tm-paging-link">Pendidikan</a></li>
			<li class="tm-paging-item"><a href="#" class="tm-paging-link">Edukasi</a></li>
			<li class="tm-paging-item"><a href="#" class="tm-paging-link">Dongeng</a></li>
			<li class="tm-paging-item"><a href="#" class="tm-paging-link">Biografi</a></li>
		</ul>
	</nav> -->
@endsection
@section('gallery')
    <div id="tm-gallery-page-novel" class="tm-gallery-page">
		@foreach ($data as $member)
		<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
			<figure>
				<img src="{{asset('image/'.$member->cover_img)}}" alt="Image" class="img-fluid tm-gallery-img" />
				<center>
					<figcaption>
						<h1 class="tm-gallery-title">{{ $member->judul_buku }}</h1>
						<p class="tm-gallery-description">{{ $member->isbn }}</p>
						<h4 class="tm-gallery-price">{{ $member->penerbit }}</h4>

						<a href="{{ route('homeMember.show',$member->id_buku) }}" class="tm-btn tm-btn-success">Read More</a>
					</figcaption>
				</center>
			</figure>
		</article>
		@endforeach
	</div>
@endsection