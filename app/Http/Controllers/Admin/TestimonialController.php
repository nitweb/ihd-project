<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class TestimonialController extends Controller
{
    public function AllTestimonial()
    {
        $allTestimonial = Testimonial::all();
        return view('admin.testimonial_page.testimonial_all', compact('allTestimonial'));
    }


    public function AddTestimonial()
    {
        return view('admin.testimonial_page.testimonial_add');
    }

    public function StoreTestimonial(Request $request)
    {
        if ($request->file('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

            Image::make($image)->resize(140, 140)->save('upload/testimonial_image/' . $name_gen);
            $save_url = 'upload/testimonial_image/' . $name_gen;


            Testimonial::insert([
                'short_comment' => $request->short_comment,
                'long_comment' => $request->long_comment,
                'customer_name' => $request->customer_name,
                'image' => $save_url,
                'created_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'Testimonial  Added Successfully',
                'alert_type' => 'success'
            );
            return redirect()->route('all.testimonial')->with($notification);
        } else {
            Testimonial::insert([
                'short_comment' => $request->short_comment,
                'long_comment' => $request->long_comment,
                'customer_name' => $request->customer_name,
                'created_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'Testimonial  Added Successfully without Image',
                'alert_type' => 'success'
            );
            return redirect()->route('all.testimonial')->with($notification);
        }
    }


    public function EditTestimonial($id)
    {
        $tesInfo = Testimonial::findOrFail($id);
        return view('admin.testimonial_page.testimonial_edit', compact('tesInfo'));
    }

    public function UpdateTestimonial(Request $request)
    {
        $tes_id = $request->id;

        if ($request->file('image')) {

            $tesImg = Testimonial::findOrFail($tes_id);
            if ($tesImg->image != null) {
                $img = $tesImg->image;
                unlink($img);
            }

            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

            Image::make($image)->resize(140, 140)->save('upload/testimonial_image/' . $name_gen);
            $save_url = 'upload/testimonial_image/' . $name_gen;


            Testimonial::findOrFail($tes_id)->update([
                'short_comment' => $request->short_comment,
                'long_comment' => $request->long_comment,
                'customer_name' => $request->customer_name,
                'image' => $save_url,
                'created_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'Testimonial updated Successfully',
                'alert_type' => 'success'
            );
            return redirect()->route('all.testimonial')->with($notification);
        } else {
            Testimonial::findOrFail($tes_id)->update([
                'short_comment' => $request->short_comment,
                'long_comment' => $request->long_comment,
                'customer_name' => $request->customer_name,
                'created_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'Testimonial updated Successfully without image',
                'alert_type' => 'success'
            );
            return redirect()->route('all.testimonial')->with($notification);
        }
    }

    public function DeleteTestimonial($id)
    {

        $tesImg = Testimonial::findOrFail($id);
        if ($tesImg->image != null) {
            $img = $tesImg->image;
            unlink($img);
        }

        Testimonial::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Testimonial Deleted Successfully',
            'alert_type' => 'success'
        );
        return redirect()->route('all.testimonial')->with($notification);
    }
}
