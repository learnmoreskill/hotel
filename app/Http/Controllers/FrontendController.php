<?php

namespace App\Http\Controllers;

use App\About;
use App\ContactPage;
use App\Event;
use App\EventPage;
use App\Gallery;
use App\GalleryPage;
use App\HotelStaff;
use App\HotelStaffPage;
use App\PageVisit;
use App\Room;
use App\RoomImage;
use App\RoomPage;
use App\Slider;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){

        $post = PageVisit::first();
        $post->page_count = ($post->max('page_count')) + 1;
        $post->save();
        
        $about = About::first();
        $slider = Slider::all();
        $room = Room::where('status',1)->take(6)->get();
        $event = Event::take(3)->orderBy('event_date','DESC')->get();
        $gallery = Gallery::take(6)->get();
        $hotelstaffpage = HotelStaffPage::first();
        return view('frontend.index',compact('about','room','event','gallery','slider','hotelstaffpage'));
    }

    public function about(){
        $about = About::first();
        $hotelstaff = HotelStaff::where('status',1)->orderBy('sort_order')->simplePaginate(3);
        $hotelstaffpage = HotelStaffPage::first();
        return view('frontend.about',compact('about','hotelstaff','hotelstaffpage'));
    }

    public function room(){

        $about = About::first();
        $room = Room::where('status',1)->simplePaginate(6);
        $roompage = RoomPage::first();
        
        return view('frontend.rooms',compact('about','room','roompage'));
    }

    public function roomSingle($slug){

        $about = About::first();
        $room = Room::where('slug',$slug)->first();
        $roompage = RoomPage::first();
        $room_image = RoomImage::where('room_id',$room->id)->get();
        // dd($roompage);
        return view('frontend.roomSingle',compact('about','room','roompage','room_image'));
    }

    public function event(){
        $about = About::first();
        $event = Event::where('status',1)->simplePaginate(3);
        $eventpage = EventPage::first();
        return view('frontend.events',compact('about','event','eventpage'));
    }

    public function eventSingle($slug){
        $about = About::first();
        $event = Event::where('slug',$slug)->first();
        $eventpage = EventPage::first();
        return view('frontend.eventSingle',compact('about','event','eventpage'));
    }

    public function contact(){
        $about = About::first();
        $contactpage = ContactPage::first();
        return view('frontend.contact',compact('about','contactpage'));
    }

    public function gallery(){
        $about = About::first();
        $gallery = Gallery::simplePaginate(12);
        $gallerypage = GalleryPage::first();
        return view('frontend.gallery',compact('about','gallery','gallerypage'));
    }
    
}