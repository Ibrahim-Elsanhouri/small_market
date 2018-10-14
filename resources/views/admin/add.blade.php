@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add New Product</div>

                <div class="panel-body">
               <div class="container">
               <form action="/addpro" method="post">
               {{csrf_field()}}
               <table class="table">
               <tr>
               <td>product name </td>
               <td><input type="text" name="name"/></td>
               </tr>
               <tr>
               <td>Details</td>
               <td><input type="text" name="datails"/></td>
               </tr>
               <tr>
               <td>price</td>
               <td><input type="text" name="price"/></td>
               </tr>
               <tr>
               <td>discount</td>
               <td><input type="text" name="discount"/></td>
               </tr>
               <tr>
               <td>stock</td>
               <td><input type="text" name="stock"/></td>
               </tr>
               <tr>
               <td><input type="submit" value="Submit"/></td>
               <td><input type="reset" value="Reset"/></td>
               </tr>
               
               </table>
               </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
