<div>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <input type="text" value="" wire:model="search">
        </div>
    </div>
    <div class="row">
        <div class="col-10">
            <div class="articles row justify-content-center">
                @foreach ($articles as $article)
                    <div class="col-mb-6">
                        <div class="card-my-3">
                            <div class="card-body">
                                <h5 class="card-title">{{ $article->title }}</h5>
                                <div class="d-flex justify-content-center">
                                    <span class="badge bg-dark">{{ $article->category->label }}</span>
                                </div>
                                <p class="card-text">{{$article->subtitle}}</p>
                                <a href="{{route('article', $article->slug)}}" class="btn btn-primary">
                                    lire la suite
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="col-2 pt-3">
            @foreach ($category as $item)
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="{{ $item->id }}" wire:model="activeFilters.{{ $item->id }}"/>
                        <label for="{{ $item->id }}" class="custom-control-label">
                            {{ $item->label }}
                        </label>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
