@extends('layouts/mainAdmin')

@section('title','Halaman Edit Buku ')
@section('nav')
    <div class="mobile-only-brand pull-left">
		<div class="nav-header pull-left">
		    <div class="logo-wrap">
		    	<a href="index.html">
		    		<img class="brand-img" src="{{asset('admin/dist/img/logo.png')}}" alt="brand"/>
		    		<span class="brand-text">pubBrary</span>
		    	</a>
		    </div>
		</div>	
		<a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>
		<a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
		<a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>
		<form id="search_form" role="search" class="top-nav-search collapse pull-left">
			<div class="input-group">
				<input type="text" name="example-input1-group2" class="form-control" placeholder="Search">
				<span class="input-group-btn">
				<button type="button" class="btn  btn-default"  data-target="#search_form" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="zmdi zmdi-search"></i></button>
				</span>
			</div>
		</form>
	</div>
	<div id="mobile_only_nav" class="mobile-only-nav pull-right">
		<ul class="nav navbar-right top-nav pull-right">
			<li class="dropdown auth-drp">
				<a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="{{asset('admin/dist/img/user1.png')}}" alt="user_auth" class="user-auth-img img-circle"/><span class="user-online-status"></span></a>
				<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
					<li>
						<a><i class="zmdi zmdi-account"></i><span>Profile</span></a>
					</li>
					<li class="divider"></li>
					<li>
						<a href="halLogin2"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
@endsection
@section('navright')
   	<ul class="nav navbar-nav side-nav nicescroll-bar">
		<li>
    		<a href="{{ route ('bukuAdmin.index') }}"><div class="pull-left"><i class="fa fa-shopping-bag mr-20"></i><span class="right-nav-text">Data Buku</span></div><div class="clearfix"></div></a>
    	</li>
    	<li>
    		<a href="{{ route ('kategori.index') }}"><div class="pull-left"><i class="zmdi zmdi-book mr-20"></i><span class="right-nav-text">Kategori Buku</span></div><div class="clearfix"></div></a>
    	</li>
		<li>
    		<a href="{{ route ('memberAdmin.index') }}"><div class="pull-left"><i class=" fa fa-snapchat mr-20"></i><span class="right-nav-text">Data User</span></div><div class="clearfix"></div></a>
    	</li>
		<li>
    		<a href="{{ route ('peminjamanAdmin.index') }}"><div class="pull-left"><i class="fa fa-credit-card-alt mr-20"></i><span class="right-nav-text"> Peminjaman Buku</span></div><div class="clearfix"></div></a>
    	</li>
        <li>
    		<a href="{{ route ('ketersediaanAdmin.index') }}"><div class="pull-left"><i class="fa fa-credit-card-alt mr-20"></i><span class="right-nav-text"> Ketersediaan Buku</span></div><div class="clearfix"></div></a>
    	</li>
		<li>
    		<a href="{{ route ('aboutAdmin.index') }}"><div class="pull-left"><i class="fa fa-wpforms mr-20"></i><span class="right-nav-text">About</span></div><div class="clearfix"></div></a>
    	</li><li>
    		<a href="{{ route ('kontakAdmin.index') }}"><div class="pull-left"><i class=" fa fa-braille mr-20"></i><span class="right-nav-text">Kontak</span></div><div class="clearfix"></div></a>
    	</li>
    </ul>
@endsection
@section('main')
        <div class="panel-wrapper collapse in">
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-12 col-xs-12">
							<div class="form-wrap">
                                <form action="{{ route('bukuAdmin.update',$buku->id_buku) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
									<div class="form-body">
										<h6 class="txt-dark capitalize-font"><i class="fa fa-credit-card-alt"></i> FROM EDIT BUKU</h6>
										<hr class="light-grey-hr"/>
										<div class="row">
											<div class="col-md-12 ">
												<div class="form-group">
													<label class="control-label mb-5">Judul Buku : </label>
													<input type="text" name="judul_buku" value="{{ $buku->judul_buku }}" class="form-control">
												</div>
                                                <div class="form-group">
													<label class="control-label mb-5">Penerbit Buku : </label>
													<input type="text" name="penerbit" value="{{ $buku->penerbit }}" class="form-control">
												</div>
                                                <div class="form-group">
													<label class="control-label mb-10 text-left">ISBN Buku</label>
													<input type="text" name="isbn" value="{{ $buku->isbn }}" class="form-control">
												</div>
												<div class="form-group">
													<label class="control-label mb-10 text-left">Tahun Terbit</label>
													<input type="text" name="tahu_terbit" value="{{ $buku->tahu_terbit }}" class="form-control">
												</div>
												<div class="form-group">
													<label class="control-label mb-10 text-left">Deskripsi</label>
													<input type="text" name="deskripsi" value="{{ $buku->deskripsi }}" class="form-control">
												</div>
                                                <div class="form-group">
													<label class="control-label mb-10">Kategori Buku</label>
													<select class="form-control" id="kategori" name="kategori">
                                                        @foreach ($kategori as $kat)
                                                            <option value="{{ $kat->kategori }}">{{ $kat->deskripsi }}</option>
                                                        @endforeach 
													</select> 
												</div>
                                                <div class="form-group">
													<label class="control-label mb-10">Ketersediaan Buku</label>
													<select class="form-control" id="ketersediaan" name="ketersediaan">
                                                        @foreach ($ketersediaan as $ket)
                                                            <option value="{{ $ket->ketersediaan }}">{{ $ket->deskripsi }}</option>
                                                        @endforeach 
													</select> 
												</div>
                                                <div class="form-group">
                                                    <label for="cover_img">Cover Buku</label>
                                                    <input type="file" name="cover_img" id= "cover_img" value="{{ $buku->cover_img }}">
                                                </div>
											</div>
										</div>
									</div>
									<div class="form-actions mt-10">
										<button type="submit" class="btn btn-success  mr-10"> Save</button>
                                        <a class="btn  btn-primary btn-rounded" href="{{ route ('bukuAdmin.index') }}">Cancel</a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection

@section('footer')
    <div class="row">
    	<div class="col-sm-12">
    		<p>2021 &copy; pubBrary. </p>
    	</div>
    </div>
@endsection