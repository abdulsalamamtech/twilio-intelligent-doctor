<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    protected function userId(){
        return request()->user()->id;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::where('user_id', $this->userId())->get();

        return view('frontend.category.index', ['categories' => $categories]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('frontend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $data =  $request->all();
        $data['user_id'] = $this->userId();

        $category = Category::create($data);
        return redirect()->back()->withSuccess('success!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return $category;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('frontend.category.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->update($request->all());
        return redirect()->back()->withSuccess('success!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if($category->user_id !== $this->userId()){
            return redirect()->back()->withErrors('something went wrong, you are unauthorized!')->withInput();
        }

        $category->delete();
        return redirect()->back()->withSuccess('success!');

    }
}
