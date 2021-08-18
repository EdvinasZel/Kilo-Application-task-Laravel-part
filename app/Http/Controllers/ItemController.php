<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemRequest;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\Validator;

class itemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $categorie = Category::all();
        return view('createItem', ['categorie'=>$categorie]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ItemRequest $request)
    {
        //Data validation in Requests/ItemRequest

        Item::create($request->validated());

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*
    public function edit($id)
    {
        $item = Item::find($id);
        $categorie = Category::all();
        return view('updateItem', ['item'=>$item, 'categorie'=>$categorie]);
    }
    */

    public function edit(Item $item)
    {
        $categorie = Category::all();
        return view('updateItem', ['item'=>$item, 'categorie'=>$categorie]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ItemRequest $request, Item $item)
    {

        //Updating the Item
        $item->category = $request->input('category');
        $item->name = $request->input('name');
        $item->value = $request->input('value');
        $item->quality = $request->input('quality');
        $item->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
