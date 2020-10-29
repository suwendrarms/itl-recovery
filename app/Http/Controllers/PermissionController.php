<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permission;

class PermissionController extends Controller
{
    public function index(){

        $permissions = Permission::all();

       
       // dd($permissions);
        return view('usermgt.permision',compact('permissions'));
    }

    public function store(Request $request)
    {
      // dd( $request->name);
       
        $this->validate($request, [
            'name' => 'required|unique:permissions',
            'display_name' => 'required',
            'description' => 'required',
        ]);

        $permissions = Permission::create([
            'name' => $request->name,
            'display_name' => $request->display_name,
            'description' => $request->description,
        ]);

        return redirect()->route('user.permission')->with('success','data save successfully');
    }

    public function destroy($id)
    {
           
      $permissions = Permission::findOrFail($id);
      $permissions->delete();
      return redirect()->route('permissions.index')->with('success', trans('general.form.flash.deleted',['name' => $permissions->name]));

    }

    public function edit($id){
        $permission = Permission::findOrFail($id);
        return view('usermgt.permision',compact('permission'));
    }
}
