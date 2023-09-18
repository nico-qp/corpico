<?php

namespace App\Http\Controllers;

use App\Models\CartTon;
use App\Models\Uso;

use Illuminate\Http\Request;

/**
 * Class CartTonController
 * @package App\Http\Controllers
 */
class CartTonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartTons = CartTon::paginate();

        return view('cart-ton.index', compact('cartTons'))
            ->with('i', (request()->input('page', 1) - 1) * $cartTons->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cartTon = new CartTon();
        $uso = Uso::pluck('uso_mensual','id'); 
        return view('cart-ton.create', compact('cartTon','uso'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CartTon::$rules);

        $cartTon = CartTon::create($request->all());

        return redirect()->route('cart-ton.index')
            ->with('success', 'CartTon created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cartTon = CartTon::find($id);

        return view('cart-ton.show', compact('cartTon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cartTon = CartTon::find($id);
        $uso = Uso::Pluck('uso_mensual');

        return view('cart-ton.edit', compact('cartTon','uso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CartTon $cartTon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CartTon $cartTon)
    {
        request()->validate(CartTon::$rules);

        $cartTon->update($request->all());

        return redirect()->route('cart-ton.index')
            ->with('success', 'CartTon updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cartTon = CartTon::find($id)->delete();

        return redirect()->route('cart-ton.index')
            ->with('success', 'CartTon deleted successfully');
    }
}
