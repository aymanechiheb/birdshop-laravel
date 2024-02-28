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
            <div class="card mb-5">
                <div class="card-header">Ajouter un Commande</div>
                <ul class="card-body">
                    <form method="POST" action="{{ route('order.store') }}" enctype="multipart/form-data" novalidate>
                        @csrf
                        <div class="form-group">
                            <label for="name">Fullname</label>
                            <input type="text" name="name" value="" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="quantity">quantity </label>
                            <input type="number" name="quantity" value="" id="quantity" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="address">adresse</address></label>
                            <input type="text" name="address" value="" id="address"
                                class="form-control">
                        </div>


                        <input class="btn btn-success" type="submit" value="Mettre en vente">
                    </form>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
