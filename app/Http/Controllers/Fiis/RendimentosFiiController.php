<?php

namespace App\Http\Controllers\Fiis;

use App\Http\Controllers\Controller;
use App\Models\Fiis\RendimentoFii;
use App\Services\Common\FormatService;
use Illuminate\Http\Request;

class RendimentosFiiController extends Controller
{
    private $fs;

    public function __construct(
        FormatService $formatService
    )
    {
        $this->fs = $formatService;
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rendimentos = RendimentoFii::orderBy('created_at', 'desc')->get();

        return view('fiis.rendimentos.index', compact('rendimentos'));

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
