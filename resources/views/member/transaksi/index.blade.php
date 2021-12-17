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
		<li class="tm-nav-li"><a href="{{ route('homeMember.index') }}" class="tm-nav-link ">Home</a></li>
		<li class="tm-nav-li"><a href="{{ route('aboutMember.index') }}" class="tm-nav-link">About</a></li>
		<li class="tm-nav-li"><a href="{{ route('kontakMember.index') }}" class="tm-nav-link ">Contact</a></li>
		<li class="tm-nav-li"><a href="{{ route ('transaksi.create')}}" class="tm-nav-link ">PeminjananBuku</a></li>
	</ul>
@endsection
@section('header')
    <h1 class="col-12 text-center tm-section-title">Transaksi Peminjaman Buku pubBrary</h1>
@endsection

@section('form')
    <form method="POST" action="{{ route ('transaksi.store')}}" enctype="multipart/form-data">
        @csrf 
	    <div class="form-group">
			<label class="control-label mb-10">Nama Member</label>
			<select class="form-control" id="id" name="id">
                @foreach ($user as $kat)
                    <option value="{{ $kat->id}}">{{ $kat->name }}</option>
                @endforeach
			</select> 
		</div>
		<div class="form-group">
			<label class="control-label mb-10">Id Buku</label>
			<select class="form-control" id="id_buku" name="id_buku">
                @foreach ($buku as $kat)
                    <option value="{{ $kat->id_buku}}">{{ $kat->id_buku }}</option>
                @endforeach
			</select> 
		</div>
		<div class="form-group">
			<label class="control-label mb-10">Judul Buku</label>
			<select class="form-control" id="judul_buku" name="judul_buku">
                @foreach ($buku as $kat)
                    <option value="{{ $kat->judul_buku}}">{{ $kat->judul_buku }}</option>
                @endforeach
			</select> 
		</div>

		<div class="form-group">
			<label class="control-label mb-10">ISBN Buku</label>
			<select class="form-control" id="isbn" name="isbn">
                @foreach ($buku as $kat)
                    <option value="{{ $kat->isbn}}">{{ $kat->isbn }}</option>
                @endforeach
			</select> 
		</div>

		<div class="form-group">
			<label class="control-label mb-10">Pengarang Buku</label>
			<select class="form-control" id="penerbit" name="penerbit">
                @foreach ($buku as $kat)
                    <option value="{{ $kat->penerbit}}">{{ $kat->penerbit }}</option>
                @endforeach
			</select> 
		</div>
	
		<div class="form-group">
            <label for="Tanggal_Peminjaman">Tanggal Peminjaman</label>                    
            <input type="date" name="tgl_pinjam" class="form-control" id="tgl_pinjam" aria-describedby="Tanggal_Peminjaman" >                
        </div>

        <div class="form-group">
            <label for="Tanggal_Pengembalian">Tanggal Kembali</label>                    
            <input type="date" name="tgl_kembali" class="form-control" id="tgl_kembali" aria-describedby="Tanggal_Pengembalian" >                
        </div>

		<div class="form-group">
			<label class="control-label mb-10">Status</label>
			<select class="form-control" id="id_status" name="id_status">
                @foreach ($status as $kat)
                    <option value="{{ $kat->id_status}}">{{ $kat->deskripsi }}</option>
                @endforeach
			</select> 
		</div>
		<center>
	    	<div>
			  <button type="submit" value="Submit" class="tm-btn tm-btn-primary"> Save</button>
			</div>
		</center>
	</form>
@endsection


