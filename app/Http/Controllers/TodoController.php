<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;

class TodoController extends Controller
{
    public function index()
    {
        $items = Todo::all();
        return view('index', ['items' => $items]);
    }
    public function create(ClientRequest $request)
    {
        $form = $request->all();
        Todo::create($form);
        return redirect('/');
    }
    public function update(ClientRequest $request)
    {
        dd($request->all());
        $form = $request->all();
        dd($form);
        unset($form['_token']);
        return response()->json([
        'form' => $form
    ]);
    }

}
