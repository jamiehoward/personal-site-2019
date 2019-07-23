@extends('layouts.app')

@section('content')

<div class="text-2xl text-gray-700 mb-3">About</div>

<div>
	<img class="rounded-lg md:float-right md:w-48 md:ml-12 mb-4" src="/img/jamie-howard-profile.jpeg" alt="Jamie Howard profile image">
	<p class="mb-3">
	Hey, my name is Jamie. By day, I'm the Director of Development at Orange, where I get to write code that helps kids have a better future. Outside of work, I draw a lot, am starting an organization that enables innovators to do great work, and like to journal about my explorations in learning to take Jesus seriously.
	<p>

	<div class="text-xl mb-2 text-gray-700">Elsewhere on the Internet</div>

	<ul class="ml-4">
		<li class="mb-1">
			<a class="text-blue-700 hover:text-blue-600" href="#">Dribbble</a>
		</li>
		<li class="mb-1">
			<a class="text-blue-700 hover:text-blue-600" href="#">GitHub</a>
		</li>
		<li class="mb-1">
			<a class="text-blue-700 hover:text-blue-600" href="#">Instagram</a>
		</li>
		<li class="mb-1">
			<a class="text-blue-700 hover:text-blue-600" href="#">Twitter</a>
		</li>
	</ul>
</div>


@endsection
