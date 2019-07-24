<?php

namespace App\Http\Controllers;
use App\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function mostrarTodosUsuarios()
    {
        return response()->json( Usuario::all() );
    }

    public function cadastrarUsuario(Request $request)
    {
        $usuario = Usuario::create(
            $request->all()
        );

        return response()->json( $usuario );
    }

    public function mostrarUmUsuario($id)
    {
        $usuario = Usuario::find($id);

        return response()->json( $usuario );
    }

    public function atualizarUsuario(Request $request, $id)
    {
        $usuario = Usuario::find($id);

        $usuario->fill( $request->all() );
        $usuario->save();

        return response()->json( $usuario );
    }

    public function deletarUsuario(Request $request, $id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();

        return response()->json( 'Usuário deletado com sucesso!', 200 );
    }
}
