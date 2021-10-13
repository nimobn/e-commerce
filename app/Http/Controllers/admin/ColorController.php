<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Color;
use Illuminate\Support\Str;

class ColorController extends Controller
{
    public function index(){
        $colors = Color::paginate(4);
        return view('admin.colors.index', [
            'colors' => $colors
        ]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'color_name' => 'required|unique:colors|max:50',
            'color_code' => 'required|unique:colors|max:7',
        ]);
        Color::create([
            'color_name' => $request['color_name'],
            'color_code' => Str::upper($request['color_code']),
            'is_active' =>  $request['is_active']
        ]);
        return redirect()->back();
    }


    public function edit($id){
        $color = Color::find($id);
        return view('admin.colors.edit', [
            'color' => $color
        ]);
    }


    public function update(Request $request, $id)
    {
        $color = Color::find($id);
        $validated = $request->validate([
            'color_name' => 'required|unique:colors,color_name,'.$id.',_id|max:50',
            'color_code' => 'required|unique:colors,color_code,'.$id.',_id|max:7',
        ]);
        $color->color_name = $request['color_name'];
        $color->color_code = Str::upper($request['color_code']);
        $color->is_active = $request['is_active'];
        $color->save();
        return redirect(route('admin.colors.index'));
    }


    public function destroy($id)
    {
        $color = Color::find($id);
        $color->delete();
        return redirect()->back();
    }

}
