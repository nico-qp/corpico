<?php

namespace App\Http\Controllers;

use App\Models\ImpresorasStock;
use Illuminate\Http\Request;

/**
 * Class ImpresorasStockController
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
        $impresorasStocks = ImpresorasStock::paginate();

        return view('impresoras-stock.index', compact('impresorasStocks'))
            ->with('i', (request()->input('page', 1) - 1) * $impresorasStocks->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $impresorasStock = new ImpresorasStock();
        return view('impresoras-stock.create', compact('impresorasStock'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ImpresorasStock::$rules);

        $impresorasStock = ImpresorasStock::create($request->all());

        return redirect()->route('impresora-stock.index')
            ->with('success', 'ImpresorasStock created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $impresorasStock = ImpresorasStock::find($id);

        return view('impresoras-stock.show', compact('impresorasStock'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $impresorasStock = ImpresorasStock::find($id);

        return view('impresoras-stock.edit', compact('impresorasStock'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ImpresorasStock $impresorasStock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ImpresorasStock $impresorasStock)
    {
        request()->validate(ImpresorasStock::$rules);

        $impresorasStock->update($request->all());

        return redirect()->route('impresora-stock.index')
            ->with('success', 'ImpresorasStock updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $impresorasStock = ImpresorasStock::find($id)->delete();

        return redirect()->route('impresora-stock.index')
            ->with('success', 'ImpresorasStock deleted successfully');
    }
}
