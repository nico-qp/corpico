<?php

namespace App\Http\Controllers;

use App\Models\Condition;
use Illuminate\Http\Request;

/**
 * Class ConditionController
 * @package App\Http\Controllers
 */
class ConditionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conditions = Condition::paginate();

        return view('condition.index', compact('conditions'))
            ->with('i', (request()->input('page', 1) - 1) * $conditions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $condition = new Condition();
        return view('condition.create', compact('condition'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Condition::$rules);

        $condition = Condition::create($request->all());

        return redirect()->route('conditions.index')
            ->with('success', 'Condition created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $condition = Condition::find($id);

        return view('condition.show', compact('condition'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $condition = Condition::find($id);

        return view('condition.edit', compact('condition'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Condition $condition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Condition $condition)
    {
        request()->validate(Condition::$rules);

        $condition->update($request->all());

        return redirect()->route('conditions.index')
            ->with('success', 'Condition updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $condition = Condition::find($id)->delete();

        return redirect()->route('conditions.index')
            ->with('success', 'Condition deleted successfully');
    }
}
