<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UpcomingBatch;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UpcomingCourseController extends Controller
{
    public function AddUpcomingCourse()
    {
        return view('admin.upcoming_batch.upcoming_batch_add');
    }

    public function AllUpcomingCourse()
    {
        $allUpcomingCourse = UpcomingBatch::all();
        return view('admin.upcoming_batch.upcoming_batch_all', compact('allUpcomingCourse'));
    }

    public function StoreUpcomingCourse(Request $request)
    {
        // dd($request->all());

        UpcomingBatch::insert([
            'course_name' => $request->course_name,
            'duration' => $request->duration,
            'date' => $request->date,
            'time' => $request->time,
            'day' => $request->day,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Upcoming Course Added Successfully',
            'alert_type' => 'success'
        );
        return redirect()->route('all.upcoming-course')->with($notification);
    }



    public function EditUpcomingCourse($id)
    {
        $upcouseInfo = UpcomingBatch::findOrFail($id);
        return view('admin.upcoming_batch.upcoming_batch_edit', compact('upcouseInfo'));
    }

    public function UpdateUpcomingCourse(Request $request)
    {
        $upCourse_id = $request->id;


        UpcomingBatch::findOrFail($upCourse_id)->update([
            'course_name' => $request->course_name,
            'duration' => $request->duration,
            'date' => $request->date,
            'time' => $request->time,
            'day' => $request->day,
        ]);

        $notification = array(
            'message' => 'Upcoming Course updated Successfully',
            'alert_type' => 'success'
        );
        return redirect()->route('all.upcoming-course')->with($notification);
    }


    public function DeleteUpcomingCourse($id)
    {

        UpcomingBatch::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Upcoming Course Deleted Successfully',
            'alert_type' => 'success'
        );
        return redirect()->route('all.upcoming-course')->with($notification);
    }
}
