@extends('backend::layouts.master')

@section('content')
    <div class="container bg-grey mt-3" style="height: 50px">

    </div>
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('backend.name') !!}
    </p>
@endsection
