@extends('layouts.front')
@section('content')
<h4> Products</h4>
    @foreach($products as $row)
        @include('product._single_product')
    @endforeach
@endsection