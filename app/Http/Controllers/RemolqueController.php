<?php

namespace App\Http\Controllers;

use App\Models\Remolque;
use Illuminate\Http\Request;

class RemolqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $remolque = Remolque::paginate();
        return view('trailer.index', compact('remolque'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Remolque $remolque)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Remolque $remolque)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Remolque $remolque)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Remolque $remolque)
    {
        //
    }
}
