<?php

namespace App\Http\Controllers;

use App\Models\kos;
use App\Http\Requests\StorekosRequest;
use App\Http\Requests\UpdatekosRequest;

class KosController extends Controller
{
    public function index()
    {
        $kost = kos::all();
        return view('landing-page.kost',['kost' => $kost]);
    }
    public function date_kos()
    {

    }
}
