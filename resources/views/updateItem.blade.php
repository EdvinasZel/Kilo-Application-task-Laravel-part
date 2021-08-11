@extends('layouts.app')
@section('content')


    <hr>
    <h5 class="ml-4">Update Item - {{$item->name}} </h5>
    <hr>

    <div class="container">

        <form method="PUT|PATCH">

            <label for="category"><h5>Choose Category:</h5></label>
            <select name="category" id="category" class="form-control">
                @foreach($categorie as $name)
                    <option value="{{$name->id}}">{{$name->name}}</option>
                @endforeach
            </select>

            <label for="name" class="pt-3"><h5>Name:</h5></label>
            <input name="name" id="name" class="form-control" value="{{$item->name}}">

            <label for="value" class="pt-3"><h5>Value:</h5></label>
            <input type="number" name="value" id="value" class="form-control" value="{{$item->value}}">

            <label for="quality" class="pt-3"><h5>Quality:</h5></label>
            <input type="number" name="quality" id="quality" class="form-control" value="{{$item->quality}}">

            <hr>

            <input type="submit" value="Update" formaction="/api/item/{{$item->id}}" class="form-control btn-success">

        </form>

    </div>

@endsection
