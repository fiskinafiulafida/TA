
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield ('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />    
	<link href="{{asset('member/css/templatemo-style.css')}}" rel="stylesheet" />
</head>
<!--

Simple House

https://templatemo.com/tm-539-simple-house

-->
<body> 

	<div class="container">
	<!-- Top box -->
		<!-- Logo & Site Name -->
		<div class="placeholder">
			<div class="parallax-window" data-parallax="scroll" data-image-src="{{asset('member/img/simple-house-01.jpg')}}">
				<div class="tm-header">
					<div class="row tm-header-inner">
						<div class="col-md-6 col-12">
							@yield('banner')
						</div>
						<nav class="col-md-6 col-12 tm-nav">
                            @yield('nav')
						</nav>	
					</div>
				</div>
			</div>
		</div>

		<main>
			<header class="row tm-welcome-section">
                @yield('header')
			</header>
            <div>
                
            </div>
			
			<div class="tm-paging-links">
                @yield('container')
			</div>

			<!-- Gallery -->
			<div class="row tm-gallery">
				@yield('gallery')
			</div>
			<div class="tm-section tm-container-inner">
				@yield('maps')
			</div>
            <!-- <div class="tm-container-inner-2 tm-map-section"> -->
                
			<!-- </div> -->
		</main>

		<footer class="tm-footer text-center">
			<p>Copyright &copy; 2021 pubBrary
            
            | Design: <a rel="nofollow" href="https://templatemo.com">TemplateMo</a></p>
		</footer>
	</div>
	<script src="{{asset('member/js/jquery.min.js')}}"></script>
	<script src="{{asset('member/js/parallax.min.js')}}"></script>
	<script>
		$(document).ready(function(){
			// Handle click on paging links
			$('.tm-paging-link').click(function(e){
				e.preventDefault();
				
				var page = $(this).text().toLowerCase();
				$('.tm-gallery-page').addClass('hidden');
				$('#tm-gallery-page-' + page).removeClass('hidden');
				$('.tm-paging-link').removeClass('active');
				$(this).addClass("active");
			});
		});
	</script>
</body>
</html>