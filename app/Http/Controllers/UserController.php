<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Cliente;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

use App\Http\Requests\UserRequest;
use App\Mail\NuevoUsuario;

class UserController extends Controller
{

    /*
    *
    * @brief
    * @author Jorge Ibarra
    * @param string
    * @return
    *
    */
    public function index(){
        session(['modulo'=>'catalogos']);
        $usuarios = User::orderBy('name')->paginate(config('constantes.itemsPorPagina'));
        return view('usuarios.index')->with('usuarios',$usuarios);
    }

    /*
    *
    * @brief
    * @author Jorge Ibarra
    * @param string
    * @return
    *
    */
    public function create()
    {
        $clientes=Cliente::all();
        return view('usuarios.create',compact('clientes'));
    }

    /*
    *
    * @brief
    * @author Jorge Ibarra
    * @param string
    * @return
    *
    */
    public function store(UserRequest $request)
    {
        
        $password = Str::random(8);
        $usuario = new User();
        $usuario->name = $request->name;
        $usuario->perfil = $request->perfil;
        $usuario->email = $request->email;
        $usuario->status = $request->status;
        $usuario->cliente_id = $request->cliente_id ?? NULL;
        $usuario->password = Hash::make($password);
        $usuario->save();

        $datos = new \stdClass();
        $datos->usuario = $usuario->email;
        $datos->password = $password;
        $datos->nombre = $request->name;
        $datos->email = $request->email;
        Mail::to($request->email)->send(new NuevoUsuario($datos));

        return redirect()->route('usuarios.index')->with('success','El usuario ha sido creado');
    }

    /*
    *
    * @brief
    * @author Jorge Ibarra
    * @param string
    * @return
    *
    */
    public function destroy(Request $request, $id)
    {
        $usuario = User::findOrFail($id);
        $usuario->delete();
        return redirect()->route('usuarios.index')
                ->with('success','El usuario ha sido eliminado');
    }

    /*
    *
    * @brief
    * @author Jorge Ibarra
    * @param string
    * @return
    *
    */
    public function edit($id)
    {
        $usuario = User::findOrFail($id);
        $clientes=Cliente::all();
        return view('usuarios.edit',compact('clientes'))->with('usuario',$usuario);
    }

    /*
    *
    * @brief
    * @author Jorge Ibarra
    * @param string
    * @return
    *
    */
    public function update(UserRequest $request, $id)
    {
        $usuario = User::findOrFail($id);
        if($request->perfil == '1'){
            $request->cliente_id=NULL; 
        }
        
        $usuario->name = $request->name;
        $usuario->perfil = $request->perfil;
        $usuario->email = $request->email;
        $usuario->status = $request->status;
        $usuario->cliente_id = $request->cliente_id;
        $usuario->save();
        
        return redirect()->route('usuarios.index')->with('success','El usuario ha sido actualizado');
    }

    /*
    *
    * @brief
    * @author Jorge Ibarra
    * @param string
    * @return
    *
    */
    public function cambiaPwd(Request $request)
    {
        if(strlen($request->password)<6){
            return back()->with('error','El password debe tener al menos 6 caracteres');
        }
        if($request->password!=$request->password_confirmation){
            return back()->with('error','El password y su confirmación no coinciden, intenta de nuevo.');
        }
        $usuario = User::findOrFail($request->user_id);
        $usuario->password = bcrypt($request->password);
        $usuario->save();
        return redirect()->route('usuarios.index')->with('success','El password del usuario ha sido actualizado');
    }
}
