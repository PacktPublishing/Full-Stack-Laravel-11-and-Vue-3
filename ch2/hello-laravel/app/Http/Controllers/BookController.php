<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BookController extends Controller
{
    public function __invoke(): View
    {
        $books = Book::all();

        return view('home', compact('books'));
    }
}
