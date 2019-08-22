<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Role;
use App\Permission;
use Illuminate\Support\Facades\Gate;


class RoleController extends Controller
{
    public function rolePermission(){

        $role = Role::all();
        $permission = Permission::where('status',1)->get();
        // if (Gate::allows('create-roles', $permission)) {
        
              return view('admin.role.rolePermission',compact('role','permission'));
        // } else {

        //      return view('admin.401errorpage');

        // }
    }

    public function index(){
        
        
        $roles = Role::all();
            // if (Gate::allows('view-roles', $roles)) {
        
            return view('admin.role.allroles')->with(compact('roles'));
            
            // } else {
    
            // return view('admin.401errorpage');
    
            // }
        
    }
    public function create(){
        
        return view('admin.notice.create');
    }
    public function store(Request $request){
        $data = $request->all();
        // dd($data);
        $role = new Role;
        $role->name = ucwords(strtolower($data['name']));
        $role->slug = Str::slug($data['name'],'_');
        // $Mname = $request->input('mod'); 
        // $mno = [];  
        // foreach($Mname as $mn){
        //     $mno = $request->input($mn);
        // }
        // dd($mno);        
        $role->permissions = json_encode($request->input('permission'));   
        $role->save();
        return redirect()->route('roles.index')->with('success', 'Role has been successfully Created');
    }
    public function edit($id){
        $role = Role::findOrFail($id);
        $permission = Permission::where('status',1)->get();
        $permit = json_decode($role->permissions);
       
        
        return view ('admin.role.editRole', compact('role','permission','permit'));
    }
    public function update(Request $request, $id){
        $data = $request->all();  

        // dd($data);          
        $role = Role::findOrFail($id);
        $role->name = ucwords(strtolower($data['name']));
        $role->slug = Str::slug($data['name'],'_');
         
        $role->permissions = json_encode($request->input('permission'));   
        $role->save();
        
        return redirect()->route('roles.index')->with('success', 'Role has been successfully Updated');
    }
    public function updateStatus($id){
        $role = Role::find($id);    
        if (Gate::allows('update-manage-roles', $role)) {
        
            if($role->status == 1){
                $role->status = 0;
            }else{
                $role->status = 1;
            }   
            $role->save();
            return back();

            } else {
    
            return view('admin.401errorpage');
    
            }
       
    }
    public function delete($id){
        $role = Role::findOrFail($id);

        if (Gate::allows('delete-manage-roles', $role)) {
            $role->delete();
            return redirect()->back()->with('success', 'Role has been successfully Deleted');

        } else {
    
             return view('admin.401errorpage');

        }
    }
}