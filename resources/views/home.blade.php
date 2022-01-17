@extends('layouts.main')

@section('container')
    {{-- membuat tampilan sebuah blog --}}
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>asdad</h3>
                    </div>
                    <div class="card-body">
                        <p>asd</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Recent Blog</h3>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            {{-- @foreach ($blogs as $item)
                                <li class="list-group-item">
                                    <a href="{{ route('blog.show', $item->id) }}">{{ $item->title }}</a>
                                </li>
                            @endforeach --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
@endsection