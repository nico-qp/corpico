<?php

namespace App\Http\Controllers;

use App\Models\UsuariosWindow;
use Illuminate\Http\Request;

/**
 * Class UsuariosWindowController
 * @package App\Http\Controllers
 */
class UsuariosWindowController extends Controller
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
        $usuariosWindows = UsuariosWindow::get();

        return view('usuarios-window.index', compact('usuariosWindows'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuariosWindow = new UsuariosWindow();
        return view('usuarios-window.create', compact('usuariosWindow'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(UsuariosWindow::$rules);

        $usuariosWindow = UsuariosWindow::create($request->all());

        return redirect()->route('usuarios-window.index')
            ->with('success', 'Usuario de windows creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuariosWindow = UsuariosWindow::find($id);

        return view('usuarios-window.show', compact('usuariosWindow'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuariosWindow = UsuariosWindow::find($id);

        return view('usuarios-window.edit', compact('usuariosWindow'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  UsuariosWindow $usuariosWindow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UsuariosWindow $usuariosWindow)
    {
        request()->validate(UsuariosWindow::$rules);

        $usuariosWindow->update($request->all());

        return redirect()->route('usuarios-window.index')
            ->with('success', 'Usuario de windows modificado correctamente.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $usuariosWindow = UsuariosWindow::find($id)->delete();

        return redirect()->route('usuarios-window.index')
            ->with('success', 'Usuario de windows eliminado correctamente.');
    }
}
