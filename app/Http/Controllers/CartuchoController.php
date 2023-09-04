<?php

namespace App\Http\Controllers;

use App\Models\Cartucho;
use Illuminate\Http\Request;

/**
 * Class CartuchoController
 * @package App\Http\Controllers
 */
class CartuchoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartuchos = Cartucho::paginate();

        return view('cartucho.index', compact('cartuchos'))
            ->with('i', (request()->input('page', 1) - 1) * $cartuchos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cartucho = new Cartucho();
        return view('cartucho.create', compact('cartucho'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Cartucho::$rules);

        $cartucho = Cartucho::create($request->all());

        return redirect()->route('cartucho.index')
            ->with('success', 'Cartucho created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cartucho = Cartucho::find($id);

        return view('cartucho.show', compact('cartucho'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cartucho = Cartucho::find($id);

        return view('cartucho.edit', compact('cartucho'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cartucho $cartucho
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cartucho $cartucho)
    {
        request()->validate(Cartucho::$rules);

        $cartucho->update($request->all());

        return redirect()->route('cartucho.index')
            ->with('success', 'Cartucho updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cartucho = Cartucho::find($id)->delete();

        return redirect()->route('cartucho.index')
            ->with('success', 'Cartucho deleted successfully');
    }
}
