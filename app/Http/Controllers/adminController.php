<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
class adminController extends Controller
{
    public function create()
    {
        return view('/admin/registrarAdmin'); 
    }

    public function store(Request $request)
    {
        $admin = new Admin;        

        $admin->name = $request->nombreAdmin;
        $admin->sexo = $request->sexoAdmin;
        $admin->telefono = $request->telefonoAdmin;
        $admin->direccion = $request->direccionAdmin;
        $admin->localidad = $request->localidadAdmin;
        $admin->email = $request->emailAdmin;
        $admin->password = $request->passwordAdmin;        
         $this->validate($request, [
            'email' => 'requiered|unique:admin',
        ]);
       // $admin->timestamps();


        $admin->save(); 

        return redirect('/admin/alta/administrador');
    }

    public function edit($id)
    {

    }

    public function update(Request $request,$id)
    {

    }

    public function destroy($id)
    {

    }

}
