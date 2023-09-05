<?php

namespace App\Http\Controllers;

use App\Models\Pc;
use App\Models\Sectore;
use Illuminate\Http\Request;

/**
 * Class PcController
 * @package App\Http\Controllers
 */
class PcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pcs = Pc::paginate();

        return view('pc.index', compact('pcs'))
            ->with('i', (request()->input('page', 1) - 1) * $pcs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pc = new Pc();
        $sectores = Sectore::pluck('sector','id');
        return view('pc.create', compact('pc','sectores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Pc::$rules);

        $pc = Pc::create($request->all());

        return redirect()->route('pcs.index')
            ->with('success', 'Pc created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pc = Pc::find($id);

        return view('pc.show', compact('pc'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pc = Pc::find($id);

        return view('pc.edit', compact('pc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Pc $pc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pc $pc)
    {
        request()->validate(Pc::$rules);

        $pc->update($request->all());

        return redirect()->route('pcs.index')
            ->with('success', 'Pc updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $pc = Pc::find($id)->delete();

        return redirect()->route('pcs.index')
            ->with('success', 'Pc deleted successfully');
    }
}
