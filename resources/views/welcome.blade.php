@extends('layouts.app')
@section('content')

    <hr>
    <h5 class="ml-4">Avaliable Categories - </h5>
    @foreach($categories as $category)
       <h6 class="ml-4 pl-4">NAME : {{$category->name}} | ID : {{$category->id}}</h6>
    @endforeach
    <hr>

    <div class="container">

    <div class="text-center">
         <h3>All items</h3>
    </div>

        @foreach($items as $item)

            <div class="card mb-3">
                <h3 class="text-center">Item name - {{$item->name}}</h3>
                <h6 class="text-center">Category ID - {{$item->category}}</h6>
                <h6 class="text-center">Category name - {{$item->categoryRelationship->name}}</h6>
                <h6 class="text-center">Value - {{$item->value}}</h6>
                <h6 class="text-center">Quality - {{$item->quality}}</h6>
                <form method="GET">
                    <input type="submit" value="Update item" formaction="/api/item/{{$item->id}}/edit" class="form-control btn-success">
                </form>
            </div>

        @endforeach

    </div>
@endsection


