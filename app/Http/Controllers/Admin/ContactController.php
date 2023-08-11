<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    public function AllContact()
    {
        $allContact = Contact::all();
        return view('admin.contact_page.contact_all', compact('allContact'));
    }


    public function StoreContact(Request $request)
    {
        Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'phone' => $request->phone,
            'message' => $request->message,
            'created_at' => Carbon::now(),
        ]);


        Alert::success('Success', 'Contact Form Submitted Successfully');
        return redirect()->back();
    }


    public function DeleteContact($id)
    {
        Contact::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Contact Message Deleted',
            'alert_type' => 'success'
        );
        return redirect()->route('all.contact')->with($notification);
    }
}
