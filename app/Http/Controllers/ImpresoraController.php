<?php

namespace App\Http\Controllers;

use App\Models\Impresora;
use App\Models\Criticidade;
use App\Models\Sectore;
use Illuminate\Support\Facades\DB;
use App\Models\Estado;
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
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $impresoras = Impresora::get();

        return view('impresora.index', compact('impresoras'))->with('i');
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
        $sectores = DB::select("SELECT nombre, id FROM sectores ORDER BY id_ubicacion");
        $estado = Estado::Pluck('descripcion','id');
        return view('impresora.create', compact('impresora','criticidades','sectores','estado'));
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
            ->with('success', 'Impresora creada correctamente.');
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
        $sectores = DB::select("SELECT nombre, id FROM sectores ORDER BY id_ubicacion");
        $estado = Estado::Pluck('descripcion','id');
        return view('impresora.edit', compact('impresora','criticidades', 'sectores','estado'));
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
            ->with('success', 'Impresora modificada correctamente.');
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
            ->with('success', 'Impresora eliminada correctamente.');
    }
}
