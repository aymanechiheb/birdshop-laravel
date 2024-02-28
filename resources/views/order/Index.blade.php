@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

        </div>

        <div class="card mb-5">
            <div class="card-header">Produits en ligne</div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">fullname</th>
                        <th scope="col">quantity</th>
                        <th scope="col">adresse</th>
                        <th scope="col">User-id</th>
                        <th scope="col">Product-id</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                                {{ $order->clientname }}
                            </th>
                            <td>{{ $order->Total }}</td>
                            <td>{{ $order->adresse }}</td>
                            <td>{{ $order->User_id }}</td>
                            <td>{{ $order->product_id }}</td>


                            {{-- <td>
                                <img src="{{ asset('storage/' . $item->picture) }} ">
                            </td> --}}
                            <td>{{$item->stock}}</td>
                            {{-- <td>
                                <a type="button" class="btn btn-primary"
                                    href="{{ route('item.edit', $item->id) }}">Details</a>
                            </td> --}}

                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>


    </div>
@endsection
