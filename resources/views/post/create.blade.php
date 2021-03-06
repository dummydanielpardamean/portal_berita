@extends('layouts.main')
@section('main')
<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<form action="{{ route('post.store') }}" method="post">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="exampleInputEmail1">Title</label>
				<input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('title') }}">
			</div>
			<div class="form-group">
				<label for="exampleTextarea">Content</label>
				<textarea name="content" class="form-control" id="exampleTextarea" rows="3">{{ old('content') }}</textarea>
			</div>
			<div class="form-group">
				<label for="exampleSelect1">Category</label>
				<select name="category_id" class="form-control" id="exampleSelect1">
					<option>Select Category</option>
					@foreach($categories as $category)
					<option value="{{ $category->id }}" {{ old('category_id') == $category->id ? "selected" : "" }}>{{ $category->name }}</option>
					@endforeach
				</select>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
		@if(count($errors) > 0)
		<h4>Errors :</h4>
		<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
		@endif
	</div>
</div>
@endsection