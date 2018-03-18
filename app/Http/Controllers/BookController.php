<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Models\Book;

class BookController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {
        return Book::all();
    }

    public function show($id)
    {
        return Book::findOrFail($id);
    }

    public function store(Request $request)
    {
        $book = new Book;
        $book->fill($request->all());
        $book->save();
    }

    public function update($id, Request $request)
    {
        $book = Book::findOrFail($id);
        $book->fill($request->all());
        $book->save();
    }

}
