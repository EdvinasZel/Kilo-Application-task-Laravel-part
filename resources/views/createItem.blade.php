@extends('layouts.app')
@section('content')


    <hr>
    <h5 class="ml-4">Create Item</h5>
    <hr>

    <div class="container">

        <form method="post">

            <label for="category"><h5>Choose Category:</h5></label>
            <select name="category" id="category" class="form-control">
                @foreach($categorie as $name)
                    <option value="{{$name->id}}">{{$name->name}}</option>
                @endforeach
            </select>

            <label for="name" class="pt-3"><h5>Name:</h5></label>
            <input name="name" id="name" class="form-control">

            <label for="value" class="pt-3"><h5>Value:</h5></label>
            <input type="number" name="value" id="value" class="form-control">

            <label for="quality" class="pt-3"><h5>Quality:</h5></label>
            <input type="number" name="quality" id="quality" class="form-control">

            <hr>

            <input type="submit" value="Create" formaction="/api/item" class="form-control btn-success">

        </form>

    </div>

@endsection
