@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('post.store') }}" method="post">
                @csrf
                <div class="mt-2">
                    <label for="title" class="form-group">Title</label>
                    <input type="text" name="title" id="title" class="form-control">
                    @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mt-2">
                    <label for="description" class="form-group">Description</label>
                    <input type="text" name="description" id="description" class="form-control">
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mt-2">
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
