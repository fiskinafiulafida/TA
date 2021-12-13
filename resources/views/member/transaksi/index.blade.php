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
    <h1 class="col-12 text-center tm-section-title">Transaksi Peminjaman Buku pubBrary</h1>
@endsection
@section('container')
        <center>
            <form action="{{ route ('transaksi.store')}}" method="POST" class="tm-contact-form" class="col-12">
                @csrf
                <img src="{{asset('image/'.$show->cover_img)}}" alt="Image" class="img-fluid tm-person-img" />
		        <div class="form-group" >
		          {{ $show->id_buku }}
		        </div>
    
		        <div class="form-group">
		          {{ $show->judul_buku }}
		        </div>

                <div class="form-group">
		          {{ $show->penerbit }}
		        </div>

                <div class="form-group">
		          {{ $show->isbn }}
		        </div>

                <div class="form-group">
                   <label for="Tanggal_Peminjaman">Tanggal Peminjaman</label>                    
                   <input type="date" name="tgl_pinjam" class="form-control" id="tgl_pinjam" aria-describedby="Tanggal_Peminjaman" >                
               </div>

               <div class="form-group">
                   <label for="Tanggal_Pengembalian">Tanggal Kembali</label>                    
                   <input type="date" name="tgl_kembali" class="form-control" id="tgl_kembali" aria-describedby="Tanggal_Pengembalian" >                
               </div>
    
		        <div class="form-group tm-d-flex">
		          <button type="submit" class="tm-btn tm-btn-success tm-btn-right">
		            Pinjam
		          </button>
		        </div>
		        </form>
        </center>
@endsection

