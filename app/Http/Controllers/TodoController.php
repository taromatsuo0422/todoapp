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
        unset($form['_token']);
        Todo::create($form);
        return redirect('/');
    }
    public function update(ClientRequest $request)
    {
        $form = $request->all();
        unset($form['_token']);
        Todo::where('id', $request->id)->update($form);
        return redirect('/');
    }
    public function delete(Request $request)
    {
        Todo::find($request->id)->delete();
        return redirect('/');
    }
}
