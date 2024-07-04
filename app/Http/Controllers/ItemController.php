<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index(){
        $items = Item::all();
        return view("index", compact("items"));
    }

    public function add(Request $request){
        $request->validate([
            'name' => 'required',
            'quantity' => 'required|integer',
            'price' => 'required|numeric'
        ]);
        Item::create($request->all());

        return redirect()->route("index")->with("success", "Item added Successfully");
    }

    public function addView(){
        return view("add");
    }
    public function detailsView(Item $item){
        return view("view",compact("item"));
    }
}
