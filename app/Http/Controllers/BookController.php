<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    
     // Display all books
     public function index(){
        $books = Book::all();
        return view('library' ,[
            'book' => $books
        ]);
    }


    // Store a new book
    public function store(){
        // Validate the request data
        $books = request() -> validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        
        // Create the book
        Book::create($attributes);

        // Redirect to the book index page
        return redirect('/library');
    }

}



