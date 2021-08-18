@extends('layouts.app')
@section('content')

    <hr>
    @if(count($categories)>0)
        <div class="row pl-4">
        <form method="GET" action="{{route('index')}}" class="pb-2 pl-4">
            <label for="category"><h5>Filter by Category:</h5></label>
            <select name="category" id="category" class="form-control">
                @foreach($categories as $name)
                    <option value="{{$name->id}}">{{$name->name}}</option>
                @endforeach
            </select>
            <button type="submit" class="btn-danger">Filter all items in Category</button>
        </form>
        </div>
    @else
        <h4 class="pl-4">No Categories created</h4>
    @endif
        <hr>
    <h5 class="ml-4">Avaliable Categories - </h5>
    @if(count($categories)>0)
    @foreach($categories as $category)
       <div class="row">
           <h6 class="ml-4 pl-4 col-md-2">NAME : {{$category->name}}</h6>
           <h6 class="ml-4 pl-4 col-md-1">ID : {{$category->id}}</h6>
           <form method="POST" action="{{route ('category.destroy', $category->id)}}" class="col-md-2 pb-2">
               @method('DELETE')
               <button type="submit" class="btn-danger">Delete all items in category</button>
           </form>
       </div>
    @endforeach
    @else
        <h4 class="pl-4">No Categories created</h4>
    @endif
    <hr>

    <div class="container">

    <div class="text-center">
         <h3>All items</h3>
    </div>

        @if(count($items)>0)
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
        @else
            <h4>No Items in this category</h4>
        @endif

    </div>
@endsection


