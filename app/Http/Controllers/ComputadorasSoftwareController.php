<?php

namespace App\Http\Controllers;

use App\Models\ComputadorasSoftware;
use App\Models\Software;
use App\Models\Computadora;
use Illuminate\Http\Request;

/**
 * Class ComputadorasSoftwareController
 * @package App\Http\Controllers
 */
class ComputadorasSoftwareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $computadorasSoftwares = ComputadorasSoftware::paginate();

        return view('computadoras-software.index', compact('computadorasSoftwares'))
            ->with('i', (request()->input('page', 1) - 1) * $computadorasSoftwares->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $computadorasSoftware = new ComputadorasSoftware();
        $computadora = Computadora::Pluck('ip_172','id');
        $software = Software::Pluck('nombre','id');
        return view('computadoras-software.create', compact('computadorasSoftware', 'computadora', 'software'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ComputadorasSoftware::$rules);

        $computadorasSoftware = ComputadorasSoftware::create($request->all());

        return redirect()->route('computadoras-softwares.index')
            ->with('success', 'ComputadorasSoftware created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $computadorasSoftware = ComputadorasSoftware::find($id);

        return view('computadoras-software.show', compact('computadorasSoftware'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $computadorasSoftware = ComputadorasSoftware::find($id);
        $computadora = Computadora::Pluck('ip_172','id');
        $software = Software::Pluck('nombre','id');

        return view('computadoras-software.edit', compact('computadorasSoftware', 'computadora', 'software'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ComputadorasSoftware $computadorasSoftware
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ComputadorasSoftware $computadorasSoftware)
    {
        request()->validate(ComputadorasSoftware::$rules);

        $computadorasSoftware->update($request->all());

        return redirect()->route('computadoras-softwares.index')
            ->with('success', 'ComputadorasSoftware updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $computadorasSoftware = ComputadorasSoftware::find($id)->delete();

        return redirect()->route('computadoras-softwares.index')
            ->with('success', 'ComputadorasSoftware deleted successfully');
    }
}
