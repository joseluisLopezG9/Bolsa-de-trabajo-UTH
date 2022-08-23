<?php

namespace App\Http\Controllers;

use App\Models\Vacante;
use App\Models\Empresa;
use App\Models\Nivele;
use App\Models\AreasVacante;
use Illuminate\Http\Request;

/**
 * Class VacanteController
 * @package App\Http\Controllers
 */
class VacanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacantes = Vacante::paginate();

        return view('vacante.index', compact('vacantes'))
            ->with('i', (request()->input('page', 1) - 1) * $vacantes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vacante = new Vacante();
        $empresas = Empresa::pluck('nombre','id');
        $niveles = Nivele::pluck('nombre','id');
        $areas_vacantes = AreasVacante::pluck('nombre','id');
        
        return view('vacante.create', compact('vacante','empresas','niveles','areas_vacantes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Vacante::$rules);

        $vacante = Vacante::create($request->all());

        return redirect()->route('admin.vacantes.index')
            ->with('success', 'Vacante creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vacante = Vacante::find($id);

        return view('vacante.show', compact('vacante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vacante = Vacante::find($id);
        $empresas = Empresa::pluck('nombre','id');
        $niveles = Nivele::pluck('nombre','id');
        $areas_vacantes = AreasVacante::pluck('nombre','id');

        return view('vacante.edit', compact('vacante','empresas','niveles','areas_vacantes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Vacante $vacante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vacante $vacante)
    {
        request()->validate(Vacante::$rules);

        $vacante->update($request->all());

        return redirect()->route('admin.vacantes.index')
            ->with('success', 'Vacante actualizada');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $vacante = Vacante::find($id)->delete();

        return redirect()->route('admin.vacantes.index')
            ->with('success', 'Vacante eliminada');
    }
}
