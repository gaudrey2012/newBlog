@extends('base')

@section('content')
    <div class="jumbotron">
        <h2 class="display-4 text-center">{{ $article->title }}</h1>
        <div class="d-flex justify-content-center my-5">
            <a href="{{ route('articles') }}" class="btn btn-primary">
                Retour
            </a>
        </div>
        <h5 class="text-center my-3 py-3">{{ $article->subtitle }}</h5>
        <div class="d-flex justify-content-center">
            <span class="badge bg-dark">{{ $article->category->label }}</span>
        </div>
        
    </div>

    <div class="container">
        <p class="text-center">
            {{ $article->content }}
        </p>
    </div>
@endsection