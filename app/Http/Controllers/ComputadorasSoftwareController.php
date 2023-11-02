<?php

namespace App\Http\Controllers;

use App\Models\ComputadorasSoftware;
use App\Models\Software;
use App\Models\Computadora;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class ComputadorasSoftwareController
 * @package App\Http\Controllers
 */
class ComputadorasSoftwareController extends Controller
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
        $computadorasSoftwares = ComputadorasSoftware::get();

        return view('computadoras-software.index', compact('computadorasSoftwares'))->with('i');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $computadorasSoftware = new ComputadorasSoftware();
        $computadoras = DB::select("SELECT computadoras.id, computadoras.nombre, ip_172, id_sectore, sectores.nombre as nombre_sector FROM computadoras INNER JOIN sectores ON computadoras.id_sectore = sectores.id WHERE computadoras.id_estado = 2 ORDER BY nombre_sector");
        $software = Software::Pluck('nombre','id');
        return view('computadoras-software.create', compact('computadorasSoftware', 'computadoras', 'software'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ComputadorasSoftware::$rules);

        $computadorasSoftware = ComputadorasSoftware::create($request->all());

        return redirect()->route('computadoras-softwares.index')
            ->with('success', 'Conexión creada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $computadorasSoftware = ComputadorasSoftware::find($id);

        return view('computadoras-software.show', compact('computadorasSoftware'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $computadorasSoftware = ComputadorasSoftware::find($id);
        $computadoras = DB::select("SELECT computadoras.id, computadoras.nombre, ip_172, id_sectore, sectores.nombre as nombre_sector FROM computadoras INNER JOIN sectores ON computadoras.id_sectore = sectores.id WHERE computadoras.id_estado = 2 ORDER BY nombre_sector");
        $software = Software::Pluck('nombre','id');

        $id_computadora = DB::select("SELECT computadoras.id, computadoras.nombre, ip_172, id_sectore, sectores.nombre as nombre_sector FROM computadoras INNER JOIN sectores ON computadoras.id_sectore = sectores.id WHERE computadoras.id = $computadorasSoftware->id_computadora ORDER BY nombre_sector");

        return view('computadoras-software.edit', compact('computadorasSoftware', 'computadoras', 'software','id_computadora'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ComputadorasSoftware $computadorasSoftware
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ComputadorasSoftware $computadorasSoftware)
    {
        request()->validate(ComputadorasSoftware::$rules);

        $computadorasSoftware->update($request->all());

        return redirect()->route('computadoras-softwares.index')
            ->with('success', 'conexión modificada correctamente.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $computadorasSoftware = ComputadorasSoftware::find($id)->delete();

        return redirect()->route('computadoras-softwares.index')
            ->with('success', 'Conexión eliminada correctamente.');
    }
}
