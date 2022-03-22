<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    use HasFactory;

    protected $fillable = ['todo'];
    
    public static $rules = array(

    );
    public function getDetail()
    {
        
    }
}
