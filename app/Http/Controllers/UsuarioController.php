<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;
use Tymon\JWTAuth\JWTAuth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    protected $jwt;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(JWTAuth $jwt)
    {
        $this->jwt = $jwt;
    }

    public function usuarioLogin(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);

        // adicionar outros dados no token
        // $this->jwt->claims

        if( !$token = $this->jwt->attempt($request->only('email','password'))){
            return response()->json(['Usuario não encontrado!'], 404);
        }

        return response()->json(compact('token')) ;
    }

    public function usuarioLogout()
    {
        Auth::logout();

        return response()->json( ['Usuário saiu do sistema com sucesso!'] );
    }

    public function mostrarUsuarioAutenticado()
    {
        $usuario = Auth::user();

        return response()->json( $usuario );
    }

    public function mostrarTodosUsuarios()
    {
        return response()->json( Usuario::all() );
    }

    public function cadastrarUsuario(Request $request)
    {
        $this->validate($request,[
            'usuario' => 'required|min:5|max:40',
            'email' => 'required|email|unique:usuarios,email',
            'password' => 'required'
        ]);

        $requestData = $request->all();
        $requestData['password'] = Hash::make($request->password);

        $usuario = Usuario::create(
            $requestData
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
