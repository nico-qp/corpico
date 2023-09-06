<?php

namespace App\Http\Controllers;

use App\Models\ImpresoraStock;
use Illuminate\Http\Request;

/**
 * Class ImpresoraStockController
 * @package App\Http\Controllers
 */
class ImpresorasStockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $impresoraStocks = ImpresoraStock::paginate();

        return view('impresora-stock.index', compact('impresoraStocks'))
            ->with('i', (request()->input('page', 1) - 1) * $impresoraStocks->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $impresoraStock = new ImpresoraStock();
        return view('impresora-stock.create', compact('impresoraStock'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ImpresoraStock::$rules);

        $impresoraStock = ImpresoraStock::create($request->all());

        return redirect()->route('impresora-stock.index')
            ->with('success', 'ImpresoraStock created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $impresoraStock = ImpresoraStock::find($id);

        return view('impresora-stock.show', compact('impresoraStock'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $impresoraStock = ImpresoraStock::find($id);

        return view('impresora-stock.edit', compact('impresoraStock'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ImpresoraStock $impresoraStock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ImpresoraStock $impresoraStock)
    {
        request()->validate(ImpresoraStock::$rules);

        $impresoraStock->update($request->all());

        return redirect()->route('impresora-stock.index')
            ->with('success', 'ImpresoraStock updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $impresoraStock = ImpresoraStock::find($id)->delete();

        return redirect()->route('impresora-stock.index')
            ->with('success', 'ImpresoraStock deleted successfully');
    }
}
