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
    <nav>
		@foreach ($category as $kat)
			<li class="tm-paging-item"><a href="{{ $kat->deskripsi}}" class="tm-paging-link">{{ $kat->deskripsi}}</a></li>
		@endforeach
	</nav>
@endsection
@section('gallery')
    <div class="tm-gallery-page">
		@foreach ($buku as $member)
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