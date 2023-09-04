<?php

namespace App\Http\Controllers;

use App\Models\Tonner;
use Illuminate\Http\Request;

/**
 * Class TonnerController
 * @package App\Http\Controllers
 */
class TonnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tonners = Tonner::paginate();

        return view('tonner.index', compact('tonners'))
            ->with('i', (request()->input('page', 1) - 1) * $tonners->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tonner = new Tonner();
        return view('tonner.create', compact('tonner'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tonner::$rules);

        $tonner = Tonner::create($request->all());

        return redirect()->route('tonner.index')
            ->with('success', 'Tonner created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tonner = Tonner::find($id);

        return view('tonner.show', compact('tonner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tonner = Tonner::find($id);

        return view('tonner.edit', compact('tonner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tonner $tonner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tonner $tonner)
    {
        request()->validate(Tonner::$rules);

        $tonner->update($request->all());

        return redirect()->route('tonner.index')
            ->with('success', 'Tonner updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tonner = Tonner::find($id)->delete();

        return redirect()->route('tonner.index')
            ->with('success', 'Tonner deleted successfully');
    }
}
