@extends('layouts.app')

@section('content')

<div class="mx-auto w-3/4 md:w-2/3 lg:w-full text-center lg:text-left">
	
	<div class="mb-4">
		<div class="heading w-full text-center lg:text-left">{{$post->title}}</div>

		<p class="text-gray-600 text-xs relative lg:-mt-2" title="{{$post->created_at}}">
			Published on {{$post->created_at->format('d F Y')}}
		</p>
	</div>

</div>

<p class="leading-relaxed text-left mb-4">{{$post->content}}</p>

<div class="text-right">
@foreach($post->tags as $tag)
	<a class="text-gray-500 text-sm inline-block" href="/tags/{{$tag->name}}">
		#{{$tag->name}}
	</a>
@endforeach
</div>

@endsection
