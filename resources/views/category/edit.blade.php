@extends('layouts.main')
@section('main')
<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<form action="{{ route('category.update', $category->id) }}" method="post">
			{{ csrf_field() }}
			{{ method_field('PUT') }}
			<div class="form-group">
				<label for="exampleInputEmail1">Name</label>
				<input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $category->name }}">
			</div>
			<button type="submit" class="btn btn-primary btn-block">Update</button>
		</form>
	</div>
</div>
@endsection