@extends('layouts.app')

@section('content')

<div class="heading text-center">Design</div>

<div class="mb-6 mx-auto text-center w-1/2">
	<p class="leading-normal">I give much of my spare time to design and illustration. In fact, my wife and I are working on children's book right now called <a href="http://thepolarisaway.com" target="_blank" class="italic">The Polaris-Away</a>! For other recent work, find me on <a href="//instagram.com/jamiehowarddraws" target="_blank">Instagram</a> and <a href="//dribbble.com/jamiehoward" target="_blank">Dribbble</a>:</p>
</div>

<div class="flex flex-wrap text-center">
	@foreach($images as $image)
		<div class="w-1/3 h-64 px-2 mb-4">
			<a href="{{$image->link}}" class="" target="_blank">
				<img class="rounded object-cover h-64 w-full" title="{{$image->caption}}" src="{{$image->src}}" />
			</a>
		</div>
	@endforeach
</div>

@endsection
