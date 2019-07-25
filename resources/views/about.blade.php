@extends('layouts.app')

@section('content')

<div class="lg:flex">
	<div class="mb-2 lg:w-1/6 w-full py-3 lg:p-0">
		<img class="w-1/2 lg:w-full lg:mt-3 mx-auto rounded-full" src="/img/jamie-howard-profile.jpeg" alt="Jamie Howard profile image">
	</div>
	
	<div class="text-center lg:text-left lg:w-2/3 lg:px-6">
		<div class="heading w-full text-center lg:text-left">About</div>

		<p class="leading-relaxed mb-4">
			Hey, my name is Jamie. By day, I'm the Director of Development at <a href="http://thinkorange.com" target="_blank">Orange</a>, where I get to write code that helps kids have a better future. Outside of work, <a href="https://instagram.com/jamiehowarddraws" target="_blank">I draw a lot</a>, am starting an <a href="https://morrowmade.com" target="_blank">organization that enables innovators to do great work</a>, and like to <a href="/blog">journal</a> about my explorations in learning to take Jesus seriously.
		</p>

		<div class="bg-gray-200 py-4 text-center">
			Want to chat?
			<a href="https://twitter.com/messages/compose?recipient_id=14348689&text=Hey+there!" target="_blank">Hit me up on Twitter!</a>
		</div>
	</div>
</div>

@endsection
