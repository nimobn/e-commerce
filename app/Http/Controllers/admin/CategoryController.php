<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use App\Rules\AddFirstSubcategory;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::whereNull('path')->paginate(10);
        return view('admin.category.index', [
            'categories' => $categories
        ]);
    }

    
    public function create()
    {
        
    }

    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_name' => 'required|unique:categories|max:50'
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator , 'rootCategory')
                        ->withInput();
        }
        Category::create([
            'category_name' => $request['category_name'],
            'path' => null,
            'has_child' => false
        ]);
        return redirect()->back();
    }


    
    public function show($id)
    {
        
    }

    
    public function edit($id)
    {
        $category = Category::find($id);
        $subCategories = Category::where('path' , ','.$category->_id.',')->get();
        return view('admin.category.edit', [
            'category' => $category,
            'subCategories' => $subCategories
        ]);
    }


    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $validator = Validator::make($request->all(), [
            'category_name' => 'required|unique:categories,category_name,'.$id.',_id|max:50' // unique except itself!
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator , 'editRootCategory')
                        ->withInput();
        }
        $category->category_name = $request['category_name'];
        $category->save();
        return redirect()->back();
    }


    public function destroy($id)
    {
        
        $category = Category::find($id);  
        if($category->path)
        {
            $rootID = explode(",", $category->path); 
            $children = Category::where('path' , 'LIKE', '%'.$category->_id.'%' )->delete();
            $category->delete();
            $categories = Category::where('path' , ','.$rootID[1].',')->get();  // check is there any other category with this path? (sibling)
            if($categories->isEmpty())
            {
                $rootCategory = Category::find($rootID[1]);
                $rootCategory->has_child = false;  
                $rootCategory->save();
            }
                
            return redirect()->back();  
        } else 
        {
            $children = Category::where('path' , 'LIKE', '%'.$category->_id.'%' )->delete();
            $category->delete();  // here category is root exactly
            return redirect()->back();
        }
        
        
    }

    public function subCategory(Request $request , Category $category){
        $validator = Validator::make($request->all(), [
            'category_name' => ['required', new AddFirstSubcategory($category)]
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator , 'addFirstSubcategory')
                        ->withInput();
        }

        Category::create([
            'category_name' => $request['category_name'],
            'path' => ','.$category->_id.',',
            'has_child' => false
        ]);
        
        $category->has_child = true;
        $category->save();
        return redirect()->back();
    }
}
