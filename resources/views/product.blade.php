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
                    <td>name</td>
                    <td>{{$product->name}}</td>
                    </tr>
                    <tr>
                    <td>details</td>
                    <td>{{$product->details}}</td>
                    </tr>
                    <tr>
                    <td>price</td>
                    <td>{{$product->price}}</td>
                    </tr>
                    <tr>
                    <td>discount</td>
                    <td>{{$product->discount}}</td>
                    </tr>
                    <tr>
                    <td>stock</td>
                    <td>{{$product->stock}}</td>
                    </tr>
                    <tr>
                    <td>Total Price</td>
                    <td>{{$product->getTotalPriceAttribute()}}</td></tr>
                    </table>
                    <br><br>
                    <form action="/product/{{$product->id}}" method="post">
                    {{csrf_field()}}
                    <table class="table">
                    <tr><th>Comments</th></t>
                    <tr>
                    <td>review</td>
                    <td><input type="text" name="review"/></td>
                    </tr>
                    <tr>
                    
                    <td><input type="submit"value="Add a  review" class="btn btn-primary"/></td>
                    </tr>
</form>

<table class="table">
<tr>
<td>Comments :  {{$product->reviews->count()}}</td>
</tr>
@foreach($product->reviews as $r)
<tr><td>{{$r->review}}</td></tr>
@endforeach 
</table>
            

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
