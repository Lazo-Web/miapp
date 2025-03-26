<?php

namespace App\Http\Controllers;

use App\Models\Tractora;
use Illuminate\Http\Request;

class TractoraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tractor = Tractora::paginate();
        return view('equipos.index', compact('tractor'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('equipos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
          'matricula' => 'required|string|min:7|max:10',
          'marca' => 'string|min:2|max:100',

        ]);
        Tractora::create($data);
        return view('equipos.tractora');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tractora $tractora)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tractora $tractora)
    {
        return view('equipos.edit', compact('tractora'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tractora $tractora)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tractora $tractora)
    {
        //
    }
}
