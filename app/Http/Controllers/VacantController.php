<?php

namespace App\Http\Controllers;

use App\Models\Vacante;
use Illuminate\Http\Request;

/**
 * Class VacanteController
 * @package App\Http\Controllers
 */
class VacantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacantes = Vacante::paginate();

        return view('vacant.index', compact('vacantes'))
            ->with('i', (request()->input('page', 1) - 1) * $vacantes->perPage());
    }
}
