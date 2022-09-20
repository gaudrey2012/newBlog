@extends('base')
@section('content')
   <div class="container">
        <h1 class="text-center my-5">Articles</h1>
        <div class="d-flex justify-content-center">
            <a href="{{ route('articles.create') }}" class="btn btn-info my-3">Ajouter un nouvel article</a>
        </div>
        <table class="table table-hover">
            <thead>
                <tr class="table-active">
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Cree le</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr class="">
                        <th >{{ $article->id }}</th>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->dateformatted() }}</td>
                        <td class="d-flex">
                            <a href="{{ route('articles.edit', $article->id)}}" class="btn btn-warning mx-3">Editer</a>
                            <button type="button" class="btn btn-danger" onclick="document.getElementById('model-open-{{$article->id}}').style.display='block'">Supprimer</button>
                            <form action="{{ route('articles.destroy', $article->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <div class="modal" id="model-open-{{$article->id}}">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title">La suppression d'un element est definitive</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" onclick="document.getElementById('model-open-{{$article->id}}').style.display='none'" aria-label="proche">
                                            <span aria-hidden="true"></span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <p>Etes-vous sure de vouloir supprimer cet element?</p>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="submit" class="btn btn-primary">Oui</button>
                                          <button type="button" class="btn btn-secondary" onclick="document.getElementById('model-open-{{$article->id}}').style.display='none'" data-bs-dismiss="modal">Annuler</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                
                            </form>
                            
                        </td>
                    </tr>
                @endforeach
                
            
            </tbody>
        </table>
        <div class="d-flex justify-content-center mt-5">
            {{$articles->links('vendor.pagination.custom')}}
        </div>
   </div>
@endsection

