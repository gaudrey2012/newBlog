@extends('base')
@section('content')
    <div class="container">
        <h1 class="text-center mt-5">Poster un nouvel article</h1>
        <form action="{{ route('articles.store')}}" method="post">
            @csrf
            @method('post')
            <div class="col-12">
                <div class="form-group">
                    <label for="">Titre</label>
                    <input type="text" name="title" id="" placeholder="Titre de votre article" class="form-control @error('title') is-invalid @enderror">
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="">Sous-titre</label>
                    <input type="text" name="subtitle" id="" placeholder="Sous-titre de votre article" class="form-control @error('subtitle') is-invalid @enderror">
                    <small class="form-text text-muted">Decrivez le contenu de votre article, le theme traité</small>
                    @error('subtitle')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="">Categorie</label>
                    <select name="category" class="form-control" id="">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->label }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="">Contenu</label>
                    <textarea name="content" id="" cols="30" class="form-control w-100 @error('content') is-invalid @enderror" ></textarea>
                    @error('content')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="d-flex justify-content-center mt-5">
                <button class="btn btn-primary" type="submit">Poster l'article</button>
            </div>
        </form>
    </div>
@endsection