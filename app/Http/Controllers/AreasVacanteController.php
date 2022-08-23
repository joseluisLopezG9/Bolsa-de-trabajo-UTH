<?php

namespace App\Http\Controllers;

use App\Models\AreasVacante;
use Illuminate\Http\Request;

/**
 * Class AreasVacanteController
 * @package App\Http\Controllers
 */
class AreasVacanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areasVacantes = AreasVacante::paginate();

        return view('areas-vacante.index', compact('areasVacantes'))
            ->with('i', (request()->input('page', 1) - 1) * $areasVacantes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areasVacante = new AreasVacante();
        return view('areas-vacante.create', compact('areasVacante'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(AreasVacante::$rules);

        $areasVacante = AreasVacante::create($request->all());

        return redirect()->route('admin.areas-vacantes.index')
            ->with('success', 'Área creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $areasVacante = AreasVacante::find($id);

        return view('areas-vacante.show', compact('areasVacante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $areasVacante = AreasVacante::find($id);

        return view('areas-vacante.edit', compact('areasVacante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  AreasVacante $areasVacante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AreasVacante $areasVacante)
    {
        request()->validate(AreasVacante::$rules);

        $areasVacante->update($request->all());

        return redirect()->route('admin.areas-vacantes.index')
            ->with('success', 'Área actualizada');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $areasVacante = AreasVacante::find($id)->delete();

        return redirect()->route('admin.areas-vacantes.index')
            ->with('success', 'Área eliminada');
    }
}
