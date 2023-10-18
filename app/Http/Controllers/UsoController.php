<?php

namespace App\Http\Controllers;

use App\Models\Uso;
use Illuminate\Http\Request;

/**
 * Class UsoController
 * @package App\Http\Controllers
 */
class UsoController extends Controller
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
        $usos = Uso::paginate();

        return view('uso.index', compact('usos'))
            ->with('i', (request()->input('page', 1) - 1) * $usos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $uso = new Uso();
        return view('uso.create', compact('uso'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Uso::$rules);

        $uso = Uso::create($request->all());

        return redirect()->route('usos.index')
            ->with('success', 'Uso creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $uso = Uso::find($id);

        return view('uso.show', compact('uso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $uso = Uso::find($id);

        return view('uso.edit', compact('uso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Uso $uso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Uso $uso)
    {
        request()->validate(Uso::$rules);

        $uso->update($request->all());

        return redirect()->route('usos.index')
            ->with('success', 'Uso modificado correctamente.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $uso = Uso::find($id)->delete();

        return redirect()->route('usos.index')
            ->with('success', 'Uso eliminado correctamente.');
    }
}
