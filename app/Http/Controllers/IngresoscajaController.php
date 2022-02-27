<?php

namespace App\Http\Controllers;

use App\Models\Ingresoscaja;
use Illuminate\Http\Request;

/**
 * Class IngresoscajaController
 * @package App\Http\Controllers
 */
class IngresoscajaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingresoscajas = Ingresoscaja::paginate();

        return view('ingresoscaja.index', compact('ingresoscajas'))
            ->with('i', (request()->input('page', 1) - 1) * $ingresoscajas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ingresoscaja = new Ingresoscaja();
        return view('ingresoscaja.create', compact('ingresoscaja'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Ingresoscaja::$rules);

        $ingresoscaja = Ingresoscaja::create($request->all());

        return redirect()->route('ingresoscajas.index')
            ->with('success', 'Ingresoscaja created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ingresoscaja = Ingresoscaja::find($id);

        return view('ingresoscaja.show', compact('ingresoscaja'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ingresoscaja = Ingresoscaja::find($id);

        return view('ingresoscaja.edit', compact('ingresoscaja'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ingresoscaja $ingresoscaja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ingresoscaja $ingresoscaja)
    {
        request()->validate(Ingresoscaja::$rules);

        $ingresoscaja->update($request->all());

        return redirect()->route('ingresoscajas.index')
            ->with('success', 'Ingresoscaja updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ingresoscaja = Ingresoscaja::find($id)->delete();

        return redirect()->route('ingresoscajas.index')
            ->with('success', 'Ingresoscaja deleted successfully');
    }
}
