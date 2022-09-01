<?php

namespace App\Http\Controllers;

use App\Models\Egresado;
use Illuminate\Http\Request;

/**
 * Class EgresadoController
 * @package App\Http\Controllers
 */
class GraduateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $egresados = Egresado::paginate();

        return view('graduate.index', compact('egresados'))
        ->with('i', (request()->input('page', 1) - 1) * $egresados->perPage());;
    }
}
