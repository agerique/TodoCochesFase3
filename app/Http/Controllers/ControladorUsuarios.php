<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Database\Seeders\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Hash;

class ControladorUsuarios extends Controller
{
    
    function anadir_usuario(Request $pet){
        $emails = Usuario::all();
        $email_intro = $pet->get("email");
        $igual =true;

        foreach ($emails as $email) {
            if($email->email == $email_intro){
                $igual=false;
            }
        }
        if($igual==true){
            $usuario= new Usuario();
            $usuario->nombre = $pet->get("nombre");
            $usuario->apellidos = $pet->get("apellidos");
            $usuario->email = $pet->get("email");
            $usuarioContrasenaH = $pet->get("password2");
            $usuario->contrasena = hash('sha256', $usuarioContrasenaH);
            $usuario->id_rol = 1;
            $usuario->save();
            return redirect("/usuario_creado");
        }else{
            return redirect("/gmail_igual");
        }
        
    }

    function mostrar_gmail_igual(){
        return view("gmail_igual");
    }

    function mostrar_usuario_creado(){
        return view("Usuario_creado");
    }
    function verificar(Request $request){
        $usuarioEmail = $request->get("username");
        $usuarioContrasena = $request->get("password");
        $usuarioContrasenaHash = hash('sha256', $usuarioContrasena);

        $usuario = Usuario::where('email', $usuarioEmail)->where('contrasena', $usuarioContrasenaHash)->first();
        
        if($usuario == null){
            return view("landing");
        }
        else{
            if ($usuario->id_rol == 3){
                return view('vista_admin');
            }
            else {
                return view('/usuario_iniciado',['usuario_email' => $usuarioEmail,'nombre' => $usuario->nombre]);
            }
        }
    }
}



