@extends('layouts.main')

@section('container')
    <h1>{{ $post->title }}</h1>
    <h6 class="mb-5">Author : <a href="/author/{{ $post->user->name }}">{{ $post->user->name }}</a>  in Category : <a
            href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a></h6>
    {!! $post->body !!}

    <a href="/posts" class="d-block mt-5 mb-4">Kembali</a>
@endsection
