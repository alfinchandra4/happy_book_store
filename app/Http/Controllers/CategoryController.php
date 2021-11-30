<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    // [
    //     'category' => 'Fiction',
    // ],[
    //     'category' => 'Science',
    // ],[
    //     'category' => 'Computer',
    // ],

    public function fiction() {
        $books = Book::where('category_id', 1)->paginate(10);
        return view('pages.category.fiction', [
            'books' => $books
        ]);
    }

    public function science() {
        $books = Book::where('category_id', 2)->paginate(10);
        return view('pages.category.science', [
            'books' => $books
        ]);
    }

    public function computer() {
        $books = Book::where('category_id', 3)->paginate(10);
        return view('pages.category.computer', [
            'books' => $books
        ]);
    }
}
