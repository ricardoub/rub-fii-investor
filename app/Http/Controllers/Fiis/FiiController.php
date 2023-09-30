<?php

namespace App\Http\Controllers\Fiis;

use App\Http\Controllers\Controller;
use App\Models\Fiis\Fii;
use Illuminate\Http\Request;

class FiiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fiis = Fii::all();

        return view('fiis.index', compact('fiis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fii = new Fii;

        return view('fiis.create', compact('fii'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
