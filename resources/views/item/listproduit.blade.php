@extends('layouts.app')

@section('content')
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
@endsection
