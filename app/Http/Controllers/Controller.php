<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
/*
    public function index(Request $request)
    {
     //Filter the items
     $filter = $request->query('filter');
     //dd($filter);
     //
     $categories = Category::all();
     //$items = Item::all();
     $items = Item::where('item->categoryRelationship->name','like', '%'.$filter.'%');
     //dd($items);
     return view('welcome', ['categories'=>$categories, 'items'=>$items, 'filter'=>$filter]);
    }
*/
    public function index(Request $request)
    {
        $categories = Category::all();
        $items = Item::ofCategory($request)->get();

        return view('welcome', ['categories'=>$categories, 'items'=>$items]);
    }

}
