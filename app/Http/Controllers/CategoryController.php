<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    public function index(){
        $category = Category::all();
        return view('category' ,[
            'category' => $category
        ]);
    }

    public function store(){
        $attributes = request() -> validate([
            'categoryName' => 'required'
        ]);
        
        Category::create($attributes);

        return redirect('/category');
    }

    public function destroy (Category $category) {
        $category -> delete();
        return redirect('/category');       
    }

    public function edit (Category $category) {
        return view('editCategory',[
            'category' => $category
        ]); 
    }

    public function saveCategory(Category $category){
        $attributes = request() -> validate([
            'categoryName' => 'required'
        ]);
        
        $category->update($attributes);

        return redirect('/');
    }

    public function search(Request $request){
        $search = $request-> search;
        $categories = Todo::where(function($query) use ($search){
            $query->where('categoryName','like',"%$search%");
        })->get();
        return view('category' ,[
            'category' => $category
        ]);
            
    }


}



// return view('MailMessage.edit', [
//     'MailMessage' => $MailMessage],
//     ["MailMessageTypes" => MailMessageType::toSelectArray()
// ]);