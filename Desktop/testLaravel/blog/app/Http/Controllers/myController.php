<?php
/**
 * Created by IntelliJ IDEA.
 * User: Lenovo
 * Date: 04-Apr-17
 * Time: 9:59 AM
 */

namespace laravelCRUD\Http\Controllers;

use laravelCRUD\Http\Controllers\Controller;

class myController extends Controller
{

    public function sayMyName(){
        return view('myPage',['name' => 'Ali']);
    }
}