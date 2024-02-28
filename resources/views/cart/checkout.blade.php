@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div id="card-errors"></div>
                <form method="POST" action="" id="payment-form">
                    <label for="card-element">
                        Carte de crédit
                    </label>
                    <div class="d-flex">
                        <div id="card-element" class="flex-grow-1 mr-3"></div>
                        <button class="btn btn-success">Payer </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
