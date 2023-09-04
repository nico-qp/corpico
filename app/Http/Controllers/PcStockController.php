<?php

namespace App\Http\Controllers;

use App\Models\PcStock;
use Illuminate\Http\Request;

/**
 * Class PcStockController
 * @package App\Http\Controllers
 */
class PcStockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pcStocks = PcStock::paginate();

        return view('pc-stock.index', compact('pcStocks'))
            ->with('i', (request()->input('page', 1) - 1) * $pcStocks->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pcStock = new PcStock();
        return view('pc-stock.create', compact('pcStock'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(PcStock::$rules);

        $pcStock = PcStock::create($request->all());

        return redirect()->route('pc-stock.index')
            ->with('success', 'PcStock created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pcStock = PcStock::find($id);

        return view('pc-stock.show', compact('pcStock'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pcStock = PcStock::find($id);

        return view('pc-stock.edit', compact('pcStock'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  PcStock $pcStock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PcStock $pcStock)
    {
        request()->validate(PcStock::$rules);

        $resultado=$pcStock->update($request->all());
        dd($resultado, $request->all());
        die();

        return redirect()->route('pc-stock.index')
            ->with('success', 'PcStock updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $pcStock = PcStock::find($id)->delete();

        return redirect()->route('pc-stock.index')
            ->with('success', 'PcStock deleted successfully');
    }
}
