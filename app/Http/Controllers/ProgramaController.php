<?php

namespace App\Http\Controllers;

use App\Models\Programa;
use Illuminate\Http\Request;

/**
 * Class ProgramaController
 * @package App\Http\Controllers
 */
class ProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programas = Programa::paginate();
        return view('programa.index', compact('programas'))
            ->with('i', (request()->input('page', 1) - 1) * $programas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programa = new Programa();
        return view('programa.create', compact('programa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Programa::$rules);

        $programa = Programa::create($request->all());

        return redirect()->route('programa.index')
            ->with('success', 'Programa created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $programa = Programa::find($id);

        return view('programa.show', compact('programa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $programa = Programa::find($id);

        return view('programa.edit', compact('programa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Programa $programa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Programa $programa)
    {
        request()->validate(Programa::$rules);

        $programa->update($request->all());

        return redirect()->route('programa.index')
            ->with('success', 'Programa updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $programa = Programa::find($id)->delete();

        return redirect()->route('programa.index')
            ->with('success', 'Programa deleted successfully');
    }
}
