@extends('layouts.main')
@section('main')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h3>{{ $post->title }}</h3>
			<p>{{ $post->content }}</p>
			<div class="well well-sm">
				<p>Diposting oleh {{ $post->user->name }}</p>
				<p>Kategori : {{ $post->category->name }}</p>
			</div>
		</div>
	</div>
@endsection