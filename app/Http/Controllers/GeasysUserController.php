<?php

namespace App\Http\Controllers;

use App\Models\GeasysUser;
use Illuminate\Http\Request;

/**
 * Class GeasysUserController
 * @package App\Http\Controllers
 */
class GeasysUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $geasysUsers = GeasysUser::paginate();

        return view('geasys-user.index', compact('geasysUsers'))
            ->with('i', (request()->input('page', 1) - 1) * $geasysUsers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $geasysUser = new GeasysUser();
        return view('geasys-user.create', compact('geasysUser'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(GeasysUser::$rules);

        $geasysUser = GeasysUser::create($request->all());

        return redirect()->route('geasys-users.index')
            ->with('success', 'GeasysUser created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $geasysUser = GeasysUser::find($id);

        return view('geasys-user.show', compact('geasysUser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $geasysUser = GeasysUser::find($id);

        return view('geasys-user.edit', compact('geasysUser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  GeasysUser $geasysUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GeasysUser $geasysUser)
    {
        request()->validate(GeasysUser::$rules);

        $geasysUser->update($request->all());

        return redirect()->route('geasys-users.index')
            ->with('success', 'GeasysUser updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $geasysUser = GeasysUser::find($id)->delete();

        return redirect()->route('geasys-users.index')
            ->with('success', 'GeasysUser deleted successfully');
    }
}
