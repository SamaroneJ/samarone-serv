<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\usuario;

class addUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "Está aqui index";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo "Está aqui create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipo = $request->tipo;
        $nome = $request->nome;
        $email = $request->email;
        $senha = $request->senha;
        if(usuario::insert(
            array(
                'tipo' => $tipo, 
                'nome' => $nome,
                'email' => $email,
                'senha' => $senha
            )
        )==true){
            return response()->json([
                "Status" => 0,
                "Situacao"=> 'ok'],
                200);
        }else{
            
            return response()->json([
                "Status" => 1,
                "ERRO"=> 'Erro na consulta'],
                201);
        };

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo "Está aqui Show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        echo "Está aqui edit";
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
        $tipo = $request->tipo;
        $nome = $request->nome;
        $email = $request->email;
        $senha = $request->senha;
        
        if(usuario::where('idusuario', $id)->update(
            [
                'tipo' => $tipo, 
                'nome' => $nome,
                'email' => $email,
                'senha' => $senha,
                'token' => 0
            ]
        )==1){
            return response()->json([
                "Status" => 0,
                "Situacao"=> 'ok'],
                200);
        }else{
            return response()->json([
                "Status" => 1,
                "ERRO"=> 'Erro na consulta'],
                201);
        };
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        echo "Está aqui destroy";
    }
}
