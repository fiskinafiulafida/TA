@extends('layouts/mainAdmin')

@section('title','Halaman Member Admin')
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
    		<a href="{{ route ('memberAdmin.index') }}"><div class="pull-left"><i class=" fa fa-snapchat mr-20"></i><span class="right-nav-text">Data Member</span></div><div class="clearfix"></div></a>
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
    <div class="container-fluid">		
		<!-- Title -->
		<div class="row heading-bg">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
			  <h5 class="txt-dark">Data Peminjaman Buku Member</h5>
			</div>
			<!-- Breadcrumb -->
			<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
			  <ol class="breadcrumb">
				<li><a href="index.html">Dashboard</a></li>
				<li><a href="#"><span>table</span></a></li>
				<li class="active"><span>data - table</span></li>
			  </ol>
			</div>
		</div>
		
		<!-- Row -->
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-default card-view">
					<div class="panel-wrapper collapse in">
						<div class="panel-body">
							<div class="table-wrap">
								<div class="table-responsive">
									<table id="datable_1" class="table table-hover display" >
										<thead>
											<tr>
												<th>Id Transaksi</th>
												<th>Id Member</th>
												<th>Id Buku </th>
												<th>Judul Buku</th>
												<th>ISBN Buku</th>
                                                <th>Penerbit Buku</th>
                                                <th>Tanggal Peminjaman</th>
                                                <th>Tanggal Pengembalian</th>
												<th>Status</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tfoot>
											<tr>
												<th>Id Transaksi</th>
												<th>Id Member</th>
												<th>Id Buku </th>
												<th>Judul Buku</th>
												<th>ISBN Buku</th>
                                                <th>Penerbit Buku</th>
                                                <th>Tanggal Peminjaman</th>
                                                <th>Tanggal Pengembalian</th>
												<th>Status</th>
												<th>Aksi</th>
											</tr>
										</tfoot>
										<tbody>
											@foreach ($index as $member)
											<tr>
                                                <td>{{ $member->id_transaksi }}</td>
												<td>{{ $member->id }}</td>
												<td>{{ $member->id_buku }}</td>
												<td>{{ $member->judul_buku }}</td>
												<td>{{ $member->isbn }}</td>
                                                <td>{{ $member->penerbit }}</td>
                                                <td>{{ $member->tgl_pinjam }}</td>
                                                <td>{{ $member->tgl_kembali }}</td>
												<td>
													<!-- <label class="switch">
													  <input type="checkbox" checked>
													  <span class="slider round"></span>
													</label> -->
                        							   <!-- <input data-id = "{{$member->id_status}}" class="toggle-class" type= "checkbox"
													   data-onstyle = "success" data-offstyle = "danger" data-toogle ="toggle" data-on = "Active" data-off = "Inactive"
                        							    {{$member->status ? 'checked' : ''}} > -->
												</td>
												<td>
													<form action="{{ route('peminjamanAdmin.destroy', $member->id_transaksi) }}" method="POST">
													    <a href="{{ route('peminjamanAdmin.show',$member->id_transaksi) }}" class="btn  btn-success btn-rounded">Detail</a>
														<a href="{{ route('peminjamanAdmin.edit',$member->id_transaksi) }}" class="btn  btn-primary btn-rounded">Edit</a>
													    @csrf
                    								    @method('DELETE')
													    <button type="submit" class="btn btn-danger btn-rounded" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
													</form>
												</td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>
	<style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
	<!-- <script>
		$(function(){
			$('.toggle-class').change(function(){
				var status = $(this).prop('checked') == true ? 1 : 2;
				var member_id = $(this).data('id_status');

				s.ajax({
					type: "GET",
					dataType : "json",
					url : "/changeStatus",
					data : {'status':status, 'id_status' : id_status},
					success: function(data){
						console.log('Success')
					}
				});
			});
		})
	</script> -->
@endsection

@section('footer')
    <div class="row">
    	<div class="col-sm-12">
    		<p>2021 &copy; pubBrary. </p>
    	</div>
    </div>
@endsection