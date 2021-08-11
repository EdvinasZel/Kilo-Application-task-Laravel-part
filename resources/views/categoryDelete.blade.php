@extends('layouts.app')
@section('content')


    <hr>
    <h5 class="ml-4">Delete all items from Category</h5>
    <hr>

    <div class="container">

        <form method="DELETE" {{route ('category.destroy')}}>

            @method('DELETE')

            <label for="category"><h5>Choose Category:</h5></label>
            <select name="category" id="category" class="form-control">
                @foreach($categories as $name)
                    <option value="{{$name->id}}">{{$name->name}}</option>
                @endforeach
            </select>

            <hr>

            <input type="submit" value="Delete" formaction="/api/category/{{$name->id}}" class="form-control btn-danger">

        </form>

    </div>

@endsection
