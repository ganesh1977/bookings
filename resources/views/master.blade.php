<!DOCTYPE HTML>
<html>
	<head>
		<title>Our Door Media Partner - @yield('title')</title>		
		<meta name="description" content="@yield('description')">
		<link rel="stylesheet" href="{{ asset('css/main.css') }}" />
		
		<link href="{{ asset('css/defult.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('css/reset.css') }}"  rel="stylesheet" type="text/css" />
		<link href="j{{ asset('css/pepole_styles.css') }}"  rel="stylesheet" type="text/css" />
		<link href="{{ asset('css/vendor.css') }}"  rel="stylesheet" type="text/css" />
                
                <script src="{{ asset('js/jquery.min.js') }}"></script>		
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>

	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="{{url('/')}}">Outdoor Media Partner</span></a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="{{url('/')}}">Home</a></li>
					<li><a href="{{url('/knowledge')}}">knowledge</a></li>
					<li><a href="{{url('/news')}}">news</a></li>
					<li><a href="{{url('/events')}}">events</a></li>
					<li><a href="{{url('/resources')}}">resources</a></li>
					<li><a href="{{url('/directories')}}">strategies</a></li>
					<li><a href="{{url('/classifieds')}}">classifieds</a></li>
					<li><a href="{{url('/jobs')}}">jobs</a></li>
					<li><a href="{{url('/blog')}}">blog</a></li>
				</ul>
			</nav>

		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<!--<p>Eleifend vitae urna</p>
						<h2>Generic Page Template</h2> -->
					</header>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
			<div style="width:1000px; height:20px; font-size:9px;  ">
                <marquee behavior="scroll" ><li>Outdoor Media Partner Outdoor Media Partner Outdoor Media Partner Outdoor Media Partner Outdoor Media Partner Outdoor Media Partner Outdoor Media Partner Outdoor Media Partner</li></marquee></div>
				@yield('content')
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
					</ul>
				</div>
				<div class="copyright">
					&copy; Untitled. All rights reserved.
				</div>
			</footer>

		<!-- Scripts -->
			<script type="text/javascript" src="{{ URL::to('js/jquery.min.js') }}"></script>
			<script type="text/javascript" src="{{ URL::to('js/jquery.scrollex.min.js') }}"></script>
			<script type="text/javascript" src="{{ URL::to('js/skel.min.js') }}"></script>
			<script type="text/javascript" src="{{ URL::to('js/util.js') }}"></script>
			<script type="text/javascript" src="{{ URL::to('js/main.js') }}"></script>
	</body>
</html>


