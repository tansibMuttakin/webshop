@extends('layouts.app')

@section('content')
<h2>Submit Your Shop</h2>

<form action="{{route('shops.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Name of the Shop</label>
        <input type="text" name="name" id="" class="form-control" placeholder="Name of Your Shop" aria-describedby="helpId">
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" class="form-control" id="" rows="4"></textarea>
    </div>

    <button class="btn btn-primary" type="submit">Submit</button>

</form>



@endsection