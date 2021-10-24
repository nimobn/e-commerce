<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Category;

class AddFirstSubcategory implements Rule
{
    public $category;
    
    public function __construct($category)
    {
        $this->category = $category;
    }


    public function passes($attribute, $value)
    {
        if(Category::where('path' , ','.$this->category->_id.',')->where('category_name' , $value)->exists())
            return false;
        return true;
    }

    
    public function message()
    {
        return 'این عنوان دسته بندی موجود است.';
    }
}
