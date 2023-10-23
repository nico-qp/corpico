<?php

namespace App\Http\Controllers;

use App\Models\Condicione;
use Illuminate\Http\Request;

/**
 * Class CondicioneController
 * @package App\Http\Controllers
 */
class CondicioneController extends Controller
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
        $condiciones = Condicione::get();

        return view('condicione.index', compact('condiciones'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $condicione = new Condicione();
        return view('condicione.create', compact('condicione'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Condicione::$rules);

        $condicione = Condicione::create($request->all());

        return redirect()->route('condiciones.index')
            ->with('success', 'Condición creada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $condicione = Condicione::find($id);

        return view('condicione.show', compact('condicione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $condicione = Condicione::find($id);

        return view('condicione.edit', compact('condicione'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Condicione $condicione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Condicione $condicione)
    {
        request()->validate(Condicione::$rules);

        $condicione->update($request->all());

        return redirect()->route('condiciones.index')
            ->with('success', 'Condicione updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $condicione = Condicione::find($id)->delete();

        return redirect()->route('condiciones.index')
            ->with('success', 'Condicione deleted successfully');
    }
}
