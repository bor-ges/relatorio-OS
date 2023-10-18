<?php

namespace App\Http\Controllers;

use App\Models\Tecnico;
use Illuminate\Http\Request;

class TecnicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tecnico.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'numero_os' => 'required|numeric|mas:255',
            'tecnico_resp' => 'required|max:4294967295',
            'inicio' => 'requires|numeric|max:255',
            'fim' => 'requires|numeric|max:255',
            'tipo_os' => 'required|max:255',
            'materiais' => 'required|max:4294967295',
            'sem_danos' => 'required|max:255',
            'com_danos' => 'required|max:255',
            'funcionamento' => 'required|max:255',
            'servico_exec' => 'required|max:255',
            'insento_cobranca' => 'required|max:255',
            'servico_cobrado' => 'required|max:255',
            'cli_nome' => 'required|max:255',
            'cli_endereco' => 'required|max:255',
            'cli_assinatura' => 'required|max:255'
        ]);

        $tecnico = new Tecnico();

        $tecnico->numero_os = $validated['numero_os'];
        $tecnico->tecnico_resp = $validated['tecnico_resp'];
        $tecnico->inicio = $validated['inicio'];
        $tecnico->fim = $validated['fim'];
        $tecnico->tipo_os = $validated['tipo_os'];
        $tecnico->materiais = $validated['materiais'];
        $tecnico->sem_danos = $validated['sem_danos'];
        $tecnico->com_danos = $validated['com_danos'];
        $tecnico->funcionamento = $validated['funcionamento'];
        $tecnico->servico_exec = $validated['servico_exec'];
        $tecnico->isento_cobranca = $validated['isento_cobranca'];
        $tecnico->servico_cobrado = $validated['cli_nome'];
        $tecnico->cli_endereco = $validated['cli_assinatura'];

        $tecnico->save();

        return redirect()->route('dashboard');
    }


    /**
     * Display the specified resource.
     */
    public function show(Tecnico $tecnico)
    {
        return view('dashboard')->compact($tecnico);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tecnico $tecnico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tecnico $tecnico)
    {
        $validated = $request->validate([
            'numero_os' => 'required|numeric|mas:255',
            'tecnico_resp' => 'required|max:4294967295',
            'inicio' => 'requires|numeric|max:255',
            'fim' => 'requires|numeric|max:255',
            'tipo_os' => 'required|max:255',
            'materiais' => 'required|max:4294967295',
            'sem_danos' => 'required|max:255',
            'com_danos' => 'required|max:255',
            'funcionamento' => 'required|max:255',
            'servico_exec' => 'required|max:255',
            'insento_cobranca' => 'required|max:255',
            'servico_cobrado' => 'required|max:255',
            'cli_nome' => 'required|max:255',
            'cli_endereco' => 'required|max:255',
            'cli_assinatura' => 'required|max:255'
        ]);


        $tecnico->numero_os = $validated->numero_os;
        $tecnico->tecnico_resp = $validated->tecnico_resp;
        $tecnico->inicio = $validated->inicio;
        $tecnico->fim = $validated->fim;
        $tecnico->tipo_os = $validated->tipo_os;
        $tecnico->materiais = $validated->materiais;
        $tecnico->sem_danos = $validated->sem_danos;
        $tecnico->com_danos = $validated->com_danos;
        $tecnico->funcionamento = $validated->funcionamento;
        $tecnico->servico_exec = $validated->servico_exec;
        $tecnico->isento_cobranca = $validated->isento_cobranca;
        $tecnico->servico_cobrado = $validated->cli_nome;
        $tecnico->cli_nome = $validated->cli_nome;
        $tecnico->cli_endereco = $validated->cli_endereco;
        $tecnico->cli_assinatura = $validated->cli_assinatura;

        $tecnico->save();

        return redirect ()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tecnico $tecnico)
    {
        //
    }
}
