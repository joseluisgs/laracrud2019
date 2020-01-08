<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
// Importamos el modelo
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('/home');
    }
    public function update(Request $request, $id)
    {
        //Validamos los datos
        $request->validate([
            'name'=>'min:4|max:120|required',
            'email'=> 'min:4|max:250|required',
        ]);
        try{
             // Lo encontramos
            $user = User::find($id);
            // Lo actualizamos
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            // Si ha cambiado la imagen y existe la antigua
            if($request->imagen){
                // la borramos si existe
                if(Storage::exists($user->imagen)){
                    Storage::delete($user->imagen);
                }
                // Copiamos la imagen y obtenemos su path
                $user->imagen = $request->file('imagen')->store('storage');
            }
            // Salvamos (actualizamos) en la BD
            $user->save();
            flash('Usuario/a '. $user->name.'  modificado/a con éxito.')->success()->important();
            return redirect()->route('home');
        }catch(\Exception $e){
            flash('Error al modificar el Usuario/a '. $user->name.'.'.$e->getMessage())->error()->important();
            return redirect()->back();
        }
    }

}
