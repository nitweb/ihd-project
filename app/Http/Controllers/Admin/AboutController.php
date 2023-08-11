<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\chooseUs;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class AboutController extends Controller
{

    // about all method
    public function AllAbout()
    {
        $allAbout = About::all();
        return view('admin.about_page.about_all', compact('allAbout'));
    }

    // end home slider
    public function AddAbout()
    {
        return view('admin.about_page.about_add');
    }
    // end home slider

    public function StoreAbout(Request $request)
    {
        if ($request->file('about_image')) {
            $image = $request->file('about_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

            Image::make($image)->resize(540, 360)->save('upload/about_page/' . $name_gen);
            $save_url = 'upload/about_page/' . $name_gen;


            About::insert([
                'short_info' => $request->short_info,
                'about_image' => $save_url,
                'created_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'About Added Successfully',
                'alert_type' => 'success'
            );
            return redirect()->route('all.about')->with($notification);
        }
    }



    public function EditAbout($id)
    {
        $aboutInfo = About::findOrFail($id);
        return view('admin.about_page.about_edit', compact('aboutInfo'));
    }

    public function UpdateAbout(Request $request)
    {
        $about_id = $request->id;

        if ($request->file('about_image')) {

            $aboutImg = About::findOrFail($about_id);
            $img = $aboutImg->about_image;
            unlink($img);

            $image = $request->file('about_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

            Image::make($image)->resize(540, 360)->save('upload/about_page/' . $name_gen);
            $save_url = 'upload/about_page/' . $name_gen;


            About::findOrFail($about_id)->update([
                'short_info' => $request->short_info,
                'about_image' => $save_url,
            ]);

            $notification = array(
                'message' => 'About Updated Successfully With Image',
                'alert_type' => 'success'
            );
            return redirect()->route('all.about')->with($notification);
        } else {
            About::findOrFail($about_id)->update([
                'short_info' => $request->short_info,
            ]);

            $notification = array(
                'message' => 'About Updated Successfully Without Image',
                'alert_type' => 'success'
            );
            return redirect()->route('all.about')->with($notification);
        }
    }


    public function DeleteAbout($id)
    {
        $aboutImg = About::findOrFail($id);
        $img = $aboutImg->about_image;
        unlink($img);

        About::findOrFail($id)->delete();

        $notification = array(
            'message' => 'About Deleted Successfully',
            'alert_type' => 'success'
        );
        return redirect()->route('all.about')->with($notification);
    }



    // all choose us method
    public function AllChoose()
    {
        $allChoose = chooseUs::all();
        return view('admin.home_choose_us.choose_all', compact('allChoose'));
    }

    // end home slider
    public function AddChoose()
    {
        return view('admin.home_choose_us.choose_add');
    }
    // end home slider

    public function StoreChoose(Request $request)
    {
        chooseUs::insert([
            'short_info' => $request->short_info,
            'video_url' => $request->video_url,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Choose Us Added Successfully',
            'alert_type' => 'success'
        );
        return redirect()->route('all.choose')->with($notification);
    }



    public function EditChoose($id)
    {
        $chooseInfo = chooseUs::findOrFail($id);
        return view('admin.home_choose_us.choose_edit', compact('chooseInfo'));
    }

    public function UpdateChoose(Request $request)
    {
        $choose_id = $request->id;

        chooseUs::findOrFail($choose_id)->update([
            'short_info' => $request->short_info,
            'video_url' => $request->video_url,
        ]);

        $notification = array(
            'message' => 'Choose Us updated Successfully',
            'alert_type' => 'success'
        );
        return redirect()->route('all.choose')->with($notification);
    }


    public function DeleteChoose($id)
    {

        chooseUs::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Choose Us Deleted Successfully',
            'alert_type' => 'success'
        );
        return redirect()->route('all.choose')->with($notification);
    }
}
