<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\chamados;

class ChamadoController extends Controller
{
        
    private $objUser;

    public function __construct(){
        $this->objUser=new chamados();
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $idusuario = $request->idusuario;
        $idprefeitura = $request->idprefeitura;
        $tipo = $request->tipo;
        $status = $request->status;
        $rua = $request->rua ;
        $bairro = $request->bairro;
        $cidade = $request->cidade;

        if(chamados::insert(
            array(
            'idusuario' =>$idusuario,
            'idprefeitura' =>$idprefeitura,
            'tipo' =>$tipo,
            'status' =>$status,
            'rua'=>$rua,
            'bairro'=>$bairro,
            'cidade'=>$cidade
            )
        ) == true){
            return response()->json([
                "Status" => 0,
                "Situacao"=> 'ok'],
                200);
        }else{
            return response()->json([
                "Status" => 1,
                "ERRO"=> 'Erro na consulta'],
                201);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        list($id, $tipo) = explode('&',$id);
        echo $id;
        echo $tipo;
        if($tipo == 1){
            $data = chamados::distinct()->where('idusuario', $id)->get();
            if(!$data->isEmpty()){
                $chamados = json_decode($data);
                //dd($chamados[0]->rua);
                return $chamados;
            }else{
                return response()->json([
                    "Status" => 1,
                    "ERRO"=> 'Erro Sem Dados'],
                    201);
            }
            
        }elseif ($tipo == 2){
            $data = chamados::distinct()->where('idprefeitura', $id)->get();
            if(!$data->isEmpty()){
                $chamados = json_decode($data);
                //dd($chamados[0]->rua);
                return $chamados;
            }else{
                return response()->json([
                    "Status" => 1,
                    "ERRO"=> 'Erro Sem Dados'],
                    201);
            }
        }else{
            return response()->json([
                "Status" => 1,
                "ERRO"=> 'Erro na consulta'],
                201);
        }
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        echo 'está no update';
        $obervacao = $request->obervacao;
        //dd($obervacao);
        if(chamados::where('id', $id)->update(['observacao' => $obervacao])==1){
            chamados::where('id', $id)->update(['status' => 2]);
            return response()->json([
                "Status" => 0,
                "Situacao"=> 'ok'],
                200);
        }else{
            return response()->json([
                "Status" => 1,
                "ERRO"=> 'Erro na consulta'],
                201);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
