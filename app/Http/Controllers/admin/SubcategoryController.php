<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use App\Rules\EditFirstSubcategory;
use App\Rules\AddSecondSubcategory;
use App\Rules\EditSecondSubcategory;

class SubcategoryController extends Controller
{

    public function store(Request $request, $path)
    {
        $validator = Validator::make($request->all(), [
            'category_name' => ['required', new AddSecondSubcategory($path)]
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator , 'addSecondSubcategory')
                        ->withInput();
        }

        Category::create([
            'category_name' => $request['category_name'],
            'path' => $path,
            'has_child' => false
        ]);

        $parentID = explode(",", $path); 
        $parentCategory = Category::find($parentID[2]);
        $parentCategory->has_child = true;
        $parentCategory->save();
        return redirect()->back();
    }

  
    
    public function destroy($id)
    {
        $category = Category::find($id);  
        $parentID = explode(",", $category->path); 
        $path = $category->path;
        $category->delete();
        $categories = Category::where('path' , $path)->get();  // check is there any other category with this path? (sibling)
        if($categories->isEmpty())
        {
            $rootCategory = Category::find($parentID[2]);
            $rootCategory->has_child = false;  
            $rootCategory->save();
        }
        return redirect()->back();  
    }

    public function updateSubCategory(Request $request , $id){
        $category = Category::find($id);  
        $validator = Validator::make($request->all(), [
            'category_name' => ['required', new EditFirstSubcategory($category)]
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator , 'editFirstSubcategory')
                        ->withInput();
        }
        $category->category_name = $request->category_name;
        $category->save();
        return redirect()->back(); 
    }

    public function updateSubSubCategory(Request $request , $id){
        $category = Category::find($id);  
        $validator = Validator::make($request->all(), [
            'category_name' => ['required', new EditSecondSubcategory($category)]
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator , 'editSecondSubcategory')
                        ->withInput();
        }
        $category->category_name = $request->category_name;
        $category->save();
        return redirect()->back(); 
    }
}
