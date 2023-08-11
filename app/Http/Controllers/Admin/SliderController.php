<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class SliderController extends Controller
{
    public function AllSlider()
    {
        $allSlider = Slider::all();
        return view('admin.home_slider.slide_all', compact('allSlider'));
    }

    // end home slider
    public function AddSlider()
    {
        return view('admin.home_slider.slide_add');
    }
    // end home slider

    public function StoreSlider(Request $request)
    {
        if ($request->file('slider_image')) {
            $image = $request->file('slider_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

            Image::make($image)->resize(1920, 780)->save('upload/home_slider/' . $name_gen);
            $save_url = 'upload/home_slider/' . $name_gen;


            Slider::insert([
                'slider_image' => $save_url,
                'created_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'Banner Image Uploaded Successfully',
                'alert_type' => 'success'
            );

            $notification = array(
                'message' => 'Slider Image Uploaded Successfully',
                'alert_type' => 'success'
            );
            return redirect()->route('all.slide')->with($notification);
        }
    }



    public function EditSlider($id)
    {
        $slideInfo = Slider::findOrFail($id);
        return view('admin.home_slider.slider_edit', compact('slideInfo'));
    }

    public function UpdateSlider(Request $request)
    {
        $slider_id = $request->id;

        $sliderImg = Slider::findOrFail($slider_id);
        $img = $sliderImg->slider_image;
        unlink($img);


        if ($request->file('slider_image')) {
            $image = $request->file('slider_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

            Image::make($image)->resize(1920, 780)->save('upload/home_slider/' . $name_gen);
            $save_url = 'upload/home_slider/' . $name_gen;


            Slider::findOrFail($slider_id)->update([
                'slider_image' => $save_url,
            ]);

            $notification = array(
                'message' => 'Slider Image Uploaded Successfully',
                'alert_type' => 'success'
            );
            return redirect()->route('all.slide')->with($notification);
        }
    }


    public function DeleteSlider($id)
    {
        $sliderImg = Slider::findOrFail($id);
        $img = $sliderImg->slider_image;
        unlink($img);

        Slider::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Slider Image Deleted Successfully',
            'alert_type' => 'success'
        );
        return redirect()->route('all.slide')->with($notification);
    }
}
