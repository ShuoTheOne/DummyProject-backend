<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Orc;

class OrcController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Orc::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'clan' => 'required|string',
        ]);

        return Orc::create($request->only(['name', 'clan']));
    }

    /**
     * Display the specified resource.
     */
    public function show(Orc $orc)
    {
        return $orc;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Orc $orc)
    {
        $request->validate([
            'name' => 'required|string',
            'clan' => 'required|string',
        ]);

        $orc->update($request->only(['name', 'clan']));
        return $orc;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Orc $orc)
    {
        return response()->json(['message' => 'Orc deleted successfully'], 204);
    }
}
