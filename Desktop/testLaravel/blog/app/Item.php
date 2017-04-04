<?php
/**
 * Created by IntelliJ IDEA.
 * User: Lenovo
 * Date: 04-Apr-17
 * Time: 12:22 PM

 * model for the Items table.

 */

namespace laravelCRUD;


use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public $fillable = ['title','description'];
}