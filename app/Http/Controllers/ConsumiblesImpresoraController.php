<?php

namespace App\Http\Controllers;

use App\Models\Consumible;
use App\Models\ConsumiblesImpresora;
use App\Models\Impresora;
use Illuminate\Http\Request;

/**
 * Class ConsumiblesImpresoraController
 * @package App\Http\Controllers
 */
class ConsumiblesImpresoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consumiblesImpresoras = ConsumiblesImpresora::paginate();

        return view('consumibles-impresora.index', compact('consumiblesImpresoras'))
            ->with('i', (request()->input('page', 1) - 1) * $consumiblesImpresoras->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $consumiblesImpresora = new ConsumiblesImpresora();
        $consumible = Consumible::Pluck('codigo','id');
        $impresora = Impresora::Pluck('ip','id');
        return view('consumibles-impresora.create', compact('consumiblesImpresora','consumible','impresora'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ConsumiblesImpresora::$rules);

        $consumiblesImpresora = ConsumiblesImpresora::create($request->all());

        return redirect()->route('consumibles_impresoras.index')
            ->with('success', 'ConsumiblesImpresora created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consumiblesImpresora = ConsumiblesImpresora::find($id);

        return view('consumibles-impresora.show', compact('consumiblesImpresora'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consumiblesImpresora = ConsumiblesImpresora::find($id);
        $consumible = Consumible::Pluck('codigo','id');
        $impresora = Impresora::Pluck('ip','id');

        return view('consumibles-impresora.edit', compact('consumiblesImpresora','consumible','impresora'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ConsumiblesImpresora $consumiblesImpresora
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ConsumiblesImpresora $consumiblesImpresora)
    {
        request()->validate(ConsumiblesImpresora::$rules);

        $consumiblesImpresora->update($request->all());

        return redirect()->route('consumibles_impresoras.index')
            ->with('success', 'ConsumiblesImpresora updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $consumiblesImpresora = ConsumiblesImpresora::find($id)->delete();

        return redirect()->route('consumibles_impresoras.index')
            ->with('success', 'ConsumiblesImpresora deleted successfully');
    }
}
