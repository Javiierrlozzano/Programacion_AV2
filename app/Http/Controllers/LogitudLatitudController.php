<?php

namespace App\Http\Controllers;

use App\Models\LogitudLatitud;
use Illuminate\Http\Request;

/**
 * Class LogitudLatitudController
 * @package App\Http\Controllers
 */
class LogitudLatitudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logitudLatituds = LogitudLatitud::paginate();

        return view('logitud-latitud.index', compact('logitudLatituds'))
            ->with('i', (request()->input('page', 1) - 1) * $logitudLatituds->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $logitudLatitud = new LogitudLatitud();
        return view('logitud-latitud.create', compact('logitudLatitud'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(LogitudLatitud::$rules);

        $logitudLatitud = LogitudLatitud::create($request->all());

        return redirect()->route('logitud-latituds.index')
            ->with('success', 'LogitudLatitud created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $logitudLatitud = LogitudLatitud::find($id);

        return view('logitud-latitud.show', compact('logitudLatitud'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $logitudLatitud = LogitudLatitud::find($id);

        return view('logitud-latitud.edit', compact('logitudLatitud'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  LogitudLatitud $logitudLatitud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LogitudLatitud $logitudLatitud)
    {
        request()->validate(LogitudLatitud::$rules);

        $logitudLatitud->update($request->all());

        return redirect()->route('logitud-latituds.index')
            ->with('success', 'LogitudLatitud updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $logitudLatitud = LogitudLatitud::find($id)->delete();

        return redirect()->route('logitud-latituds.index')
            ->with('success', 'LogitudLatitud deleted successfully');
    }
}
