<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $features = Feature::all();
        return view("admin.feature.list", compact("features"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.feature.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            "feature_category"  =>  "required|string|min:3",
            "features"          =>  "required|array",
            "features.*"        =>  "required|string|distinct|min:3",
        ]);
        $feature = new Feature;
        $feature->category = $request->input('feature_category');
        $feature->features = $request->input('features');
        $feature->save();
        return redirect()->route('admin.features.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  object  $feature
     * @return \Illuminate\Http\Response
     */
    public function edit(Feature $feature)
    {
        return view("admin.feature.create", compact("feature"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feature $feature)
    {
        $validator = $request->validate([
            "feature_category"  =>  "required|string|min:3",
            "features"          =>  "required|array",
            "features.*"        =>  "required|string|distinct|min:3",
        ]);
        $feature->category = $request->input('feature_category');
        $feature->features= $request->input('features');
        $feature->save();
        return redirect()->route('admin.features.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feature $feature)
    {
        $feature->delete();
        return redirect()->route("admin.features.list");
    }

    public function destroyItem(Feature $feature, $item)
    {
        $feature->pull('features', $item);
        return redirect()->back()->with(['msg' => 'ویژگی با موفقیت حذف شد']);
    }
}
