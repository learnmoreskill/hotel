<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use Illuminate\Support\Facades\Gate;

class AboutController extends Controller
{

    public function about()
    {

        $about = About::first();

        if (Gate::check('add-about') || Gate::check('update-about')) {
            return view('admin.about.aboutus', compact('about'));
        } else {

            return view('admin.401errorpage');
        }
    }

    public function aboutupdate(Request $request, $id)
    {
        $about = About::find($id);
        $data = $request->all();
        $about->page_title = ucwords(strtolower($data['page_title']));
        $about->page_subtitle = ucwords(strtolower($data['page_subtitle']));
        $about->content = $data['content'];
        $about->content_title = ucwords(strtolower($data['content_title']));
        $about->video_link = $data['video_link'];

        if ($request->hasFile('cover_image')) {
            $file = $request->file('cover_image');
            $extension = $file->getClientOriginalExtension();
            $filename = rand(888, 8888) . '.' . $extension;
            $file->move('admin/uploads/about/', $filename);
            $about->cover_image = 'admin/uploads/about/' . $filename;
        }

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = rand(888, 8888) . '.' . $extension;
            $file->move('admin/uploads/about/', $filename);
            $about->image = 'admin/uploads/about/' . $filename;
        }


        $about->seo_title = $data['seo_title'];
        $about->seo_slug = $data['seo_slug'];
        $about->focus_keyphrase = $data['focus_keyphrase'];
        $about->meta_description = $data['meta_description'];
        $about->save();

        return redirect()->back()->with('success', 'Your Page has been updated Successfully');
    }
}