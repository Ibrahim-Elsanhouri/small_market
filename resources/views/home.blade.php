@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <table class="table">
                    <tr>
                    <td>Product</td>
                    <td>Details</td>
                    </tr>
                    @foreach($products as $product)
                    <tr>
                    <td>{{$product->name}}</td>
                    <td><a href="product/{{$product->id}}">Product Page</a></td>
                    </tr>
                    @endforeach
                    </table>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
