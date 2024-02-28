@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <table class="table table-striped">
                    <tr>
                        <td></td>
                        <td></td>
                        <td><a href="">-</a>  <a href="">+</a></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="3"></td>
                        <td class="font-weight-bold"></td>
                    </tr>
                </table>
                <a class="btn btn-secondary" href="">Vider le panier</a>
                <a class="btn btn-success" href="">Payer </a>
                <div class="alert alert-primary">
                    Le panier est vide !
                </div>
            </div>
        </div>
    </div>
@endsection
