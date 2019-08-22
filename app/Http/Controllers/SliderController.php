<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Gate;
use App\Slider;

class SliderController extends Controller
{

    public function index()
    {

        $slider = Slider::all();
        if (Gate::check('view-sliders')) {
           
            return view('admin.slider.index', compact('slider'));
        } else {
                
            return view('admin.401errorpage');
        }
       
    }

    public function create()
    {
        $slider = Slider::all();

        if (Gate::check('add-sliders') || Gate::check('view-sliders')) {
            
             return view('admin.slider.create', compact('slider'));
        } else {
                
            return view('admin.401errorpage');
        }
    }



    public function store(Request $request)
    {
        $slider = new Slider;
        $slider->caption = $request->caption;
        $slider->sub_caption = $request->sub_caption;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = rand(888, 8888) . '.' . $extension;
            $file->move('admin/uploads/slider/', $filename);
            $slider->image = 'admin/uploads/slider/' . $filename;
        }
        $slider->save();
        return redirect()->route('slider.index')->with('success', 'Slider has been created Successfully');
    }


    public function edit($id)
    {

        $slider =Slider::findOrFail($id);
        if (Gate::check('update-sliders')) {
            
             return view('admin.slider.edit', compact('slider'));
                
       } else {
               
           return view('admin.401errorpage');
       }
    }

    public function update(Request $request, $id)
    {

        $slider =Slider::findOrFail($id);
        $data = $request->all();
        $slider->caption = ucwords(strtolower($data['caption']));
        $slider->sub_caption = ucwords(strtolower($data['sub_caption']));


        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = rand(888, 8888) . '.' . $extension;
            $file->move('admin/uploads/slider/', $filename);
            $slider->image = 'admin/uploads/slider/' . $filename;
        }


        $slider->save();

        return redirect()->route('slider.index')->with('success', 'Slider has been updated Successfully');
    }

    public function delete($id)
    {

        $slider = Slider::find($id);

        if (Gate::check('delete-sliders')) {
            
            $slider->delete();

         return redirect()->route('slider.index')->with('success', 'Data was successfully deleted');
           
               
      } else {
              
          return view('admin.401errorpage');
      }
        
    }

    public function updateStatus($id)
    {

        $slider =Slider::find($id);

        if (Gate::check('update-sliders')) {
            if ($slider->status == 1) {
                $slider->status = 0;
            } else {
                $slider->status = 1;
            }
            $slider->save();

            return redirect()->back()->with('success', 'Status was successfully updated');
        } else {
                
            return view('admin.401errorpage');
        }
    }
}