<?php

namespace App\Http\Controllers;

use App\Models\Consumible;
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
        return view('consumible.create', compact('consumible'));
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
            ->with('success', 'Consumible created successfully.');
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

        return view('consumible.edit', compact('consumible'));
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
            ->with('success', 'Consumible updated successfully');
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
            ->with('success', 'Consumible deleted successfully');
    }
}
