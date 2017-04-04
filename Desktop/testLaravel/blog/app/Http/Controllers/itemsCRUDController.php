<?php

namespace laravelCRUD\Http\Controllers;

use Illuminate\Http\Request;
use laravelCRUD\Item;

class itemsCRUDController extends Controller
{
    public $list = array(1,2,3);

    public function index()
    {
        $items = Item::orderBy('id','DESC')->paginate(5);
        return view('ItemCRUD.index',compact('items'));
    }
    public function create(){
        return view('ItemCRUD.create');

    }
}
