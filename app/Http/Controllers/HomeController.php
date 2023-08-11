<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show()
    {
        return view('frontend.index');
    }

    public function AboutUs()
    {
        return view('frontend.about');
    }


    public function EventPage()
    {
        return view('frontend.event');
    }

    public function UpcomingCourse()
    {
        return view('frontend.upcoming_course');
    }

    public function ContactUs()
    {
        return view('frontend.contact');
    }


}
