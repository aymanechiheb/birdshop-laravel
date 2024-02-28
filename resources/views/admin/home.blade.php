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

                    <div class="card mb-5">
                        <div class="card-header">Produits en ligne</div>
                        <ul class="list-group list-group-flush">
                            @foreach ($items as $item)
                            <li class="list-group-item">
                                <a href="{{ route('item.edit', $item) }}">{{ $item->Name }}</a>
                                <p>{{ $item->Price }}</p>
                                <p>{{ $item->Stock }}</p>
                                <img src="{{ asset('storage/' . $item->Picture) }}" alt="{{ $item->Name }}">
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
