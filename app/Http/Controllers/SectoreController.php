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
    public function __construct()
    {
        $this->middleware('auth');
    }    
    public function index()
    {
        $sectores = Sectore::get();

        return view('sectore.index', compact('sectores'))->with('i');
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
            ->with('success', 'Sector creado correctamente.');
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
        $ubicaciones = DB::select("SELECT id, edificio, piso  FROM ubicaciones");
        return view('sectore.edit', compact('sectore', 'ubicaciones'));
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
            ->with('success', 'Sector modificado correctamente.');
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
            ->with('success', 'sector eliminado correctamente.');
    }
}
