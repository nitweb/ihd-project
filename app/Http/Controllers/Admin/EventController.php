<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\EventRegistration;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;


class EventController extends Controller
{

    public function EventRegistration($slug)
    {
        $singleEvent = Event::where('slug', $slug)->first();
        $events = Event::all();
        return view('frontend.event-registration', compact('events', 'singleEvent'));
    }


    public function EventStoreForm(Request $request)
    {
        EventRegistration::insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'event_topic' => $request->event_topic,
            'created_at' => Carbon::now(),
        ]);


        Alert::success('Success', 'Event Registration Submitted Successfully');
        return redirect()->back();
    }


    public function EventRegisterStudent(){
        $allRegisterStudent = EventRegistration::all();
        return view('admin.event_page.event_register_all',compact('allRegisterStudent'));
    }









    public function AllEvent()
    {
        $allEvent = Event::all();
        return view('admin.event_page.event_all', compact('allEvent'));
    }


    public function AddEvent()
    {
        return view('admin.event_page.event_add');
    }

    public function StoreEvent(Request $request)
    {
        if ($request->file('event_image')) {
            $image = $request->file('event_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

            Image::make($image)->resize(298, 199)->save('upload/event_image/' . $name_gen);
            $save_url = 'upload/event_image/' . $name_gen;


            Event::insert([
                'title' => $request->title,
                'slug' =>  Str::slug($request->title),
                'date' => $request->date,
                'time' => $request->time,
                'event_image' => $save_url,
                'created_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'Event  Added Successfully',
                'alert_type' => 'success'
            );
            return redirect()->route('all.event')->with($notification);
        } else {
            Event::insert([
                'title' => $request->title,
                'date' => $request->date,
                'time' => $request->time,
                'created_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'Event  Added Successfully without Image',
                'alert_type' => 'success'
            );
            return redirect()->route('all.event')->with($notification);
        }
    }



    public function EditEvent($id)
    {
        $eventInfo = Event::findOrFail($id);
        return view('admin.event_page.event_edit', compact('eventInfo'));
    }

    public function UpdateEvent(Request $request)
    {
        $event_id = $request->id;

        if ($request->file('event_image')) {

            $eventImg = Event::findOrFail($event_id);
            if ($eventImg->event_image != null) {
                $img = $eventImg->event_image;
                unlink($img);
            }

            $image = $request->file('event_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

            Image::make($image)->resize(298, 199)->save('upload/event_image/' . $name_gen);
            $save_url = 'upload/event_image/' . $name_gen;


            Event::findOrFail($event_id)->update([
                'title' => $request->title,
                'date' => $request->date,
                'time' => $request->time,
                'event_image' => $save_url,
            ]);

            $notification = array(
                'message' => 'Event updated Successfully',
                'alert_type' => 'success'
            );
            return redirect()->route('all.event')->with($notification);
        } else {
            Event::findOrFail($event_id)->update([
                'title' => $request->title,
                'date' => $request->date,
                'time' => $request->time,
            ]);

            $notification = array(
                'message' => 'Event updated Successfully without image',
                'alert_type' => 'success'
            );
            return redirect()->route('all.event')->with($notification);
        }
    }


    public function DeleteEvent($id)
    {

        Event::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Event Deleted Successfully',
            'alert_type' => 'success'
        );
        return redirect()->route('all.event')->with($notification);
    }
}
