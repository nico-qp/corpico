<?php

namespace App\Http\Controllers;

use App\Models\Software;
use Illuminate\Http\Request;

/**
 * Class SoftwareController
 * @package App\Http\Controllers
 */
class SoftwareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $softwares = Software::paginate();

        return view('software.index', compact('softwares'))
            ->with('i', (request()->input('page', 1) - 1) * $softwares->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $software = new Software();
        return view('software.create', compact('software'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Software::$rules);

        $software = Software::create($request->all());

        return redirect()->route('softwares.index')
            ->with('success', 'Software creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $software = Software::find($id);

        return view('software.show', compact('software'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $software = Software::find($id);

        return view('software.edit', compact('software'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Software $software
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Software $software)
    {
        request()->validate(Software::$rules);

        $software->update($request->all());

        return redirect()->route('softwares.index')
            ->with('success', 'Software modificado correctamente.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $software = Software::find($id)->delete();

        return redirect()->route('softwares.index')
            ->with('success', 'Software eliminado correctamente.');
    }
}
