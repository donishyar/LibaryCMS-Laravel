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

    public function destroy (Request $request, $id) {
        Category::where('id', $id)->delete();
        return redirect('/category');       
    }

    public function editCategory (Request $request, $id) {
        $CatId = Category::find($id);
        return view('editCategory',[
            'category' => $CatId
        ]); 
    }
    

    public function saveCategory(Request $request) {
        // dd('hi');
        $attributes = request()->validate([
            'categoryName' => 'required'
        ]);

        $category = Category::find($request->id);
        $category->update([
            'categoryName'=>$request->categoryName
        ]);    
        return redirect('/category');
    }



    public function searchCategory(Request $request){
        $search = $request-> search;
        // dd($request->search);
        $category = Category::where(function($query) use ($search){
            $query->where('categoryName','like',"%$search%");
        })->get();
        return view('resultCategory' ,[
            'category' => $category
        ]);
            
    }


}



// return view('MailMessage.edit', [
//     'MailMessage' => $MailMessage],
//     ["MailMessageTypes" => MailMessageType::toSelectArray()
// ]);