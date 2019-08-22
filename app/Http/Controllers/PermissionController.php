<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Permission;
use DB; 
use Illuminate\Support\Facades\Gate;

class PermissionController extends Controller
{
    public function create(){

        $permission = Permission::orderBy('module','ASC')->get();
       
            if (Gate::allows('add-manage-permissions', $permission)) {
        
                return view('admin.permission.create',compact('permission'));

            } else {

                return view('admin.401errorpage');
        }

     
    }

    
    public function store(Request $request){
        $data = $request->all();
        $permission = new Permission;
        $permission->module = $data['module'];
        $slugg = Str::slug($data['module'], '_');
        $permission->add = 'add_'.$slugg;
        $permission->view = 'view_'.$slugg;    
        $permission->update = 'update_'.$slugg;
        $permission->delete = 'delete_'.$slugg;
        $permission->save();
        return redirect()->back()->with('success', 'Permission has been successfully Created');
    }
    
    public function update(Request $request, $id){


        $permission = Permission::findOrFail($id);

        $data = $request->all();

        $permission->module = $data['module'];
        $slugg = Str::slug($data['module'], '_');
        $permission->add = 'add_'.$slugg;
        $permission->view = 'view_'.$slugg;    
        $permission->update = 'update_'.$slugg;
        $permission->delete = 'delete_'.$slugg;
        $permission->save();
        
        return redirect()->back()->with('success', 'Permission has been successfully Updated');
    }
    public function updateStatus($id){
        $permission = Permission::find($id);    
        if($permission->status == 1){
            $permission->status = 0;
        }else{
            $permission->status = 1;
        }   
        $permission->save();
        return back();
    }

    public function delete($id){
        $permission = Permission::findOrFail($id);
        
        if (Gate::allows('delete-manage-permissions', $permission)) {
            $permission->delete();
            return redirect()->back()->with('success', 'Permission has been successfully Deleted');

        } else {

            return view('admin.401errorpage');
    }

        
    }
}