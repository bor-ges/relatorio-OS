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

        $finaliza_os = new Finaliza_os();

        $finaliza_os->numero_os = $validated['numero_os'];
        $finaliza_os->tecnico_resp = $validated['tecnico_resp'];
        $finaliza_os->inicio = $validated['inicio'];
        $finaliza_os->fim = $validated['fim'];
        $finaliza_os->tipo_os = $validated['tipo_os'];
        $finaliza_os->materiais = $validated['materiais'];
        $finaliza_os->sem_danos = $validated['sem_danos'];
        $finaliza_os->com_danos = $validated['com_danos'];
        $finaliza_os->funcionamento = $validated['funcionamento'];
        $finaliza_os->servico_exec = $validated['servico_exec'];
        $finaliza_os->isento_cobranca = $validated['isento_cobranca'];
        $finaliza_os->servico_cobrado = $validated['cli_nome'];
        $finaliza_os->cli_endereco = $validated['cli_assinatura'];

        $finaliza_os->save();

        return redirect()->route('dashboard');
    }


    /**
     * Display the specified resource.
     */
    public function show(Tecnico $tecnico)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tecnico $tecnico)
    {
        //
    }
}
