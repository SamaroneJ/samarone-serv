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
        //return $teste;
        return usuario::where('tipo',1)->get();

    }

    
    public function create()
    {
        //
    }

        public function store(Request $request)
    {
        //
    }

       public function show(Request $nome,$senha)
    {
        $retorno = usuario::select('nome','tipo')->where('nome',$nome)->get();
        return response()->json(["Usuario"=> $retorno],200);
        $nomeV = usuario::select('nome')->where('nome',$nome)->get();
        dd($nomeV);

        dd(usuario::select('nome','tipo')->where('nome',$nome)->get());

        if ($nomeV == true){
            $senhaV = usuario::select('senha')->where('nome',$nome)->get();
            
            if($senha == $senhaV){
                $retorno = usuario::select('nome','tipo')->where('nome',$nome)->get();
                return response()->json(["Usuario"=> $retorno],200);
            }else{
                return response()->json(["Usuario"=> 'Erro Senha'],200);
            }
        }else{
            return response()->json(["Usuario"=> 'Erro Usuario'],200);
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
