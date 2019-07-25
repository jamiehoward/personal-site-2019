@extends('layouts.app')

@section('content')

<div class="heading text-center">Design</div>

<div class="mb-3 text-center">
	<p>I love design and illustration. You can check out my recent work on <a href="//instagram.com/jamiehowarddraws" target="_blank">Instagram</a> and <a href="//dribbble.com/jamiehoward" target="_blank">Dribbble</a>:</p>
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
