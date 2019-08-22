<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Menu;
use Illuminate\Support\Facades\Gate;

class MenuController extends Controller
{

    public function index(){

        $menu= Menu::all();
        if (Gate::check('view-menu')) {
            return view('admin.menu.index',compact('menu'));
        } else {
            return view('admin.401errorpage');
        }
        
    }

    
    public function store(Request $request){
        
        $menu = Menu::where('title', '=', $request->title)->first();
        if($menu == null){
            $menu= new Menu;
            $menu->title=strtolower($request->title);
            $menu->order_no=$request->order_no;
            
            $menu->save();
            return redirect()->back()->with('success', 'Menu has been added Successfully');
         } else{
            return redirect()->back()->with('error', 'Duplicate Entry for Menu Title');
             
         }
    }


    public function update(Request $request,$id){

        $menu = Menu::findOrFail($id);
        $data = $request->all();
        $menu->title=strtolower($request->title);
        $menu->order_no=$request->order_no;
         
        $menu->save();
       
        return redirect()->back()->with('success', 'Gallery has been updated Successfully');
    }

    public function delete($id){

        $menu = Menu::findOrFail($id);
            if (Gate::check('delete-menu')) {
        
            $menu->delete();

            return redirect()->back()->with('success','Data was successfully deleted');
            } else {
                return view('admin.401errorpage');
            }
    }

    public function updateStatus($id){

        $menu=Menu::find($id);

        if (Gate::check('update-menu')) {
        
            if($menu->status==1){

                $menu->status = 0;
            }
            else{
                $menu->status = 1;
            }
            
            $menu->save();
    
            return redirect()->back()->with('success','Status was successfully updated');
        } else {
            return view('admin.401errorpage');
        }

        
        

        
    }

   
    
}