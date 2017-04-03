@extends('layouts.main')
@section('main')
<div class="row">
	<div class="col-md-8">
		@if(count($posts) > 0)

			@foreach($posts as $post)
			<div class="col-md-12">
				
			
				<h1>{{ $post->title }}</h1>
				<p>{{ substr($post->content, 0, 200) }}{{ strlen($post->content) > 200 ? "..." : "" }}</p>
				<footer>Diposting oleh <cite title="Source Title">{{ $post->user->name }}</cite></footer>
				<footer>Kategori <cite title="Source Title">{{ $post->category->name }}</cite></footer>
				<a href="{{ route('post.show', $post->id) }}"><button class="btn btn-primary" style="margin-top: 8px">Read More</button></a>
			</div>
			@endforeach

		@else

			<h3>Tidak ada Postingan di kategori ini</h3>

		@endif
		
	</div>
</div>
@endsection