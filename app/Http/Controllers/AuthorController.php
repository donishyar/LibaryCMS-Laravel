<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    // Display all authors
    public function index(){
        $author = Author::all();
        return view('author' ,[
            'author' => $author
        ]);
    }

    // Store a new author
    public function store(){
        // Validate the request data
        $attributes = request() -> validate([
            'author' => 'required'
        ]);
        
        // Create the author
        Author::create($attributes);

        // Redirect to the author index page
        return redirect('/author');
    }

    // Delete an author
    public function destroy (Request $request, $id) {
        // Find the author by id and delete it
        Author::where('id', $id)->delete();
        // Redirect to the author index page
        return redirect('/author');       
    }

    // Edit an author
    public function editAuthor (Request $request, $id) {
        // Find the author by id and pass it to the editAuthor view
        $CatId = Author::find($id);
        return view('editAuthor',[
            'author' => $CatId
        ]); 
    }
    
    // Update an author
    public function saveAuthor(Request $request) {
        // Validate the request data
        $attributes = request()->validate([
            'author' => 'required'
        ]);

        // Find the author by id and update its attributes
        $author = Author::find($request->id);
        $author->update([
            'author'=>$request->author
        ]);    
        // Redirect to the author index page
        return redirect('/author');
    }

    // Search authors
    public function searchAuthor(Request $request){
        // Retrieve the search term from the request
        $search = $request->search;
        
        // Query the Author model to find authors matching the search term
        $author = Author::where('author', 'like', "%$search%")->get();
        
        // Pass the search results to the 'author' view
        return view('author', [
            'author' => $author
        ]);
    }
}
