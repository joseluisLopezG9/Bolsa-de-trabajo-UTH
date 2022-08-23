<?php

namespace App\Http\Controllers;

use App\Models\Egresado;
use App\Models\Nivele;
use App\Models\Carrera;
use App\Models\Generacione;
use App\Models\Estado;
use App\Models\Area;
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
        ->with('i', (request()->input('page', 1) - 1) * $egresados->perPage());;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $egresado = new Egresado();
        $niveles = Nivele::pluck('nombre','id');
        $carreras = Carrera::pluck('nombre','id');
        $generaciones = Generacione::pluck('descripcion','id');
        $estados = Estado::pluck('nombre','id');
        $areas = Area::pluck('nombre','id');

        return view('egresado.create', compact('egresado','niveles','carreras','generaciones','estados','areas'));
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

        return redirect()->route('admin.egresados.index')
            ->with('success', 'Egresado creado');
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
        $niveles = Nivele::pluck('nombre','id');
        $carreras = Carrera::pluck('nombre','id');
        $generaciones = Generacione::pluck('descripcion','id');
        $estados = Estado::pluck('nombre','id');
        $areas = Area::pluck('nombre','id');

        return view('egresado.edit', compact('egresado','niveles','carreras','generaciones','estados','areas'));
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

        return redirect()->route('admin.egresados.index')
            ->with('success', 'Egresado actualizado');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $egresado = Egresado::find($id)->delete();

        return redirect()->route('admin.egresados.index')
            ->with('success', 'Egresado eliminado');
    }

    public function verVigentes()
    {
        return view('egresado.vigentes');
    }

    public function NOvigentes($id)
    {
        $egresado = Egresado::find($id);

        return view('egresado.NOvigentes', compact('egresado'));
    }

    public function datosAcceso()
    {
        return view('egresado.datos_acceso');
    }
}
