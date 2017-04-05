<?php

namespace laravelCRUD\Http\Controllers;

use Illuminate\Http\Request;
use laravelCRUD\Item;

class itemsCRUDController extends Controller
{

    //this function returns the main view of the blog
    public function index()
    {
        $items = Item::orderBy('id','DESC')->paginate(5);
        return view('ItemCRUD.index',compact('items'));
    }

    //this function takes us to the 'create new item' form
    public function create(){
        return view('ItemCRUD.create');
    }

    /*
     * @params: item title and description
     * adds the item to the corresponding table
     * @returns: main view with success message
     */
    public function store(Request $request){
        $this->validate($request,[
            "title" => 'required',
            "description" => 'required'
        ]);
        Item::create($request->all());

        return redirect()-> route('itemsCRUD.index')
            ->with('success','Item created successfully');

    }

    /*
     * @params: selected item id
     * @returns: item details view
     */
    public function show($id){
        $itemRequested = Item::find($id);
        return view('ItemCRUD.show',compact('itemRequested'));

    }

    /*
     * @params: item id
     * deletes the item from the corresponding table
     * @returns: main view with success message
     */
    public function destroy($id){
        Item::find($id)->delete();
        return redirect()-> route('itemsCRUD.index')
            ->with('success','Item deleted successfully');

    }

    /*
     * @params: item id
     * @returns: item editor view, with the item details as parameter.
     */
    public function edit($id){
        $item = Item::find($id);
        return view('ItemCRUD.edit',compact('item'));
    }

    /*
     * @params: item title,description, and id
     * edits the item in the corresponding table
     * @returns: main view with success message
     */
    public function update(Request $request,$id){
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required'
        ]);

        Item::find($id)-> update($request->all());

        return redirect()-> route('itemsCRUD.index')
            ->with('success','Item edited successfully');
    }
}
