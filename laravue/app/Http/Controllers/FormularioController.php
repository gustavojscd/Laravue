<?php

namespace App\Http\Controllers;

use App\Models\Email;
use App\Models\Endereco;
use App\Models\Formulario;
use App\Models\Usuario;
use Illuminate\Http\Request;

class FormularioController extends Controller
{
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
    public function create(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:45',
            'cpf'=>'required',
            'nome_mae'=>'required',
            'email'=>'required',
            'telefone'=>'required',
            'cep'=>'required',
            'logradouro'=>'required',
            'estado'=>'required',
            'cidade'=>'required',
            'bairro'=>'required',
        ]);

        try {
            $endereco = Endereco::create([
                'telefone' => $request->telefone ?? "",
                'cep' => $request->cep,
                'logradouro' => $request->logradouro ?? "",
                'estado' => $request->estado ?? "",
                'cidade' => $request->cidade ?? "",
                'bairro' => $request->bairro ?? "",
                'numero' => $request->numero ?? ""
            ]);
        } catch (\Throwable $endereco) {
            return response()->json($endereco, 400);
        }

        try {
            $email = Email::create([
                'email'=>$request->email
            ]);
        } catch (\Throwable $email) {
            return response()->json($email, 400);
        }

        try {
            $usuario = Usuario::create([
                'nome' => $request->nome,
                'cpf' => $request->cpf,
                'rg' => $request->rg ?? "",
                'nome_mae' => $request->nome_mae ?? "",
                'nome_pai' => $request->nome_pai ?? "",
                'fk_id_endereco' => $endereco->id_endereco,
                'fk_id_email' => $email->id_email,
            ]);
        } catch (\Throwable $usuario) {
            return response()->json($usuario, 400);
        }
        
        try {
            $formulario = Formulario::create([
                'fk_id_usuario' => $usuario->id_usuario, 
                'imagem' => $request->file2 ?? ""
            ]);
        } catch (\Throwable $formulario) {
            return response()->json($formulario, 400);
        }
        $formulario = Formulario::create([
            'fk_id_usuario' => $usuario->id_usuario, 
            'imagem' => $request->file2 ?? ""
        ]);
        return response()->json($formulario, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function show(Formulario $formulario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function edit(Formulario $formulario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formulario $formulario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formulario $formulario)
    {
        //
    }
}
