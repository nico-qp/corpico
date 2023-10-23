<?php

namespace App\Http\Controllers;

use App\Models\ComputadorasImpresora;
use App\Models\Computadora;
use App\Models\Impresora;
use App\Models\Sectore;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

/**
 * Class ComputadorasImpresoraController
 * @package App\Http\Controllers
 */
class ComputadorasImpresoraController extends Controller
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
    public function index(Request $request)
    {
        $order_by = $request->input('order_by', 'id'); // por defecto ordena por el id

        $query = ComputadorasImpresora::query();

        //aplica el ordenamiento
        $query->orderBy($order_by);

        $computadorasImpresoras = $query->paginate();

        return view('computadoras-impresora.index', compact('computadorasImpresoras', 'order_by'))
            ->with('i', ($request->input('page', 1) - 1) * $computadorasImpresoras->perPage());
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $computadorasImpresora = new ComputadorasImpresora();
        $computadoras = DB::select("SELECT computadoras.id, computadoras.nombre, ip_172, id_sectore, sectores.nombre as nombre_sector FROM computadoras INNER JOIN sectores ON computadoras.id_sectore = sectores.id WHERE computadoras.id_estado = 2 ORDER BY nombre_sector");
        //$impresoras = DB::select("SELECT id, modelo, ip, id_sector FROM impresoras WHERE id_estado = 2 ORDER BY modelo");
        $impresoras = DB::select("SELECT impresoras.id, modelo, ip, id_sector, sectores.nombre AS nombre_sector FROM impresoras INNER JOIN sectores ON impresoras.id_sector = sectores.id WHERE impresoras.id_estado = 2 ORDER BY nombre_sector");
        return view('computadoras-impresora.create', compact('computadorasImpresora','computadoras','impresoras'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ComputadorasImpresora::$rules);

        $id_impresora = $request->request->get('id_impresora');
        $id_computadora = $request->request->get('id_computadora');
        $verificacion = DB::select("SELECT * FROM computadoras_impresoras WHERE id_impresora = $id_impresora AND id_computadora = $id_computadora");

        if (count($verificacion) == 0) {
            $computadorasImpresora = ComputadorasImpresora::create($request->all());

            return redirect()->route('computadoras-impresoras.index')
            ->with('success', 'Conexión creada correctamente.');
        } else {
            return redirect()->route('computadoras-impresoras.create')
                ->with('error', 'Esta conexión ya está creada.');
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
        $computadorasImpresora = ComputadorasImpresora::find($id);

        return view('computadoras-impresora.show', compact('computadorasImpresora'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $computadorasImpresora = ComputadorasImpresora::find($id);
        $computadoras = DB::select("SELECT computadoras.id, computadoras.nombre, ip_172, id_sectore, sectores.nombre as nombre_sector FROM computadoras INNER JOIN sectores ON computadoras.id_sectore = sectores.id WHERE computadoras.id_estado = 2 ORDER BY nombre_sector");
        $impresoras = DB::select("SELECT impresoras.id, modelo, ip, id_sector, sectores.nombre AS nombre_sector FROM impresoras INNER JOIN sectores ON impresoras.id_sector = sectores.id WHERE impresoras.id_estado = 2 ORDER BY nombre_sector");
        return view('computadoras-impresora.edit', compact('computadorasImpresora','computadoras','impresoras'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ComputadorasImpresora $computadorasImpresora
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ComputadorasImpresora $computadorasImpresora)
    {
        request()->validate(ComputadorasImpresora::$rules);

        $id_impresora = $request->request->get('id_impresora');
        $id_computadora = $request->request->get('id_computadora');
        $verificacion = DB::select("SELECT * FROM computadoras_impresoras WHERE id_impresora = $id_impresora AND id_computadora = $id_computadora");

        if (count($verificacion) == 0) {
            $computadorasImpresora->update($request->all());

            return redirect()->route('computadoras-impresoras.index')
            ->with('success', 'Conexión modificada correctamente.');
        } else {
            return redirect()->route('computadoras-impresoras.create')
                ->with('error', 'Esta conexión ya está creada.');
        }
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $computadorasImpresora = ComputadorasImpresora::find($id)->delete();

        return redirect()->route('computadoras-impresoras.index')
            ->with('success', 'Conexión eliminada correctamente.');
    }
}
