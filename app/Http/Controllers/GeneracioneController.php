<?php

namespace App\Http\Controllers;

use App\Models\Generacione;
use Illuminate\Http\Request;

/**
 * Class GeneracioneController
 * @package App\Http\Controllers
 */
class GeneracioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $generaciones = Generacione::paginate();

        return view('generacione.index', compact('generaciones'))
            ->with('i', (request()->input('page', 1) - 1) * $generaciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $generacione = new Generacione();
        return view('generacione.create', compact('generacione'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Generacione::$rules);

        $generacione = Generacione::create($request->all());

        return redirect()->route('admin.generaciones.index')
            ->with('success', 'Generación creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $generacione = Generacione::find($id);

        return view('generacione.show', compact('generacione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $generacione = Generacione::find($id);

        return view('generacione.edit', compact('generacione'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Generacione $generacione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Generacione $generacione)
    {
        request()->validate(Generacione::$rules);

        $generacione->update($request->all());

        return redirect()->route('admin.generaciones.index')
            ->with('success', 'Generación actualizada');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $generacione = Generacione::find($id)->delete();

        return redirect()->route('admin.generaciones.index')
            ->with('success', 'Generación eliminada');
    }
}
