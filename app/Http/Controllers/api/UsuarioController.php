<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\usuario;

class UsuarioController extends Controller
{   
    private $objUser;

    public function __construct(){
        $this->objUser=new usuario();
    }



    public function index()
    {
        //return 'ok';
        //return usuario::all();
        //dd(usuario::all());
        

        //$teste = usuario::table('usuarios')->get();
        //return $teste;

        //dd($this->objUser->all());
        //dd($this->objUser->select('SELECT * FROM usuarios where idusuario = 1'));
        //$teste = $this->objUser->select('SELECT * FROM usuarios where idusuario = 1');
        return $teste;
        //return usuario::where('tipo',1)->get();

    }

    
    public function create()
    {
        //
    }

        public function store(Request $request)
    {
        //
    }

       public function show($dados)
    {
        
        list($nome, $senha) = explode('&',$dados);
        $nomev = usuario::select('nome')->where('nome',$nome)->get();
        if($nomev->isEmpty()){
           return response()->json(["Usuario"=> 'Erro Usuario'],404);
        }else{
            if ($nomev[0]['nome'] == $nome){
                $senhaV = usuario::select('senha')->where('nome',$nome)->get();
                
                if($senha == $senhaV[0]['senha']){
                    $retorno = usuario::select('nome','tipo')->where('nome',$nome)->get();
                    return response()->json(["Usuario"=> $retorno],200);
                }else{
                    return response()->json(["Usuario"=> 'Erro Senha'],404);
                }
            }else{
                return response()->json(["Usuario"=> 'Erro Usuario'],404);
            }
        }
        
        
        
        /*$retorno = usuario::select('nome','tipo')->where('nome',$nome)->get();
        return response()->json(["Usuario"=> $retorno],200);*/
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
