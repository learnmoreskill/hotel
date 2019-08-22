<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Event;
use App\HotelStaff;
use App\PageVisit;
use Illuminate\Http\Request;
use Auth;
use App\Role;
use App\Room;
use App\Slider;
use App\User;
use Session;

class AdminController extends Controller
{

    public function login(Request $request)
    {
        // dd($request->all());

        if ($request->isMethod('post')) {


            // dd('aaaa');
            $data = $request->input();
            if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
                return redirect()->route('dashboard');
            } else {
                return redirect()->route('admin.login')->with('error', 'Invalid Username and Password');
            }
        }
        if (Auth::guard()->check()) {
            return redirect()->route('dashboard');
        } else {
            return view('admin.auth.login')->with('error', 'Please Login to Access');
        }
    }

    // Logout
    public function logout()
    {
        Session::flush();
        return redirect()->back()->with('flash_message_success', 'Logout Successful');
    }

    public function change_password()
    {
        return view('admin.auth.change_password');
    }

    public function check_password(Request $request)
    {

        if ($request->old_password == Auth::user()->password) {
            $user = User::find(Auth::user()->id);
            $user->password = $request->new_password;
            $user->save();
            return redirect()->route('dashboard')->with('success', 'Password Changed Successful');
        }
        return redirect()->back()->with('error', 'Old password didnot matched');
    }


    public function dashboard()
    {
        $room = Room::all();
        $hotelstaff = HotelStaff::orderBy('sort_order')->take(4)->get();
        $contact = Contact::take(10)->latest()->get();
        $slider = Slider::all();
        $event = Event::take(4)->get();
        $page_visit = PageVisit::first();
        return view('admin.dashboard.index', compact('room', 'page_visit', 'hotelstaff', 'contact', 'slider', 'event'));
    }
}