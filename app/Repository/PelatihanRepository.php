<?php

namespace App\Repository;

use App\Models\Pelatihan;
use Illuminate\Support\Facades\Log;

class PelatihanRepository
{
    protected $pelatihan;

    public function __construct(Pelatihan $pelatihan)
    {
        $this->pelatihan = $pelatihan;
    }

    public function index()
    {
        try {
            $pelatihan = $this->pelatihan->all();
            $setuju = $this->pelatihan->where('status', 'setuju')->count();
            $tidaksetuju = $this->pelatihan->where('status', 'tidaksetuju')->count();
            $belumsetuju = $this->pelatihan->where('status', 'null')->count();
            return ['pelatihan' => $pelatihan, 'setuju' => $setuju, 'tidaksetuju' => $tidaksetuju, 'belumsetuju' => $belumsetuju];
        } catch (\Illuminate\Database\QueryException $e) {
            $errormessage = $e->getMessage();
            Log::error($errormessage);
            return 'Data gagal ditampilkan';
        }
    }

    public function store($data)
    {
        try {
            $this->pelatihan->create($data);
            return 'Data berhasil disimpan';
        } catch (\Illuminate\Database\QueryException $e) {
            $errormessage = $e->getMessage();
            Log::error($errormessage);
            return $errormessage;
        }
    }

    public function show($id)
    {
        try {
            return $this->pelatihan->find($id);
        } catch (\Illuminate\Database\QueryException $e) {
            $errormessage = $e->getMessage();
            Log::error($errormessage);
            return $errormessage;
        }
    }
}
