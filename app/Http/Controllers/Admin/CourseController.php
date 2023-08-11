<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    public function AllCourse()
    {
        $allCourses = Course::all();
        return view('admin.courses_page.course_all', compact('allCourses'));
    }
    // end method

    public function AddCourse()
    {
        return view('admin.courses_page.course_add');
    }

    public function EditCourse($id)
    {
        $courseInfo = Course::findOrFail($id);
        return view('admin.courses_page.course_edit', compact('courseInfo'));
    }


    public function StoreCourse(Request $request)
    {
        if ($request->file('course_image')) {
            $image = $request->file('course_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

            // Image::make($image)->resize(320, 230)->save('upload/course_images/' . $name_gen);
            Image::make($image)->resize(730, 525)->save('upload/course_images/' . $name_gen);
            $save_url = 'upload/course_images/' . $name_gen;

            Course::insert([
                'course_name' => $request->course_name,
                'slug' =>  Str::slug($request->slug),
                'course_des' => $request->course_des,
                'course_fee' => $request->course_fee,
                'duration' => $request->duration,
                'course_image' => $save_url,
                'created_at' => Carbon::now()
            ]);

            $notification = array(
                'message' => 'Course Uploaded Successfully',
                'alert_type' => 'success'
            );
        } else {
            Course::insert([
                'course_name' => $request->course_name,
                'slug' =>  Str::slug($request->slug),
                'course_des' => $request->course_des,
                'course_fee' => $request->course_fee,
                'duration' => $request->duration,
                'created_at' => Carbon::now()
            ]);

            $notification = array(
                'message' => 'Course Added Successfully Without Image ',
                'alert_type' => 'success'
            );
        }
        return redirect()->route('all.course')->with($notification);
    } //end method




    public function UpdateCourse(Request $request)
    {
        $course_id = $request->id;
        if ($request->file('course_image')) {

            $courseImg = Course::findOrFail($course_id);
            if ($courseImg->course_image != null) {
                $img = $courseImg->course_image;
                unlink($img);
            }


            $image = $request->file('course_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

            Image::make($image)->resize(320, 230)->save('upload/course_images/' . $name_gen);
            $save_url = 'upload/course_images/' . $name_gen;

            Course::findOrFail($course_id)->update([
                'course_name' => $request->course_name,
                'slug' =>  Str::slug($request->slug),
                'course_des' => $request->course_des,
                'course_fee' => $request->course_fee,
                'duration' => $request->duration,
                'course_image' => $save_url,
                'created_at' => Carbon::now()
            ]);

            $notification = array(
                'message' => 'Course Updated Successfully',
                'alert_type' => 'success'
            );
        } else {
            Course::findOrFail($course_id)->update([
                'course_name' => $request->course_name,
                'slug' =>  Str::slug($request->slug),
                'course_des' => $request->course_des,
                'course_fee' => $request->course_fee,
                'duration' => $request->duration,
                'created_at' => Carbon::now()
            ]);

            $notification = array(
                'message' => 'Course Updated Successfully Without Image ',
                'alert_type' => 'success'
            );
        }
        return redirect()->route('all.course')->with($notification);
    } //end method


    public function DeleteCourse($id)
    {
        $courseImg = Course::findOrFail($id);
        if ($courseImg->course_image != null) {
            $img = $courseImg->course_image;
            unlink($img);
        }

        Course::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Course Deleted Successfully',
            'alert_type' => 'success'
        );
        return redirect()->route('all.course')->with($notification);
    }




    // frontend route
    public function Courses()
    {
        return view('frontend.course');
    }
    public function DetailCourse($slug)
    {
        $courseDetails = Course::where('slug', $slug)->first();
        $courses = Course::orderBy('course_name', 'asc')->get();
        return view('frontend.course_single', compact('courseDetails', 'courses'));
    }
}
