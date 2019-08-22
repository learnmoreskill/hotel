<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Gallery;
use App\GalleryPage;
use Illuminate\Support\Facades\Gate;

class GalleryController extends Controller
{

    public function index()
    {

        $gallery = Gallery::all();

        if (Gate::check('view-gallery') || Gate::check('add-gallery')) {

            return view('admin.gallery.index', compact('gallery'));
        } else {
            return view('admin.401errorpage');
        }
    }

    // public function create()
    // {

    //     if (Gate::check('add-gallery')) {
    //         return view('admin.gallery.create');
    //     } else {
    //         return view('admin.401errorpage');
    //     }
    // }



    public function store(Request $request)
    {

        $gallery = new Gallery;
        $gallery->title = $request->title;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = rand(888, 8888) . '.' . $extension;
            $file->move('admin/uploads/gallery/', $filename);
            $gallery->image = 'admin/uploads/gallery/' . $filename;
        }
        $gallery->save();
        return redirect()->back()->with('success', 'Gallery has been created Successfully');
    }


    public function edit($id)
    {

        $gallery = Gallery::findOrFail($id);

        if (Gate::check('update-gallery')) {

            return view('admin.gallery.edit', compact('gallery'));
        } else {
            return view('admin.401errorpage');
        }
    }

    public function update(Request $request, $id)
    {

        $gallery = Gallery::findOrFail($id);
        $data = $request->all();
        $gallery->title = ucwords(strtolower($data['title']));


        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = rand(888, 8888) . '.' . $extension;
            $file->move('admin/uploads/gallery/', $filename);
            $gallery->image = 'admin/uploads/gallery/' . $filename;
        }


        $gallery->save();

        return redirect()->back()->with('success', 'Gallery has been updated Successfully');
    }

    public function delete($id)
    {

        $gallery = Gallery::find($id);

        if (Gate::check('delete-gallery')) {

            $gallery->delete();

            return redirect()->back()->with('success', 'Data was successfully deleted');
        } else {
            return view('admin.401errorpage');
        }
    }

    public function updateStatus($id)
    {

        $gallery = Gallery::find($id);


        if (Gate::check('update-gallery')) {

            if ($gallery->status == 1) {

                $gallery->status = 0;
            } else {
                $gallery->status = 1;
            }

            $gallery->save();

            return redirect()->back()->with('success', 'Status was successfully updated');
        } else {
            return view('admin.401errorpage');
        }
    }

    public function gallerypage()
    {
        $gallerypage = Gallerypage::first();
        if (Gate::check('update-gallery-page')) {
            return view('admin.gallery.gallerypage', compact('gallerypage'));
        } else {
            return view('admin.401errorpage');
        }
    }

    public function gallerypageupdate(Request $request, $id)
    {
        $gallerypage = GalleryPage::find($id);
        $data = $request->all();
        $gallerypage->page_title = ucwords(strtolower($data['page_title']));
        $gallerypage->page_subtitle = ucwords(strtolower($data['page_subtitle']));

        if ($request->hasFile('cover_image')) {
            $file = $request->file('cover_image');
            $extension = $file->getClientOriginalExtension();
            $filename = rand(888, 8888) . '.' . $extension;
            $file->move('adminpanel/uploads/gallery/', $filename);
            $gallerypage->cover_image = 'adminpanel/uploads/gallery/' . $filename;
        }

        $gallerypage->seo_title = $data['seo_title'];
        $gallerypage->seo_slug = $data['seo_slug'];
        $gallerypage->focus_keyphrase = $data['focus_keyphrase'];
        $gallerypage->meta_description = $data['meta_description'];
        $gallerypage->save();


        return redirect()->back()->with(compact('gallerypage'))->with('success', 'Your Page has been updated Successfully');
    }
}