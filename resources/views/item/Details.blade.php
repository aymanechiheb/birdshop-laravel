@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{ $error }}
                    </div>
                @endforeach
                <div class="card">
                    <div class="card-header">Modifier un produit</div>
                    <ul class="card-body">
                        <form method="POST" action="{{ route('item.update', $item) }}" enctype="multipart/form-data"
                            novalidate>
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Nom du produit</label>
                                <input type="text" name="name" value="{{ $item->Name }}" id="name"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="price">Prix (5000 pour 50€)</label>
                                <input type="number" name="price" value="{{ $item->Price }}" id="price"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" name="description" value="{{ $item->Description }}" id="description"
                                    class="form-control">
                            </div>
                            div class="form-group">
                                <label for="description">Stock:</label>
                                <input type="text" name="description" value="{{ $item->Stock }}" id="description"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="picture">Image</label>
                                <input type="file" name="picture" id="picture" class="form-control">
                            </div>
                            <input class="btn btn-success" type="submit" value="Mettre à jour">
                        </form>
                        <a class="btn btn-danger mt-3" href=""
                            onclick="event.preventDefault(); document.getElementById('destroy').submit();">Supprimer</a>
                        <form id="destroy" action="{{ route('item.destroy', $item) }}" method="POST"
                            style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
