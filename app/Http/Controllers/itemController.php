<?php

namespace App\Http\Controllers;

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
    public function store(Request $request)
    {
        //validate the data
        $validator = Validator::make($request->all(),[
            'name' => 'required|ends_with:_item',
            'value'=>'required|min:10|max:100|numeric',
            'quality'=>'required|min:-10|max:50|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->messages()
            ], 200);
        }

        //creating new Item
        $item = new Item;
        $item->category = $request->input('category');
        $item->name = $request->input('name');
        $item->value = $request->input('value');
        $item->quality = $request->input('quality');
        $item->save();

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
    public function edit($id)
    {
        $item = Item::find($id);
        $categorie = Category::all();
        //return $item;
        return view('updateItem', ['item'=>$item, 'categorie'=>$categorie]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validate the data
        $validator = Validator::make($request->all(),[
            'name' => 'required|ends_with:_item',
            'value'=>'required|min:10|max:100|numeric',
            'quality'=>'required|min:-10|max:50|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->messages()
            ], 200);
        }

        //Updating the Item
        $item = Item::find($id);
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
