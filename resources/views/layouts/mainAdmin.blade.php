<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>@yield('title')</title>
	<meta name="description" content="Philbert is a Dashboard & Admin Site Responsive Template by hencework." />
	<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Philbert Admin, Philbertadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
	<meta name="author" content="hencework"/>
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
    
	<!-- Data table CSS -->
	<link href="{{asset('admin/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
	
	<!-- Custom CSS -->
	<link href="{{asset('admin/dist/css/style.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
	<!--Preloader-->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!--/Preloader-->
    <div class="wrapper theme-1-active box-layout pimary-color-green">
		
		<!-- Top Menu Items -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			@yield('nav')
		</nav>
		
		<!-- Left Sidebar Menu -->
		<div class="fixed-sidebar-left">
			@yield('navright')
		</div>

		<!-- Right Sidebar Backdrop -->
		<div class="right-sidebar-backdrop"></div>
		<!-- /Right Sidebar Backdrop -->
			
		<!-- Main Content -->
		<div class="page-wrapper">
			@yield('main')
			<!-- Footer -->
			<footer class="footer container-fluid pl-30 pr-30">
				@yield('footer')
			</footer>
		</div>
    </div>
	<!-- JavaScript -->
	
    <!-- jQuery -->
    <script src="{{asset('admin/vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('admin/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    
	<!-- Data table JavaScript -->
	<script src="{{asset('admin/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('admin/dist/js/dataTables-data.js')}}"></script>
	
	<!-- Slimscroll JavaScript -->
	<script src="{{asset('admin/dist/js/jquery.slimscroll.js')}}"></script>
	
	<!-- Owl JavaScript -->
	<script src="{{asset('admin/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js')}}"></script>
	
	<!-- Switchery JavaScript -->
	<script src="{{asset('admin/vendors/bower_components/switchery/dist/switchery.min.js')}}"></script>
	
	<!-- Fancy Dropdown JS -->
	<script src="{{asset('admin/dist/js/dropdown-bootstrap-extended.js')}}"></script>
	
	<!-- Init JavaScript -->
	<script src="{{asset('admin/dist/js/init.js')}}"></script>
</body>

</html>
