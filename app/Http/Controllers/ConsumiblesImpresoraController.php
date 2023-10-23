<?php

namespace App\Http\Controllers;

use App\Models\Consumible;
use App\Models\ConsumiblesImpresora;
use App\Models\Impresora;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $consumiblesImpresoras = ConsumiblesImpresora::get();

        return view('consumibles-impresora.index', compact('consumiblesImpresoras'))->with('i');
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
        //$impresoras = Impresora::Pluck('modelo','id');
        $impresoras = DB::select("SELECT id, modelo FROM `impresoras` GROUP BY modelo ORDER BY modelo");
        return view('consumibles-impresora.create', compact('consumiblesImpresora','consumible','impresoras'));
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

        $id_impresora = $request->request->get('id_impresora');
        $id_consumible = $request->request->get('id_consumible');
        $verificacion = DB::select("SELECT * FROM consumibles_impresoras WHERE id_impresora = $id_impresora AND id_consumible = $id_consumible");

        if (count($verificacion) == 0) {
            $consumiblesImpresora = ConsumiblesImpresora::create($request->all());

            return redirect()->route('consumibles_impresoras.index')
                ->with('success', 'Conexión creada correctamente.');
        } else {
            return redirect()->route('consumibles_impresoras.create')
                ->with('error', 'Esta conexion ya está creada.');
        }
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
        //$impresora = Impresora::Pluck('ip','id');
        $impresoras = DB::select("SELECT id, modelo FROM `impresoras` GROUP BY modelo ORDER BY modelo");
        return view('consumibles-impresora.edit', compact('consumiblesImpresora','consumible','impresoras'));
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
        $id_impresora = $request->request->get('id_impresora');
        $id_consumible = $request->request->get('id_consumible');
        $verificacion = DB::select("SELECT * FROM consumibles_impresoras WHERE id_impresora = $id_impresora AND id_consumible = $id_consumible");
        if (count($verificacion) == 0) {
            $consumiblesImpresora = ConsumiblesImpresora::update($request->all());

            return redirect()->route('consumibles_impresoras.index')
                ->with('success', 'Conexión actualizada correctamente.');
        } else {
            return redirect()->route('consumibles_impresoras.create')
                ->with('error', 'Esta conexion ya está creada.');
        }
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
            ->with('success', 'Conexión eliminada correctamente.');
    }
}
