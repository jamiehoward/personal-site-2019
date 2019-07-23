@extends('layouts.app')

@section('content')

<div>
	<ul class="list-inside list-disc">
		@foreach($posts as $post)
		<li class="mb-1">
			{{$post['date']}} → 
			<a class="text-blue-700 hover:text-blue-600" href="#">{{$post['title']}}</a>
		</li>
		@endforeach
	</ul>
</div>


@endsection
