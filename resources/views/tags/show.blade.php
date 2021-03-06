@extends('layouts.app')

@section('content')

<div class="mx-auto w-3/4 md:w-2/3 lg:w-full text-center lg:text-left">
	<div class="heading w-full text-center lg:text-left">#{{ucfirst($tag->name)}}</div>

	@foreach($tag->posts as $post)
	<div class="mb-2">
		<a class="block text-blue-700 font-bold hover:text-blue-600" href="/blog/{{$post->permalink}}">
			{{$post->title}}
		</a>
		<small class="text-gray-600">Published on {{$post->created_at->format('d F Y')}}</small>
	</div>
	@endforeach
</div>

@endsection
