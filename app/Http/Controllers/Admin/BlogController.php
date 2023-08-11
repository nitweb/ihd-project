<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use PhpParser\Node\Stmt\Catch_;

class BlogController extends Controller
{
    public function AllBlog()
    {
        $allBlog = Blog::all();
        return view('admin.blog_content.blog_all', compact('allBlog'));
    }

    public function AddBlog()
    {
        $categories = Category::orderBy('name', 'asc')->get();
        return view('admin.blog_content.blog_add', compact('categories'));
    }

    public function StoreBlog(Request $request)
    {
        if ($request->file('featured_image')) {
            $image = $request->file('featured_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

            Image::make($image)->resize(1000, 667)->save('upload/blog_images/' . $name_gen);
            $save_url = 'upload/blog_images/' . $name_gen;


            Blog::insert([
                'title' => $request->title,
                'slug' =>  Str::slug($request->slug),
                'category_id' => $request->category_id,
                'blog_content' => $request->blog_content,
                'featured_image' => $save_url,
                'created_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'Blog Added Successfully',
                'alert_type' => 'success'
            );
            return redirect()->route('all.blog')->with($notification);
        }
    }

    public function EditBlog($id)
    {
        $categories = Category::orderBy('name', 'asc')->get();
        $blogInfo = Blog::findOrFail($id);
        return view('admin.blog_content.blog_edit', compact('blogInfo', 'categories'));
    }

    public function UpdateBlog(Request $request)
    {
        $blog_id = $request->id;

        if ($request->file('featured_image')) {

            $blogImg = Blog::findOrFail($blog_id);
            if ($blogImg->featured_image != null) {
                $img = $blogImg->featured_image;
                unlink($img);
            }


            $image = $request->file('featured_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

            Image::make($image)->resize(540, 360)->save('upload/blog_images/' . $name_gen);
            $save_url = 'upload/blog_images/' . $name_gen;


            Blog::findOrFail($blog_id)->update([
                'title' => $request->title,
                'slug' =>  Str::slug($request->slug),
                'category_id' => $request->category_id,
                'blog_content' => $request->blog_content,
                'featured_image' => $save_url,
            ]);

            $notification = array(
                'message' => 'Blog Updated Successfully With Image',
                'alert_type' => 'success'
            );
            return redirect()->route('all.blog')->with($notification);
        } else {
            Blog::findOrFail($blog_id)->update([
                'title' => $request->title,
                'category_id' => $request->category_id,
                'blog_content' => $request->blog_content,
            ]);

            $notification = array(
                'message' => 'Blog Updated Successfully Without Image',
                'alert_type' => 'success'
            );
            return redirect()->route('all.blog')->with($notification);
        }
    }

    public function DeleteBlog($id)
    {
        $blogImg = Blog::findOrFail($id);
        $img = $blogImg->featured_image;
        unlink($img);

        Blog::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Blog Deleted Successfully',
            'alert_type' => 'success'
        );
        return redirect()->route('all.blog')->with($notification);
    }



    // frontend method
    public function Blog()
    {
        return view('frontend.blog');
    }
    public function BlogDetails($slug)
    {
        $blogInfo = Blog::where('slug', $slug)->first();
        $categories = Category::orderBy('name', 'asc')->latest()->get();
        return view('frontend.blog_single', compact('blogInfo', 'categories'));
    }

    public function CategoryWiseBlogs($category)
    {
        $blogs = Blog::where('category_id', $category)->get();
        // dd($blogs);
        $categories = Category::orderBy('name', 'asc')->latest()->get();
        return view('frontend.blog_category_wise', compact('blogs', 'categories', 'category'));
    }
}
