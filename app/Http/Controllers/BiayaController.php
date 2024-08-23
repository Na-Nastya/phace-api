<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLoginRequest;
use App\Http\Requests\UpdateLoginRequest;
use App\Models\Biaya;
use App\Models\Login;
use Illuminate\Http\Request;

class BiayaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Biaya::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'page' => 'required|max:128',
            'limit' => 'required',
            'order_dir' => 'required'
        ]);
        $biaya = Biaya::create($fields);

        return $biaya;
    }

    /**
     * Display the specified resource.
     */
    public function show(Biaya $biaya)
    {
        return $biaya;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Biaya $biaya)
    {
        $fields = $request->validate([
            'page' => 'required|max:128',
            'limit' => 'required',
            'order_dir' => 'required'
        ]);
        $biaya->update($fields);

        return $biaya;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Biaya $biaya)
    {
        $biaya->delete();
        return ['message' => 'biaya has been deleted'];
    }
}
