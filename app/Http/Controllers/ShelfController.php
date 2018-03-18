<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Models\Shelf;

class ShelfController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {
        return Shelf::all();
    }

    public function show($id)
    {
        return Shelf::findOrFail($id)->with('books')->get();
    }

    public function store(Request $request)
    {
        $book = new Shelf;
        $book->fill($request->all());
        $book->save();
    }

    public function update($id, Request $request)
    {
        $book = Shelf::findOrFail($id);
        $book->fill($request->all());
        $book->save();
    }

}
