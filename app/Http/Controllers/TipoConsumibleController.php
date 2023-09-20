<?php

namespace App\Http\Controllers;

use App\Models\TipoConsumible;
use Illuminate\Http\Request;

/**
 * Class TipoConsumibleController
 * @package App\Http\Controllers
 */
class TipoConsumibleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoConsumibles = TipoConsumible::paginate();

        return view('tipo-consumible.index', compact('tipoConsumibles'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoConsumibles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoConsumible = new TipoConsumible();
        return view('tipo-consumible.create', compact('tipoConsumible'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TipoConsumible::$rules);

        $tipoConsumible = TipoConsumible::create($request->all());

        return redirect()->route('tipo-consumibles.index')
            ->with('success', 'TipoConsumible created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoConsumible = TipoConsumible::find($id);

        return view('tipo-consumible.show', compact('tipoConsumible'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoConsumible = TipoConsumible::find($id);

        return view('tipo-consumible.edit', compact('tipoConsumible'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TipoConsumible $tipoConsumible
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoConsumible $tipoConsumible)
    {
        request()->validate(TipoConsumible::$rules);

        $tipoConsumible->update($request->all());

        return redirect()->route('tipo-consumibles.index')
            ->with('success', 'TipoConsumible updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipoConsumible = TipoConsumible::find($id)->delete();

        return redirect()->route('tipo-consumibles.index')
            ->with('success', 'TipoConsumible deleted successfully');
    }
}
