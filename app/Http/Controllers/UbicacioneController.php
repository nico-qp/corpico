<?php

namespace App\Http\Controllers;

use App\Models\Ubicacione;
use Illuminate\Http\Request;

/**
 * Class UbicacioneController
 * @package App\Http\Controllers
 */
class UbicacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ubicaciones = Ubicacione::paginate();

        return view('ubicacione.index', compact('ubicaciones'))
            ->with('i', (request()->input('page', 1) - 1) * $ubicaciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ubicacione = new Ubicacione();
        return view('ubicacione.create', compact('ubicacione'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Ubicacione::$rules);

        $ubicacione = Ubicacione::create($request->all());

        return redirect()->route('ubicaciones.index')
            ->with('success', 'Ubicacione created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ubicacione = Ubicacione::find($id);

        return view('ubicacione.show', compact('ubicacione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ubicacione = Ubicacione::find($id);

        return view('ubicacione.edit', compact('ubicacione'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ubicacione $ubicacione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ubicacione $ubicacione)
    {
        request()->validate(Ubicacione::$rules);

        $ubicacione->update($request->all());

        return redirect()->route('ubicaciones.index')
            ->with('success', 'Ubicacione updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ubicacione = Ubicacione::find($id)->delete();

        return redirect()->route('ubicaciones.index')
            ->with('success', 'Ubicacione deleted successfully');
    }
}
