<?php

namespace App\Http\Controllers;

use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles=Role::paginate();
        return view('roles.index',compact('roles'));
    }


    public function create()
    {
        $permissions=Permission::get();
        return view('roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role=Role::create($request->all());
                //actualizar permisos
        $role->permissions()->sync($request->get('permissions'));

        return redirect()->route('roles.edit',$role->id)->with('info','Rol guardado exitosamente');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        
        return view('roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $permissions=Permission::get();
        return view('roles.edit', compact('role','permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        //actualizar role
        $role->update($request->all());
        //actualizar permisos
        $role->permissions()->sync($request->get('permissions'));

        return redirect()->route('roles.edit',$role->id)->with('info','role actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $user)
    {
        $user->delete();

        return back()->with('info','user eliminado correctamente');
    }
}
