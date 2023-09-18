<?php

namespace App\Http\Controllers;

use App\Models\ComputadorasSoftware;
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
        $computadorasSoftware = ComputadorasSoftware::paginate();

        return view('computadoras-software.index', compact('computadorasSoftware'))
            ->with('i', (request()->input('page', 1) - 1) * $computadorasSoftware->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $computadorasSoftware = new ComputadorasSoftware();
        return view('computadoras-software.create', compact('computadorasSoftware'));
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

        return redirect()->route('computadoras-software.index')
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

        return view('computadoras-software.edit', compact('computadorasSoftware'));
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

        return redirect()->route('computadoras-software.index')
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

        return redirect()->route('computadoras-software.index')
            ->with('success', 'ComputadorasSoftware deleted successfully');
    }
}
