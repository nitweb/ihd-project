<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Contact;
use App\Models\Event;
use App\Models\EventRegistration;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function AdminDashboard()
    {
        $registerStudents = EventRegistration::all();
        $courses = Course::all();
        $events = Event::all();
        $contactQuery = Contact::all();
        return view('admin.index', compact('registerStudents','courses','events','contactQuery'));
    }

    public function AdminLogin()
    {
        return view('auth.login');
    }

    public function AdminProfile()
    {
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('admin.admin_profile_view', compact('adminData'));
    } //end method

    public function AdminProfileStore(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/admin_images/' . $data->photo));
            $fileName = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('upload/admin_images'), $fileName);
            $data['photo'] = $fileName;
        }
        $data->save();

        $notification = array(
            'message' => 'Admin Profile Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    } //end method

    public function ChangeAdminPassword()
    {
        return view('admin.admin_change_password');
    } //end method


    public function UpdateAdminPassword(Request $request)
    {
        // validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_new_password' => 'required|same:new_password'
        ]);


        // match the old password
        $hashedPassword = auth::user()->password;
        if (!Hash::check($request->old_password, $hashedPassword)) {
            return back()->with('error', "Old Password Doesn't Match!");
        } else {
            // update the new password
            User::whereId(auth()->user()->id)->update([
                'password' => Hash::make($request->new_password)
            ]);
            return back()->with('status', 'Password Change Successfully');
        }
    }
    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
}
