<?php

namespace laravelCRUD\Http\Controllers;

use Illuminate\Http\Request;
use laravelCRUD\Item;

class itemsCRUDController extends Controller
{

    public function index()
    {
        $items = Item::orderBy('id','DESC')->paginate(5);
        return view('ItemCRUD.index',compact('items'));
    }
    public function create(){
        return view('ItemCRUD.create');
    }
    public function store(Request $request){
        $this->validate($request,[
            "title" => 'required',
            "description" => 'required'
        ]);
        Item::create($request->all());

        return redirect()-> route('itemsCRUD.index')
            ->with('success','Item created successfully');

    }

    public function show($id){
        $itemRequested = Item::find($id);
        return view('ItemCRUD.show',compact('itemRequested'));

    }
    public function destroy($id){
        Item::find($id)->delete();
        return redirect()-> route('itemsCRUD.index')
            ->with('success','Item deleted successfully');

    }
    public function edit(){

    }
}
