<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\SiteSetting;
use Image;
use File;
use Illuminate\Support\Facades\Gate;


class SiteSettingController extends Controller
{
    public function sitesetting()
    {

        if (Gate::check('update-site-setting') || Gate::check('add-site-setting')) {
            $site = SiteSetting::first();
              return view('admin.setting.site_settings', compact('site'));
           
        } else {
                
            return view('admin.401errorpage');
        }
        
    }

    public function update(Request $request, $id)
    {
        $site = SiteSetting::findorFail($id);
        $data = $request->all();
        $site->name = ucwords(strtolower($data['name']));
        $site->email = strtolower($data['email']);
        $site->email2 = strtolower($data['email2']);
        $site->phone = $data['phone'];
        $site->phone2 = $data['phone2'];
        $site->mobile = $data['mobile'];
        $site->mobile2 = $data['mobile2'];
        $site->address = $data['address'];
        $site->map_url = $data['map_url'];
        if ($request->hasFile('logo1')) {
            $file = $request->file('logo1');
            $extension = $file->getClientOriginalExtension();
            $filename = rand(888, 8888) . '.' . $extension;
            $file->move('admin/uploads/site/', $filename);
            $site->logo1 = 'admin/uploads/site/' . $filename;
        }

        if ($request->hasFile('logo2')) {
            $file = $request->file('logo2');
            $extension = $file->getClientOriginalExtension();
            $filename = rand(888, 8888) . '.' . $extension;
            $file->move('admin/uploads/site/', $filename);
            $site->logo2 = 'admin/uploads/site/' . $filename;
        }

        $site->facebook = $data['facebook'];
        $site->twitter = $data['twitter'];
        $site->instagram = $data['instagram'];
        $site->youtube = $data['youtube'];
        $site->seo_title= $data['seo_title'];
        $site->seo_slug = $data['seo_slug'];
        $site->focus_keyphrase = $data['focus_keyphrase'];
        $site->meta_description = $data['meta_description'];
        $site->save();

        return redirect()->back()->with('success', 'Your Post has been Updated Successfully');
    }
}