<?php

namespace App\Service;

use App\Repository\PelatihanRepository;
use Illuminate\Http\Request;

class PelatihanService
{
    protected $pelatihanrepository;

    public function __construct(PelatihanRepository $pelatihanrepository)
    {
        $this->pelatihanrepository = $pelatihanrepository;
    }

    public function index()
    {
        return $this->pelatihanrepository->index();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'namapelatihan' => 'required|string',
            'deskripsipelatihan' => 'required|string',
            'mulaipelatihan' => 'required|date',
            'selesaipelatihan' => 'required|date',
            'tempatpelatihan' => 'required|string',
        ]);

        return $this->pelatihanrepository->store($validated);
    }

    public function show($id)
    {
        return $this->pelatihanrepository->show($id);
    }
}
