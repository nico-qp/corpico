<?php

namespace App\Http\Controllers;

use App\Models\SoUser;
use Illuminate\Http\Request;

/**
 * Class SoUserController
 * @package App\Http\Controllers
 */
class SoUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $soUsers = SoUser::paginate();

        return view('so-user.index', compact('soUsers'))
            ->with('i', (request()->input('page', 1) - 1) * $soUsers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $soUser = new SoUser();
        return view('so-user.create', compact('soUser'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(SoUser::$rules);

        $soUser = SoUser::create($request->all());

        return redirect()->route('so-users.index')
            ->with('success', 'SoUser created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $soUser = SoUser::find($id);

        return view('so-user.show', compact('soUser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $soUser = SoUser::find($id);

        return view('so-user.edit', compact('soUser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  SoUser $soUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SoUser $soUser)
    {
        request()->validate(SoUser::$rules);

        $soUser->update($request->all());

        return redirect()->route('so-users.index')
            ->with('success', 'SoUser updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $soUser = SoUser::find($id)->delete();

        return redirect()->route('so-users.index')
            ->with('success', 'SoUser deleted successfully');
    }
}
