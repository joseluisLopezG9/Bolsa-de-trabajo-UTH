<?php

namespace App\Http\Controllers;

use App\Models\Egresado;
use Illuminate\Http\Request;

/**
 * Class EgresadoController
 * @package App\Http\Controllers
 */
class EgresadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $egresados = Egresado::paginate();

        return view('egresado.index', compact('egresados'))
            ->with('i', (request()->input('page', 1) - 1) * $egresados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $egresado = new Egresado();
        return view('egresado.create', compact('egresado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Egresado::$rules);

        $egresado = Egresado::create($request->all());

        return redirect()->route('egresados.index')
            ->with('success', 'Egresado created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $egresado = Egresado::find($id);

        return view('egresado.show', compact('egresado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $egresado = Egresado::find($id);

        return view('egresado.edit', compact('egresado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Egresado $egresado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Egresado $egresado)
    {
        request()->validate(Egresado::$rules);

        $egresado->update($request->all());

        return redirect()->route('egresados.index')
            ->with('success', 'Egresado updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $egresado = Egresado::find($id)->delete();

        return redirect()->route('egresados.index')
            ->with('success', 'Egresado deleted successfully');
    }
}
