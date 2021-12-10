@extends('layouts/mainLogReg')

@section('title','Halaman Login')

@section('header')
	<div class="sp-logo-wrap pull-left">
		<a href="index.html">
			<img class="brand-img mr-10" src="{{asset('admin/dist/img/logo.png')}}" alt="brand"/>
			<span class="brand-text">pubBrary</span>
		</a>
	</div>
	<div class="form-group mb-0 pull-right">
		<span class="inline-block pr-10">Don't have an account?</span>
		<a class="inline-block btn btn-info btn-success btn-rounded btn-outline" href="halRegister2">Sign Up</a>
	</div>
	<div class="clearfix"></div>
@endsection

@section('content')
		<div class="table-struct full-width full-height"> 
			<div class="table-cell vertical-align-middle auth-form-wrap">
				<div class="auth-form  ml-auto mr-auto no-float">
					<div class="row">
						<div class="col-sm-12 col-xs-12">
							<div class="mb-30">
								<h3 class="text-center txt-dark mb-10">Sign in to pubBrary</h3>
								<h6 class="text-center nonecase-font txt-grey">Enter your details below</h6>
							</div>	
							<div class="form-wrap">
								<form action="halLogin" method = "POST">
									@csrf
									<div class="form-group">
										<label class="control-label mb-10" for="exampleInputEmail_2">Email address</label>
										<input type="email" class="form-control" required="" id="email" name="email" placeholder="Enter email">
									</div>
									<div class="form-group">
										<label class="pull-left control-label mb-10" for="exampleInputpwd_2">Password</label>
										<a class="capitalize-font txt-primary block mb-10 pull-right font-12" href="forgot-password.html">forgot password ?</a>
										<div class="clearfix"></div>
										<input type="password" class="form-control" required="" id="password" name="password" placeholder="Enter Password">
									</div>
									
									<!-- <div class="form-group">
										<div class="checkbox checkbox-primary pr-10 pull-left">
											<input id="checkbox_2" required="" type="checkbox">
											<label for="checkbox_2"> Keep me logged in</label>
										</div>
										<div class="clearfix"></div>
									</div> -->
									<div class="form-group text-center">
										<button type="submit" class="btn btn-info btn-success btn-rounded">sign in</button>
									</div>
								</form>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
@endsection