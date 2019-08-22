<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HotelStaff;
use App\HotelStaffPage;
use App\Role;
use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;

class HotelStaffController extends Controller
{
    //view Hotel Staff
    public function index()
    {
        $hotelstaff = HotelStaff::with('role')->get();

        if (Gate::check('view-hotel-staffs')) {
       
         return view('admin.hotelstaff.index', compact('hotelstaff'));
        } else {
            return view('admin.401errorpage');
        }
    }


    public function create()
    {
        $role = Role::where('slug','!=','superadmin')->get();
        if (Gate::check('add-hotel-staffs')) {
                return view('admin.hotelstaff.create',compact('role'));
       
           } else {
               return view('admin.401errorpage');
           }
    }


    public function store(Request $request)
    {
        // Request()->validate([
        //     'name' => 'required|max:255',
        //     'designation' => 'required|max:255',
        //     'image' => 'required|mimes:jpeg,png,jpg,JPEG,JPG,PNG',
        //     'address' => 'required|max:255',
        //     'short_description' => 'required',
        //     'sort_order' => 'required',
        //     'mobile_no' => 'required|max:10',

        // ]);

        $data = $request->all();
        $hotelstaff = new HotelStaff;
        $hotelstaff->name = ucwords(strtolower($data['name']));
        $hotelstaff->slug = Str::slug($request->name, '-');
        $hotelstaff->designation = ucwords(strtolower($data['designation']));
        $hotelstaff->short_description = $data['short_description'];
        $hotelstaff->sort_order = $data['sort_order'];
        $hotelstaff->address = $data['address'];
        $hotelstaff->phone_no = $data['phone_no'];
        $hotelstaff->mobile_no = $data['mobile_no'];
        $hotelstaff->role_id = $data['role_id'];
        $hotelstaff->email = $data['email'];



        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = rand(888, 8888) . '.' . $extension;
            $file->move('admin/uploads/hotelstaff/', $filename);
            $hotelstaff->image = 'admin/uploads/hotelstaff/' . $filename;
        }

        $hotelstaff->facebook = $data['facebook'];
        $hotelstaff->twitter = $data['twitter'];
        $hotelstaff->instagram = $data['instagram'];
        $hotelstaff->linkedin = $data['linkedin'];

        $hotelstaff->save();


        $user = new User;
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = bcrypt('hotel123');
        $user->role_id = $data['role_id'];
        $user->save();
    
        return redirect()->route('hotelstaff.index')->with('success', 'Hotel Staff has been created Successfully');
    }


    public function edit($id)
    {
        $hotelstaff = HotelStaff::findOrFail($id);
        $role = Role::where('slug','!=','superadmin')->get();
        if (Gate::check('update-hotel-staffs')) {
            return view('admin.hotelstaff.edit', compact('hotelstaff','role'));
   
        } else {
            return view('admin.401errorpage');
        }
    }


    public function update(Request $request, $id)
    {
        $hotelstaff = HotelStaff::findOrFail($id);
        
        
        $data = $request->all();
// dd($data);
        $user = User::where('email',$data['email'])->first();
        
        if(is_null($user)){
                $user = new User; 
                $user->name = $data['name'];
                $user->email = $data['email'];
                $user->password = bcrypt('hotel123');
                $user->role_id = $data['role_id'];
                $user->save();             
        }


        $hotelstaff->name = ucwords(strtolower($data['name']));
        $hotelstaff->slug = Str::slug($request->name, '-');
        $hotelstaff->designation = ucwords(strtolower($data['designation']));
        $hotelstaff->short_description = $data['short_description'];
        $hotelstaff->sort_order = $data['sort_order'];
        $hotelstaff->address = $data['address'];
        $hotelstaff->phone_no = $data['phone_no'];
        $hotelstaff->mobile_no = $data['mobile_no'];
        $hotelstaff->role_id = $data['role_id'];
        $hotelstaff->email = $data['email'];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = rand(888, 8888) . '.' . $extension;
            $file->move('admin/uploads/hotelstaff/', $filename);
            $hotelstaff->image = 'admin/uploads/hotelstaff/' . $filename;
        }

        $hotelstaff->facebook = $data['facebook'];
        $hotelstaff->twitter = $data['twitter'];
        $hotelstaff->instagram = $data['instagram'];
        $hotelstaff->linkedin = $data['linkedin'];

        $hotelstaff->save();

        return redirect()->route('hotelstaff.index')->with('success', 'Hotel Staff has been updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $hotelstaff = HotelStaff::findOrFail($id);

         if (Gate::check('delete-hotel-staffs')) {
          
            $hotelstaff->delete();
            
            return redirect()->back()->with('success', 'Hotel Staff has been successfully Deleted');
        } else {
            return view('admin.401errorpage');
        }
    }

    public function updateStatus($id)
    {

        $hotelstaff = HotelStaff::find($id);

        if (Gate::check('update-hotel-staffs')) {
           
            if ($hotelstaff->status == 1) {

                $hotelstaff->status = 0;
            } else {
                $hotelstaff->status = 1;
            }

            $hotelstaff->save();

            return redirect()->back()->with('success', 'Status was successfully updated');

        } else {
            return view('admin.401errorpage');
        }
    }

    public function staffpage()
    {
        $staffpage = HotelStaffPage::first();
        if (Gate::check('update-hotel-staff-page')) {
            return view('admin.hotelstaff.staffpage', compact('staffpage'));
            
        } else {
            return view('admin.401errorpage');
        }

        
    }

    public function staffpageupdate(Request $request, $id)
    {
        $staffpage = HotelStaffPage::find($id);
        $data = $request->all();
        $staffpage->content_title = ucwords(strtolower($data['content_title']));
        $staffpage->content_subtitle = ucwords(strtolower($data['content_subtitle']));

        $staffpage->seo_title = $data['seo_title'];
        $staffpage->seo_slug = $data['seo_slug'];
        $staffpage->focus_keyphrase = $data['focus_keyphrase'];
        $staffpage->meta_description = $data['meta_description'];
        $staffpage->save();

        return redirect()->back()->with(compact('staffpage'))->with('success', 'Your Page has been updated Successfully');
    }
}