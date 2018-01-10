<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="/css/master.css">
</head>
<body>
	<header>
		<nav>
			<a href="/">Home</a>
			<a href="/blog">Blog</a>
		</nav>
	</header><!-- /header -->
	<br>


	@yield('content')


	<br>
	<footer>
		<p>
			&copy Laravel & Rakaal Koding 2017 - 2060
		</p>
	</footer>

	<script src="/js/main.js"></script>
</body>
</html>