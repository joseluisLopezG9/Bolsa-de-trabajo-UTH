<?php

namespace App\Http\Controllers;

use App\Models\Giro;
use Illuminate\Http\Request;

/**
 * Class GiroController
 * @package App\Http\Controllers
 */
class GiroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $giros = Giro::paginate();

        return view('giro.index', compact('giros'))
            ->with('i', (request()->input('page', 1) - 1) * $giros->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $giro = new Giro();
        return view('giro.create', compact('giro'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Giro::$rules);

        $giro = Giro::create($request->all());

        return redirect()->route('giros.index')
            ->with('success', 'Giro created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $giro = Giro::find($id);

        return view('giro.show', compact('giro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $giro = Giro::find($id);

        return view('giro.edit', compact('giro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Giro $giro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Giro $giro)
    {
        request()->validate(Giro::$rules);

        $giro->update($request->all());

        return redirect()->route('giros.index')
            ->with('success', 'Giro updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $giro = Giro::find($id)->delete();

        return redirect()->route('giros.index')
            ->with('success', 'Giro deleted successfully');
    }
}
