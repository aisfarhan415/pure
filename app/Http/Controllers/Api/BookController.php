<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        return response()->json(Book::all());
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'title' => 'required|string|max:255',
        //     'author' => 'required|string|max:255',
        //     'published_year' => 'required|integer',
        // ]);

        $book = Book::create($request->all());

        return response()->json($book, 201);
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);

        return response()->json($book);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'author' => 'sometimes|required|string|max:255',
            'published_year' => 'sometimes|required|integer',
        ]);

        $book = Book::findOrFail($id);
        $book->update($request->all());

        return response()->json($book);
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return response()->json(null, 204);
    }
}