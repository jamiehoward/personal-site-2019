<!doctype html>
<html lang="en" class="text-gray-900 antialiased leading-tight">
<head>
	<title>{{config('app.name')}}</title>
	<link href="./css/main.css" rel="stylesheet" />
</head>
<body class="min-h-screen bg-gray-100">
	<div class="container w-2/3 mx-auto p-4">

		<div class="text-center md:text-left">
			<div class="text-4xl inline text-gray-800">Jamie Howard</div>
			<div class="text-xl md:inline md:px-2 text-gray-600">
				Jesus-follower. Serial generalist.
			</div>
		</div>

		<div class="mb-4 text-center md:text-left">
			<div class="inline-block text-blue-700 text-center pr-4 py-2">
				<a class="hover:text-blue-600" href="/">about</a>
			</div>

			<div class="inline-block text-blue-700 text-center pr-4 py-2">
				<a class="hover:text-blue-600" href="/blog">blog</a>
			</div>

			<div class="inline-block text-blue-700 text-center pr-4 py-2">
				<a class="hover:text-blue-600" href="#">code</a>
			</div>

			<div class="inline-block text-blue-700 text-center pr-4 py-2">
				<a class="hover:text-blue-600" href="#">design</a>
			</div>
		</div>

		@yield('content')

		<footer class="mt-6 border-t border-solid border-gray-400">
			<div class="text-gray-500 mt-4">
				Copyright Jamie Howard &copy;{{date('Y')}}
			</div>
		</footer>
	</div>
</body>
</html>