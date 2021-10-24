<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Category;

class AddSecondSubcategory implements Rule
{
    public $path;
    
    public function __construct($path)
    {
        $this->path = $path;
    }

    
    public function passes($attribute, $value)
    {
        if(Category::where('path' , $this->path)->where('category_name' , $value)->exists())
            return false;
        return true;
    }

    
    public function message()
    {
        return 'این عنوان دسته بندی موجود است.';
    }
}
