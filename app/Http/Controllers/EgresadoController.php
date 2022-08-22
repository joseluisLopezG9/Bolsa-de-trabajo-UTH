<?php

namespace App\Http\Controllers;

use App\Models\Egresado;
use App\Models\Nivele;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function index(Request $request)
    {
        $texto = trim($request->get('texto'));
        $egresados = DB::table('egresados')
                    ->select('id','nombre','apellidoPaterno','apellidoMaterno','matricula','folio')
                    ->where('matricula','LIKE','%'.$texto.'%')
                    ->orWhere('folio','LIKE','%'.$texto.'%')
                    ->orderBy('folio','asc')
                    ->paginate(10);

        return view('egresado.index', compact('egresados','texto'));
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
        return view('egresado.create', compact('egresado','niveles'));
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

        return redirect()->route('egresados.index')
            ->with('success', 'Egresado eliminado');
    }
}
