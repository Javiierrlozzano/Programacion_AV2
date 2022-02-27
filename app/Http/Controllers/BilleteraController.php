<?php

namespace App\Http\Controllers;

use App\Models\Billetera;
use Illuminate\Http\Request;

/**
 * Class BilleteraController
 * @package App\Http\Controllers
 */
class BilleteraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $billeteras = Billetera::paginate();

        return view('billetera.index', compact('billeteras'))
            ->with('i', (request()->input('page', 1) - 1) * $billeteras->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $billetera = new Billetera();
        return view('billetera.create', compact('billetera'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Billetera::$rules);

        $billetera = Billetera::create($request->all());

        return redirect()->route('billeteras.index')
            ->with('success', 'Billetera created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $billetera = Billetera::find($id);

        return view('billetera.show', compact('billetera'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $billetera = Billetera::find($id);

        return view('billetera.edit', compact('billetera'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Billetera $billetera
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Billetera $billetera)
    {
        request()->validate(Billetera::$rules);

        $billetera->update($request->all());

        return redirect()->route('billeteras.index')
            ->with('success', 'Billetera updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $billetera = Billetera::find($id)->delete();

        return redirect()->route('billeteras.index')
            ->with('success', 'Billetera deleted successfully');
    }
}
