<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\EventPage;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;

class EventController extends Controller
{

    //View Events
    public function index()
    {
        $event = Event::all();
        if (Gate::check('view-events')) {
        return view('admin.event.index', compact('event'));
            
       } else {

           return view('admin.401errorpage');
       }
        
    }

    //Add Events
    public function create()
    {
        if (Gate::check('add-events')) {
            
                 return view('admin.event.create');
                
           } else {
    
               return view('admin.401errorpage');
           }
    }


    //Storing Event Information
    public function store(Request $request)
    {

        $event = new Event;
        $event->title = $request->title;
        $event->event_date = $request->event_date;
        $event->author = $request->author;
        $event->description = $request->description;
        $event->slug = Str::slug($request->title, '-');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = rand(888, 8888) . '.' . $extension;
            $file->move('admin/uploads/event/', $filename);
            $event->image = 'admin/uploads/event/' . $filename;
        }
        $event->save();
        return redirect()->route('event.index')->with('success', 'Room has been created Successfully');
    }


    //Open Edit page for update
    public function edit($id)
    {

        $event = Event::findOrFail($id);

        if (Gate::check('update-events')) {
            
             return view('admin.event.edit', compact('event'));
           
        } else {

            return view('admin.401errorpage');
        }
    }

    //Update Event Information 
    public function update(Request $request, $id)
    {

        $event = Event::findOrFail($id);

        $event->title = $request->title;
        $event->event_date = $request->event_date;
        $event->author = $request->author;
        $event->description = $request->description;
        $event->slug = Str::slug($request->title, '-');



        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = rand(888, 8888) . '.' . $extension;
            $file->move('admin/uploads/hotelstaff/', $filename);
            $event->image = 'admin/uploads/hotelstaff/' . $filename;
        }


        $event->save();

        return redirect()->route('event.index')->with('success', 'Event has been updated Successfully');
    }

    //Delete event by id
    public function delete($id)
    {
        $event = Event::find($id);
        if (Gate::check('delete-events')) {
            $event->delete();

              return redirect()->route('event.index')->with('success', 'Event was successfully deleted');
          
            } else {

                return view('admin.401errorpage');
            }
       
        
    }

    //Update Status of the events
    public function updateStatus($id)
    {

        $event = Event::find($id);

        if (Gate::check('update-events')) {

            if ($event->status == 1) {

                $event->status = 0;
            } else {
                $event->status = 1;
            }
    
            $event->save();
    
            return redirect()->back()->with('success', 'Event Status was successfully updated');
            
          
       } else {

           return view('admin.401errorpage');
       }
        
    }

    public function eventpage()
    {
        $eventpage = EventPage::first();
            if (Gate::check('update-events-page')) {

            return view('admin.event.eventpage', compact('eventpage'));
                    
                
            } else {

                return view('admin.401errorpage');
            }
       
    }

    public function eventpageupdate(Request $request, $id)
    {
        $eventpage = EventPage::find($id);
        
        $data = $request->all();

        // dd($data);  
        $eventpage->page_title = ucwords(strtolower($data['page_title']));
        $eventpage->page_subtitle = ucwords(strtolower($data['page_subtitle']));

        if ($request->hasFile('cover_image')) {
            $file = $request->file('cover_image');
            $extension = $file->getClientOriginalExtension();
            $filename = rand(888, 8888) . '.' . $extension;
            $file->move('admin/uploads/event/', $filename);
            $eventpage->cover_image = 'admin/uploads/event/'. $filename;
        }
        // dd($eventpage->cover_image);
        $eventpage->seo_title = $data['seo_title'];
        $eventpage->seo_slug = $data['seo_slug'];
        $eventpage->focus_keyphrase = $data['focus_keyphrase'];
        $eventpage->meta_description = $data['meta_description'];
        $eventpage->save();

        return redirect()->back()->with('success', 'Your Page has been updated Successfully');
    }
}