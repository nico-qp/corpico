<?php

namespace App\Http\Controllers;

use App\Models\Criticidade;
use Illuminate\Http\Request;

/**
 * Class CriticidadeController
 * @package App\Http\Controllers
 */
class CriticidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $criticidades = Criticidade::paginate();

        return view('criticidade.index', compact('criticidades'))
            ->with('i', (request()->input('page', 1) - 1) * $criticidades->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $criticidade = new Criticidade();
        return view('criticidade.create', compact('criticidade'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Criticidade::$rules);

        $criticidade = Criticidade::create($request->all());

        return redirect()->route('criticidades.index')
            ->with('success', 'Criticidad creada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $criticidade = Criticidade::find($id);

        return view('criticidade.show', compact('criticidade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $criticidade = Criticidade::find($id);

        return view('criticidade.edit', compact('criticidade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Criticidade $criticidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Criticidade $criticidade)
    {
        request()->validate(Criticidade::$rules);

        $criticidade->update($request->all());

        return redirect()->route('criticidades.index')
            ->with('success', 'Criticidad modificada correctamente.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $criticidade = Criticidade::find($id)->delete();

        return redirect()->route('criticidades.index')
            ->with('success', 'Criticidad eliminada correctamente.');
    }
}
