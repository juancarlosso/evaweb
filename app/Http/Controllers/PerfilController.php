<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Str;

class PerfilController extends Controller
{
    /*
    *
    * @brief
    * @author Gustavo Ramirez Yahuaca
    * @param string
    * @return
    *
    */
    public function show()
    {
        return view('perfil.show');
    }

    /*
    *
    * @brief
    * @author Gustavo Ramirez Yahuaca
    * @param string
    * @return
    *
    */
    public function update(Request $request)
    {

        $id = auth()->user()->id;
        $user = User::findOrFail($id);
        $user->name = $request->name;
        if ($request->password) {
            $password = bcrypt(trim($request->password));

            if ($request->password != $request->confirmar) {
                return back()->with('error', 'El password nuevo debe coincidir con la confirmación del Password');
            }

            $user->password = $password;
        }
        if ($request->hasFile('foto')) {
            if (file_exists($user->foto)) {
                unlink($user->foto);
            }
            $extension = $request->foto->extension();
            $dir = "public/fotos/";
            $nombre_archivo = date('YmdHis') . Str::random(10) . '.' . $extension;
            $request->foto->storeAs($dir, $nombre_archivo);
            $nombre_archivo = $dir . $nombre_archivo;
            $nombre_archivo = str_replace("public/", "storage/", $nombre_archivo);
            $user->foto = $nombre_archivo;
        }
        $user->save();
        return redirect()->route('perfil.show')->with('success', 'Perfil actualizado');
    }

    /*
    *
    * @brief
    * @author Gustavo Ramirez Yahuaca
    * @param string
    * @return
    *
    */
    public function cambiarPassword()
    {
        return view('perfil.cambiar-pwd');
    }

    /*
    *
    * @brief
    * @author Gustavo Ramirez Yahuaca
    * @param string
    * @return
    *
    */
    public function updatePassword(PasswordRequest $request)
    {
        $password = bcrypt(trim($request->password));
        User::where('id', auth()->user()->id)->update(['password' => $password]);
        return redirect()->route('perfil.cambiar.password')->with('success', 'Tu password ha sido actualizado');
    }
}
