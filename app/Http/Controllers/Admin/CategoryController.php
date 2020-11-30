<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $categories = Category::with('parent')->get();
        return view('admin.pages.category.list', compact('categories'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('admin.pages.category.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        Category::create($request->all());
        return redirect()->route('admin.category.index');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cate = $this->checkCategoryExist($id);
        if($cate){
            $categories = Category::where('categories_id','<>',$id)->get();
            return view('admin.pages.category.edit_category', compact('cate','categories'));
        } else {
            return redirect()->route('admin.category.index');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $cate = $this->checkCategoryExist($id);
        if($cate){
            $cate->name = $request->name;
            $cate->parent_id = $request->parent_id;
            $cate->save();
        }
        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cate = $this->checkCategoryExist($id);
        if($cate){
            $cate->delete();
        }
        return redirect()->route('admin.category.index');
    }
    
    public function checkCategoryExist($id)
    {
        $cate = Category::find($id);
        if(!$cate){
            Session::flash('Error', trans('language.error.error_find'));
            return false;
        } else {
            return $cate;
        }
    }
}
