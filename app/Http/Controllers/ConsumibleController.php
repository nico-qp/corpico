<?php

namespace App\Http\Controllers;

use App\Models\Consumible;
use App\Models\TipoConsumible;
use App\Models\Uso;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

/**
 * Class ConsumibleController
 * @package App\Http\Controllers
 */
class ConsumibleController extends Controller
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
        $consumibles = Consumible::paginate();

        return view('consumible.index', compact('consumibles'))
            ->with('i', (request()->input('page', 1) - 1) * $consumibles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $consumible = new Consumible();
        //$uso = Uso::Pluck('anual','id');
        $usos = DB::select("SELECT anual, id FROM usos ORDER BY anual");
        $tipo_consumible = tipoConsumible::Pluck('nombre','id');
        return view('consumible.create', compact('consumible', 'usos', 'tipo_consumible'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Consumible::$rules);

        $consumible = Consumible::create($request->all());

        return redirect()->route('consumibles.index')
            ->with('success', 'Consumible creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consumible = Consumible::find($id);

        return view('consumible.show', compact('consumible'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consumible = Consumible::find($id);
        $usos = DB::select("SELECT anual, id FROM usos ORDER BY anual");
        $tipo_consumible = tipoConsumible::Pluck('nombre','id');

        return view('consumible.edit', compact('consumible', 'usos', 'tipo_consumible'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Consumible $consumible
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consumible $consumible)
    {
        request()->validate(Consumible::$rules);

        $consumible->update($request->all());

        return redirect()->route('consumibles.index')
            ->with('success', 'Consumible modificado correctamente.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $consumible = Consumible::find($id)->delete();

        return redirect()->route('consumibles.index')
            ->with('success', 'Consumible eliminado correctamente.');
    }
}
