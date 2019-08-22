<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\RoomImage;
use App\RoomPage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Gate;


class RoomController extends Controller
{

    public function index()
    {

        $room = Room::all();
        if (Gate::check('view-hotel-rooms')) {

            return view('admin.room.index', compact('room'));
        } else {

            return view('admin.401errorpage');
        }
    }

    public function create()
    {
        if (Gate::check('add-hotel-rooms')) {
            return view('admin.room.create');
        } else {

            return view('admin.401errorpage');
        }
    }



    public function store(Request $request)
    {

        $room = new Room;
        $room->name = $request->name;
        $room->price = $request->price;
        $room->no_of_rooms = $request->no_of_rooms;
        $room->sort_order = $request->sort_order;
        $room->description = $request->description;
        $room->slug = Str::slug($request->name, '-');


        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = rand(888, 8888) . '.' . $extension;
            $file->move('admin/uploads/room/', $filename);
            $room->image = 'admin/uploads/room/' . $filename;
        }
        $room->save();
        return redirect()->route('room.index')->with('success', 'Room has been added Successfully');
    }


    public function edit($id)
    {

        $room = Room::findOrFail($id);
        if (Gate::check('update-hotel-rooms')) {

            return view('admin.room.edit', compact('room'));
        } else {

            return view('admin.401errorpage');
        }
    }

    public function update(Request $request, $id)
    {

        $room = Room::findOrFail($id);
        $data = $request->all();
        $room->name = ucwords(strtolower($data['name']));
        $room->no_of_rooms = $request->no_of_rooms;
        $room->sort_order = $request->sort_order;
        $room->slug = Str::slug($request->name, '-');

        $room->price = $data['price'];
        $room->description = $data['description'];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = rand(888, 8888) . '.' . $extension;
            $file->move('admin/uploads/room/', $filename);
            $room->image = 'admin/uploads/room/' . $filename;
        }


        $room->save();

        return redirect()->route('room.index')->with('success', 'Room has been updated Successfully');
    }

    public function delete($id)
    {

        $room = Room::find($id);

        if (Gate::check('delete-hotel-rooms')) {

            $room->delete();

            return redirect()->route('room.index')->with('success', 'Data was successfully deleted');
        } else {

            return view('admin.401errorpage');
        }
    }

    public function updateStatus($id)
    {
        $room = Room::find($id);

        if (Gate::check('update-hotel-rooms')) {

            if ($room->status == 1) {
                $room->status = 0;
            } else {
                $room->status = 1;
            }
            $room->save();
            return redirect()->back()->with('success', 'Status was successfully updated');
        } else {

            return view('admin.401errorpage');
        }
    }

    public function addImages($id)
    {
        $rooms = Room::find($id);
        $room_image = RoomImage::where('room_id',$rooms->id)->get();
        return view('admin.room.addImages', compact('rooms','room_image'));
    }

    public function addImagesStore(Request $request)
    {
        if ($request->hasFile('image')) {
            $images = $request->file('image');
            foreach ($images as $file) {
                // $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = rand(888, 8888) . '.' . $extension;
                $file->move('admin/uploads/room/', $filename);
                $room_image = new RoomImage;
                $room_image->room_id = $request->room_id;
                $room_image->image = 'admin/uploads/room/'. $filename;
                $room_image->save();
            }
        }

        return redirect()->back()->with('success', 'Images added successfully');
    }

    public function addImagesDelete($id){
        $room_image = RoomImage::find($id);
        $room_image->delete();
        return redirect()->back()->with('success', 'Image Delete successfully');
        
    }

    public function roompage()
    {
        if (Gate::check('update-hotel-rooms-page')) {

            $roompage = RoomPage::first();
            return view('admin.room.roompage', compact('roompage'));
        } else {

            return view('admin.401errorpage');
        }
    }

    public function roompageupdate(Request $request, $id)
    {
        $roompage = RoomPage::find($id);
        $data = $request->all();
        $roompage->room_title = ucwords(strtolower($data['page_title']));
        $roompage->room_subtitle = ucwords(strtolower($data['page_subtitle']));

        if ($request->hasFile('cover_image')) {
            $file = $request->file('cover_image');
            $extension = $file->getClientOriginalExtension();
            $filename = rand(888, 8888) . '.' . $extension;
            $file->move('admin/uploads/room/', $filename);
            $roompage->cover_image = 'admin/uploads/room/' . $filename;
        }

        $roompage->seo_title = $data['seo_title'];
        $roompage->seo_slug = $data['seo_slug'];
        $roompage->focus_keyphrase = $data['focus_keyphrase'];
        $roompage->meta_description = $data['meta_description'];
        $roompage->save();

        return redirect()->back()->with('success', 'Your Page has been updated Successfully');
    }
}