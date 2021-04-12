<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\usuario;

class UsuarioController extends Controller
{
    public function index()
    {
        //return 'ok';
        return usuario::all();
    }

    
    public function create()
    {
        //
    }

        public function store(Request $request)
    {
        //
    }

       public function show($id)
    {
        //
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
