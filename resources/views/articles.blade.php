@extends('base')

@section('content')
    <div class="jumbotron">
        <h1 class="display-3 text-center">article</h1>
        <div class="container">
            @livewire('filters', ['category' => $category])
        </div>
       {{-- <div class="d-flex justify-content-center mt-5">
        {{$articles->links('vendor.pagination.custom')}} --}}
    </div>
    </div>
@endsection