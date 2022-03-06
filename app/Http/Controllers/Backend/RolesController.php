<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesController extends Controller
{

    public function index()
    {
        $rolelist = Role::all();
        return view('backend.pages.roles.index',compact('rolelist'));
    }


    public function create()
    {
        $permissions = Permission::all();

        return view('backend.pages.roles.create',compact('permissions'));
    }


    public function store(Request $request)
    {

        //Validation
        $request->validate([
            'name' => 'required|max:100|unique.roles'
        ]);

        //Process Data
        Role::create([
            'name' => $request->role_name,
        ]);
       $role = Role::where('name',$request->role_name)->first();
        $permissions = $request->input['permissions'];

        if(!empty($permissions)){

            $role->syncPermissions($permissions);
        }
        // return view('backend.pages.roles.index');
        return back();
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
