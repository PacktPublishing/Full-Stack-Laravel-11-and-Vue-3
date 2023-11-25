<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookStatusController extends Controller
{
    public function __invoke(Request $request, Book $book)
    {
        $request->validate([
            'status' => 'required',
        ]);

        $book->status = $request->status;

        $book->save();

        return response()->json($book, 200);
    }
}
