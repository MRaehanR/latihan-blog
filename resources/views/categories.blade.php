@extends('layouts.main')

@section('container')

    <ul>
        @foreach ($categories as $category)
            <li>
                <h3><a href="/category/{{ $category->slug }}">{{ $category->name }}</a></h3>
            </li>
        @endforeach
    </ul>
@endsection
