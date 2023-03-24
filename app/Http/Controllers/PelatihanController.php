<?php

namespace App\Http\Controllers;

use App\Models\Pelatihan;
use Illuminate\Http\Request;
use App\Service\PelatihanService;

class PelatihanController extends Controller
{

    protected $pelatihanservice;

    public function __construct(PelatihanService $pelatihanservice)
    {
        $this->pelatihanservice = $pelatihanservice;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $result = $this->pelatihanservice->index();
        return response()->json($result, 200);
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

        $result = $this->pelatihanservice->store($request);
        if ($result == 'Data berhasil disimpan') {
            return response()->json($result, 200);
        } else {
            return response()->json($result, 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelatihan $pelatihan, Request $request, $id)
    {
        //
        $result = $this->pelatihanservice->show($id);
        return response()->json($result, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelatihan $pelatihan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pelatihan $pelatihan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelatihan $pelatihan)
    {
        //
    }
}
