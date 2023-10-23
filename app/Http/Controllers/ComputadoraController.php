<?php

namespace App\Http\Controllers;

use App\Models\Computadora;
use App\Models\UsuariosWindow;
use App\Models\User;
use App\Models\Condicione;
use App\Models\Sectore;
use App\Models\Estado;
use Illuminate\Http\Request;

/**
 * Class ComputadoraController
 * @package App\Http\Controllers
 */
class ComputadoraController extends Controller
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
        $computadoras = Computadora::get();

        return view('computadora.index', compact('computadoras'))->with('i');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $computadora = new Computadora();
        $usuario_win = UsuariosWindow::Pluck('usuario','id');
        $usuario_gea = User::Pluck('username' ,'id');
        $condicion = Condicione::Pluck('descripcion','id');
        $sector = Sectore::Pluck('nombre','id');
        $estado = Estado::Pluck('descripcion','id');
        return view('computadora.create', compact('computadora','usuario_win','usuario_gea','condicion','sector','estado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Computadora::$rules);

        $computadora = Computadora::create($request->all());

        return redirect()->route('computadoras.index')
            ->with('success', 'Computadora creada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $computadora = Computadora::find($id);

        return view('computadora.show', compact('computadora'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $computadora = Computadora::find($id);
        
        $usuario_win = UsuariosWindow::Pluck('usuario','id');
        $usuario_gea = User::Pluck('username','id');
        $condicion = Condicione::Pluck('descripcion','id');
        $sector = Sectore::Pluck('nombre','id');
        $estado = Estado::Pluck('descripcion','id');

        return view('computadora.edit', compact('computadora','usuario_win','usuario_gea','condicion','sector','estado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Computadora $computadora
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Computadora $computadora)
    {
        request()->validate(Computadora::$rules);

        $computadora->update($request->all());

        return redirect()->route('computadoras.index')
            ->with('success', 'Computadora modificada correctamente.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $computadora = Computadora::find($id)->delete();

        return redirect()->route('computadoras.index')
            ->with('success', 'Computadora eliminada correctamente.');
    }
}
