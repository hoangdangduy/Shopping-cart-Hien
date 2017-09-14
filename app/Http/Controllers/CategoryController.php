<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /*
     * get category by id
     */
    public function getShowCategoryById($id) {
        $category = Category::where('id', $id)->get();
        return response()->json($category);
    }

    /*
     * get all category
     */
    public function getShowCategory() {
        $category = Category::get();
        return response()->json($category);
    }

    /*
     * method to store object
     */
    public function postShowCategoryById(Request $request) {
        $category = Category::create(['name' => $request->input('name')]);

        return response()->json($category);
    }

    /*
     * update category by id
     */
    public function putUpdateCategoryById(Request $request) {
        $category = Category::find($request->input('id'));
        $category->name = $request->input('name');
        $category->save();
    }

    /*
     * delete category by id
     */
    public function deleteCategoryById(Request $request) {
        Category::destroy($request->input('id'));
    }



}
