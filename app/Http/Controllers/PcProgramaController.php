<?php

namespace App\Http\Controllers;

use App\Models\PcPrograma;
use App\Models\Pc;
use App\Models\Programa;
use Illuminate\Http\Request;

/**
 * Class PcProgramaController
 * @package App\Http\Controllers
 */
class PcProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pcProgramas = PcPrograma::paginate();
        return view('pc-programa.index', compact('pcProgramas'))
            ->with('i', (request()->input('page', 1) - 1) * $pcProgramas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pcPrograma = new PcPrograma();
        $pc = Pc::pluck('nombre_pc', 'id');
        $programa = Programa::pluck('nombre', 'id');
        return view('pc-programa.create', compact('pcPrograma', 'pc', 'programa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(PcPrograma::$rules);

        $pcPrograma = PcPrograma::create($request->all());

        return redirect()->route('pc-programas.index')
            ->with('success', 'PcPrograma created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pcPrograma = PcPrograma::find($id);

        return view('pc-programa.show', compact('pcPrograma'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pcPrograma = PcPrograma::find($id);
        $pc = Pc::pluck('nombre_pc', 'id');
        $programa = Programa::pluck('nombre', 'id');
        return view('pc-programa.edit', compact('pcPrograma', 'pc', 'programa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  PcPrograma $pcPrograma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PcPrograma $pcPrograma)
    {
        request()->validate(PcPrograma::$rules);

        $pcPrograma->update($request->all());

        return redirect()->route('pc-programas.index')
            ->with('success', 'PcPrograma updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $pcPrograma = PcPrograma::find($id)->delete();

        return redirect()->route('pc-programas.index')
            ->with('success', 'PcPrograma deleted successfully');
    }
}
