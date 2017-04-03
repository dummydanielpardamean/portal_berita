@extends('layouts.main')
@section('main')
<div class="row">
    <div class="col-md-8">
        <table class="table">
            <tr>
                <td>No</td>
                <td>Name</td>
                <td>Action</td>
            </tr>
            @foreach($categories as $category)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <a href="{{ route('category.edit', $category->id) }}">Edit</a>
                    <a href="javascript:void(0);" onclick="$(this).find('form').submit();">
						<form action="{{ route('category.destroy', $category->id) }}" method="post">
							{{ csrf_field() }}
							{{ method_field('DELETE') }}
						</form>
						Delete
					</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="col-md-4">
        <h3>Add Category</h3>
        <form action="{{ route('category.store') }}" method="post">
            {{ csrf_field() }}
            <input name="name" type="text" class="form-control">
            <button class="btn btn-primary btn-block" style="margin-top: 8px">Add Category</button>
        </form>
    </div>
</div>
@endsection