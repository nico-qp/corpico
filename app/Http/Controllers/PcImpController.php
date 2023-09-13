<?php

namespace App\Http\Controllers;

use App\Models\PcImp;
use App\Models\Impresora;
use App\Models\Pc;
use Illuminate\Http\Request;

/**
 * Class PcImpController
 * @package App\Http\Controllers
 */
class PcImpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pcImps = PcImp::paginate();

        return view('pc-imp.index', compact('pcImps'))
            ->with('i', (request()->input('page', 1) - 1) * $pcImps->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pcImp = new PcImp();
        $pc = Pc::pluck('ip_172','id');
        $impresora = Impresora::pluck('nom_ip','id');
        return view('pc-imp.create', compact('pcImp', 'pc', 'impresora'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(PcImp::$rules);

        $pcImp = PcImp::create($request->all());

        return redirect()->route('pc-imps.index')
            ->with('success', 'PcImp created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pcImp = PcImp::find($id);

        return view('pc-imp.show', compact('pcImp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pcImp = PcImp::find($id);
        $pc = Pc::pluck('ip_172','id');
        $impresora = Impresora::pluck('nom_ip','id');
        return view('pc-imp.edit', compact('pcImp', 'pc', 'impresora'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  PcImp $pcImp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PcImp $pcImp)
    {
        request()->validate(PcImp::$rules);

        $pcImp->update($request->all());

        return redirect()->route('pc-imps.index')
            ->with('success', 'PcImp updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $pcImp = PcImp::find($id)->delete();

        return redirect()->route('pc-imps.index')
            ->with('success', 'PcImp deleted successfully');
    }
}
