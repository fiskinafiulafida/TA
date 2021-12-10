@extends('layouts/mainAdmin')

@section('title','Halaman Kategori Buku')
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
    		<a href="bukuAdmin"><div class="pull-left"><i class="fa fa-shopping-bag mr-20"></i><span class="right-nav-text">Data Buku</span></div><div class="clearfix"></div></a>
    	</li>
    	<li>
    		<a href="kategori"><div class="pull-left"><i class="zmdi zmdi-book mr-20"></i><span class="right-nav-text">Kategori Buku</span></div><div class="clearfix"></div></a>
    	</li>
		<li>
    		<a href="memberAdmin"><div class="pull-left"><i class=" fa fa-snapchat mr-20"></i><span class="right-nav-text">Data Member</span></div><div class="clearfix"></div></a>
    	</li>
		<li>
    		<a href="peminjamanAdmin"><div class="pull-left"><i class="fa fa-credit-card-alt mr-20"></i><span class="right-nav-text"> Peminjaman Buku</span></div><div class="clearfix"></div></a>
    	</li>
        <li>
    		<a href="ketersediaanAdmin"><div class="pull-left"><i class="fa fa-credit-card-alt mr-20"></i><span class="right-nav-text"> Ketersediaan Buku</span></div><div class="clearfix"></div></a>
    	</li>
		<li>
    		<a href="aboutAdmin"><div class="pull-left"><i class="fa fa-wpforms mr-20"></i><span class="right-nav-text">About</span></div><div class="clearfix"></div></a>
    	</li><li>
    		<a href="kontakAdmin"><div class="pull-left"><i class=" fa fa-braille mr-20"></i><span class="right-nav-text">Kontak</span></div><div class="clearfix"></div></a>
    	</li>
    </ul>
@endsection
@section('main')
        <div class="panel-wrapper collapse in">
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-12 col-xs-12">
							<div class="form-wrap">
								<form method="POST" action="{{ route ('kategori.store')}}">
                                    @csrf
									<div class="form-body">
										<h6 class="txt-dark capitalize-font"><i class="fa fa-credit-card-alt"></i> FROM TAMBAH KATEGORI BUKU</h6>
										<hr class="light-grey-hr"/>
										<div class="row">
											<div class="col-md-12 ">
												<div class="form-group">
													<label class="control-label mb-5">Nama Kategori Buku</label>
													<input type="text" name="deskripsi" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<div class="form-actions mt-10">
										<button type="submit" class="btn btn-success  mr-10"> Save</button>
                                        <a class="btn  btn-primary btn-rounded" href="{{ route ('kategori.index') }}">Cancel</a>
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