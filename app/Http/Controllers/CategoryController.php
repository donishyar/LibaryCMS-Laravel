<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    // Display all categories
    public function index(){
        $category = Category::all();
        return view('category' ,[
            'category' => $category
        ]);
    }

    // Store a new category
    public function store(){
        // Validate the request data
        $attributes = request() -> validate([
            'categoryName' => 'required'
        ]);
        
        // Create the category
        Category::create($attributes);

        // Redirect to the category index page
        return redirect('/category');
    }

    // Delete a category
    public function destroy (Request $request, $id) {
        // Find the category by id and delete it
        Category::where('id', $id)->delete();
        // Redirect to the category index page
        return redirect('/category');       
    }

    // Edit a category
    public function editCategory (Request $request, $id) {
        // Find the category by id and pass it to the editCategory view
        $CatId = Category::find($id);
        return view('editCategory',[
            'category' => $CatId
        ]); 
    }
    
    // Update a category
    public function saveCategory(Request $request) {
        // Validate the request data
        $attributes = request()->validate([
            'categoryName' => 'required'
        ]);

        // Find the category by id and update its attributes
        $category = Category::find($request->id);
        $category->update([
            'categoryName'=>$request->categoryName
        ]);    
        // Redirect to the category index page
        return redirect('/category');
    }

    // Search categories
    public function searchCategory(Request $request){
        // Retrieve the search term from the request
        $search = $request->search;
        
        // Query the Category model to find categories matching the search term
        $category = Category::where('categoryName', 'like', "%$search%")->get();
        
        // Pass the search results to the 'category' view
        return view('category', [
            'category' => $category
        ]);
    }
}
