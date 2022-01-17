@extends('layouts.main')

@section('container')

    <h1>{{ $title }}</h1>

    @foreach ($posts as $post)
        <h1 class="mt-5"><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h1>
        <h6 class="mb-4">By : <a href="/author/{{ $post->user->name }}">{{ $post->user->name }}</a> in Category : <a
                href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a></h6>
        {!! $post->excerpt !!}
        <hr>
    @endforeach
    
    {{ $posts->links() }}

@endsection
