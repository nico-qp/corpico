<?php

namespace App\Http\Controllers;

use App\Models\Sectore;
use App\Models\Ubicacione;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

/**
 * Class SectoreController
 * @package App\Http\Controllers
 */
class SectoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sectores = Sectore::paginate();

        return view('sectore.index', compact('sectores'))
            ->with('i', (request()->input('page', 1) - 1) * $sectores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sectore = new Sectore();
        /*$ubicacion = Ubicacione::Pluck('edificio','id');*/
        $ubicaciones = DB::select("SELECT id, edificio, piso  FROM ubicaciones");
        return view('sectore.create', compact('sectore', 'ubicaciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Sectore::$rules);

        $sectore = Sectore::create($request->all());

        return redirect()->route('sectores.index')
            ->with('success', 'Sectore created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sectore = Sectore::find($id);

        return view('sectore.show', compact('sectore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sectore = Sectore::find($id);
        $ubicacion = Ubicacione::Pluck('edificio','id');
        return view('sectore.edit', compact('sectore', 'ubicacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Sectore $sectore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sectore $sectore)
    {
        request()->validate(Sectore::$rules);

        $sectore->update($request->all());

        return redirect()->route('sectores.index')
            ->with('success', 'Sectore updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $sectore = Sectore::find($id)->delete();

        return redirect()->route('sectores.index')
            ->with('success', 'Sectore deleted successfully');
    }
}
