@extends('layouts.app')

@section('content')

<div class="mx-auto w-3/4 md:w-2/3 lg:w-full text-center lg:text-left">
	
	<div class="mb-4">
		<div class="heading w-full text-center lg:text-left">{{$post->title}}</div>

		<p class="text-gray-600 text-xs relative lg:-mt-2">
			Published on {{$post->created_at->format('d F Y ')}}
		</p>
	</div>

</div>

<p class="leading-relaxed text-left">{{$post->content}}</p>
@endsection
