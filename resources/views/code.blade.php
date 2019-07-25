@extends('layouts.app')

@section('content')

<div class="heading text-center md:text-left">Code</div>

<div class="mb-3">
	<p>
	I get to work on some really neat projects. I spend most of my time coding for Orange and Morrowmade, and you can follow me on GitHub for up-to-date coding activity, but if you want the tl;dr, here are some recent projects:
	</p>
</div>

<div>
	<div class="mb-4">
		<h3 class="text-gray-600 font-bold text-lg">Routine Logger</h3>

		<p>
			A simple tracker for anything that can be quantified. <a href="//routine.jamiehoward.co" target="_blank" class="pl-1 text-sm">See more</a>
		</p>
	</div>

	<div class="mb-4">
		<h3 class="text-gray-600 font-bold text-lg">Scavenger Hunt</h3>

		<p>A project that I built to give as a gift to friends and family. <a href="//puzzle.jamiehoward.co" target="_blank" class="pl-1 text-sm">See more</a></p>
	</div>

	<div class="mb-4">
		<h3 class="text-gray-600 font-bold text-lg">Versus</h3>

		<p class="mb-3">
			A notecard game-turned command line RPG. <a href="//github.com/jamiehoward/versus" target="_blank" class="pl-1 text-sm">See more</a>
		</p>

		<img class="rounded w-screen md:w-128" src="https://github.com/jamiehoward/versus/raw/master/demonstration.gif" width="100%" alt="Versus RPG demonstration">
	</div>
</div>


@endsection
