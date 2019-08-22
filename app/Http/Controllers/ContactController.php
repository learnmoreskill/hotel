<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\ContactPage;
use File;
use Illuminate\Support\Facades\Gate;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::latest()->get();
        if (Gate::check('view-contact')) {
            return view('admin.contact.index', compact('contact'));
        } else {

            return view('admin.401errorpage');
        }
    }

    public function delete($id)
    {
        $contact = Contact::findOrFail($id);

        if (Gate::check('delete-contact')) {
            $contact->delete();
            
            return redirect()->back()->with('success', 'Contact has been deleted Successfully');
            
        } else {

            return view('admin.401errorpage');
        }
        
    }

    public function store(Request $request)
    {

        $data = $request->all();
        $contact = new Contact;
        $contact->name = ucwords(strtolower($data['name']));
        $contact->email = strtolower($data['email']);
        $contact->phone = $data['phone'];
        $contact->message = $data['message'];
        $contact->save();
        return redirect()->back()->with('success', 'Your Message has been sent Successfully');
    }

    public function updateStatus($id)
    {

        $contact = Contact::find($id);

        if (Gate::check('view-contact') || Gate::check('update-contact')) {
            
            if ($contact->status == 1) {

                $contact->status = 0;
            } else {
                $contact->status = 1;
            }
    
            $contact->save();
    
            return redirect()->back()->with('success', 'Status was successfully updated');
        } else {

            return view('admin.401errorpage');
        }
       
    }

    public function contactpage()
    {
        $contactpage = ContactPage::first();
        if (Gate::check('update-contact-page')) {
             return view('admin.contact.contactpage', compact('contactpage'));
        } else {

            return view('admin.401errorpage');
        }
    }

    public function contactpageupdate(Request $request, $id)
    {
        $contactpage = ContactPage::find($id);
        $data = $request->all();
        $contactpage->page_title = ucwords(strtolower($data['page_title']));
        $contactpage->page_subtitle = ucwords(strtolower($data['page_subtitle']));

        if ($request->hasFile('cover_image')) {
            $file = $request->file('cover_image');
            $extension = $file->getClientOriginalExtension();
            $filename = rand(888, 8888) . '.' . $extension;
            $file->move('adminpanel/uploads/contact/', $filename);
            $contactpage->cover_image = 'adminpanel/uploads/contact/' . $filename;
        }

        $contactpage->seo_title = $data['seo_title'];
        $contactpage->seo_slug = $data['seo_slug'];
        $contactpage->focus_keyphrase = $data['focus_keyphrase'];
        $contactpage->meta_description = $data['meta_description'];
        $contactpage->save();


        return redirect()->back()->with(compact('contactpage'))->with('success', 'Your Page has been updated Successfully');
    }
}