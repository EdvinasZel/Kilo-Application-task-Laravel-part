@extends('layouts.app')
@section('content')

    <hr>
    <h5 class="ml-4">Create category</h5>
    <hr>

    <div class="container">

        <form method="post">

            <label for="name" class="pt-3"><h5>Name:</h5></label>
            <input name="name" id="name" class="form-control">

            <hr>

            <input type="submit" value="Create" formaction="/api/category" class="form-control btn-success">

        </form>

    </div>

@endsection
