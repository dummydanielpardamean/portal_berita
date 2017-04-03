@extends('layouts.main')
@section('main')
<div class="row">
	<div class="col-md-10">
		<table class="table">
			<tr>
				<td>No</td>
				<td>Title</td>
				<td>Content</td>
				<td>Category</td>
				<td>Action</td>
			</tr>
			@foreach($posts as $post)
			<tr>
				<td>{{ $loop->iteration }}</td>
				<td><a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a></td>
				<td>{{ substr($post->content, 0, 90) }}{{ strlen($post->content) > 90 ? "..." : "" }}</td>
				<td>{{ $post->category->name }}</td>
				<td>
					<a href="{{ route('post.edit', $post->id) }}">Edit</a>
					<a href="javascript:void(0);" onclick="$(this).find('form').submit();" >
						<form action="{{ route('post.destroy', $post->id) }}" method="post">
							{{ csrf_field() }}
							<input type="hidden" name="_method" value="DELETE">
							
						</form>
						Delete
					</a>
				</td>
			</tr>
			@endforeach
		</table>
	</div>
	<div class="col-md-2">
		<a href="{{ route('post.create') }}"><button class="btn btn-primary btn-block">Add Posts</button></a>
	</div>
</div>
@endsection