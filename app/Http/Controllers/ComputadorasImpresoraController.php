<?php

namespace App\Http\Controllers;

use App\Models\ComputadorasImpresora;
use Illuminate\Http\Request;

/**
 * Class ComputadorasImpresoraController
 * @package App\Http\Controllers
 */
class ComputadorasImpresoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $computadorasImpresoras = ComputadorasImpresora::paginate();

        return view('computadoras-impresora.index', compact('computadorasImpresoras'))
            ->with('i', (request()->input('page', 1) - 1) * $computadorasImpresoras->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $computadorasImpresora = new ComputadorasImpresora();
        return view('computadoras-impresora.create', compact('computadorasImpresora'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ComputadorasImpresora::$rules);

        $computadorasImpresora = ComputadorasImpresora::create($request->all());

        return redirect()->route('computadoras-impresoras.index')
            ->with('success', 'ComputadorasImpresora created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $computadorasImpresora = ComputadorasImpresora::find($id);

        return view('computadoras-impresora.show', compact('computadorasImpresora'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $computadorasImpresora = ComputadorasImpresora::find($id);

        return view('computadoras-impresora.edit', compact('computadorasImpresora'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ComputadorasImpresora $computadorasImpresora
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ComputadorasImpresora $computadorasImpresora)
    {
        request()->validate(ComputadorasImpresora::$rules);

        $computadorasImpresora->update($request->all());

        return redirect()->route('computadoras-impresoras.index')
            ->with('success', 'ComputadorasImpresora updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $computadorasImpresora = ComputadorasImpresora::find($id)->delete();

        return redirect()->route('computadoras-impresoras.index')
            ->with('success', 'ComputadorasImpresora deleted successfully');
    }
}
