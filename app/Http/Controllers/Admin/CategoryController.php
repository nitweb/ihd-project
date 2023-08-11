<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function AllCategory()
    {
        $allCategory = Category::all();
        return view('admin.category.category_all', compact('allCategory'));
    }

    public function AddCategory()
    {
        return view('admin.category.category_add');
    }

    public function StoreCategory(Request $request)
    {
        Category::insert([
            'name' => $request->name,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Category Added Successfully',
            'alert_type' => 'success'
        );
        return redirect()->route('all.category')->with($notification);
    }



    public function EditCategory($id)
    {
        $categoryInfo = Category::findOrFail($id);
        return view('admin.category.category_edit', compact('categoryInfo'));
    }

    public function UpdateCategory(Request $request)
    {
        $cat_id = $request->id;
        Category::findOrFail($cat_id)->update([
            'name' => $request->name,
        ]);

        $notification = array(
            'message' => 'Category Updated Successfully',
            'alert_type' => 'success'
        );
        return redirect()->route('all.category')->with($notification);
    }


    public function DeleteCategory($id)
    {

        Category::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Category Deleted Successfully',
            'alert_type' => 'success'
        );
        return redirect()->route('all.category')->with($notification);
    }
}
