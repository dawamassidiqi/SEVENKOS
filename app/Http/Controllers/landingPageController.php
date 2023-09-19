<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kos;

class landingPageController extends Controller
{
    public function index( Request $request)
    {
        //$kosJogja =  ['saturan','babarsari','condong-catur','demangan','taman-siswa','maguwoharjo'];
        //$namaKosJogja = kos::where('alamatKos', 'like', '% '.$kosJogja[0].' %')->get();

        // $kosAreaJogja = [];
        // $kosAreaJogja =  $kostJogja = kos::where('alamatKos', 'like', '% '.$kosJogja[0].' %')->get();
        // kos di saturan
        $saturan = "saturan";
        $datakos1 = kos::where('alamatKos', 'like', '% '.$saturan.' %')->get();
        // kos di saturan
        $babarsari = "babarsari";
        $datakos2 = kos::where('alamatKos', 'like', '% '.$babarsari.' %')->get();
        // kos di saturan
        $condongCatur = "condong catur";
        $datakos3 = kos::where('alamatKos', 'like', '% '.$condongCatur.' %')->get();
        // kos di saturan
        $demangan = "demangan";
        $datakos4 = kos::where('alamatKos', 'like', '% '.$demangan.' %')->get();
        // kos di saturan
        $tamanSiswa = "taman siswa";
        $datakos5 = kos::where('alamatKos', 'like', '% '.$tamanSiswa.' %')->get();
        // kos di saturan
        $maguwoharjo = "maguwoharjo";
        $datakos6 = kos::where('alamatKos', 'like', '% '.$maguwoharjo.' %')->get();

        // mencari kos dengan fitur search
        $kos_search = $request->input('kos_search'); 
        $kost = kos::where('namaKos', 'like', '%' . $kos_search . '%')->get();

        // menampilkan page landing page beserta data kos yang sudah di inisilisasi sebelumnya
        return view('landing-page.landing_page', [
            'kost' => $kost,
            //['saturan','babarsari','condong-catur','demangan','taman-siswa','maguwoharjo'] =>$kostJogja
            'saturan'=> $datakos1,
            'babarsari' =>$datakos2,
            'condong-catur' =>$datakos3,
            'demangan'=>$datakos4,
            'taman-siswa'=>$datakos5,
            'maguwoharjo'=>$datakos6
        ]);

    }
}
