<?php
/**
 * Created by IntelliJ IDEA.
 * User: Lenovo
 * Date: 04-Apr-17
 * Time: 10:33 AM
 */

namespace laravelCRUD\Http\Controllers;
use laravelCRUD\Http\Controllers\Controller;

class testCtrl extends Controller
{

    public function Hi(){
        return view('myPage',['name' => 'Ali']);
    }

}