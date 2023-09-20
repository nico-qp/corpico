<?php

namespace App\Http\Controllers;

use App\Models\Impresora;
use App\Models\Criticidade;
use App\Models\Sectore;
use Illuminate\Http\Request;

/**
 * Class ImpresoraController
 * @package App\Http\Controllers
 */
class ImpresoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $impresoras = Impresora::paginate();

        return view('impresora.index', compact('impresoras'))
            ->with('i', (request()->input('page', 1) - 1) * $impresoras->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $impresora = new Impresora();
        $criticidades = Criticidade::Pluck('descripcion','id');
        $sector = Sectore::Pluck('nombre','id');
        return view('impresora.create', compact('impresora','criticidades','sector'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Impresora::$rules);

        $impresora = Impresora::create($request->all());

        return redirect()->route('impresoras.index')
            ->with('success', 'Impresora created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $impresora = Impresora::find($id);

        return view('impresora.show', compact('impresora'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $impresora = Impresora::find($id);
        $criticidades = Criticidade::Pluck('descripcion','id');
        $sector = Sectore::Pluck('nombre','id');
        return view('impresora.edit', compact('impresora','criticidades', 'sector'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Impresora $impresora
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Impresora $impresora)
    {
        request()->validate(Impresora::$rules);

        $impresora->update($request->all());

        return redirect()->route('impresoras.index')
            ->with('success', 'Impresora updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $impresora = Impresora::find($id)->delete();

        return redirect()->route('impresoras.index')
            ->with('success', 'Impresora deleted successfully');
    }
}
