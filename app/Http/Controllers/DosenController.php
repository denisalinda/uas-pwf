<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DosenModel;

class DosenController extends Controller
{
    public function profil()
    {
        $profil=DosenModel::all();
        $tittle="profil";
        return view('dosen.profil', compact('tittle', 'profil'));
    }

    public function profil()
    {
        $profil=DosenModel::all();
        $tittle="Data Pengampu";
        return view('dosen.datapengampu', compact('tittle', 'data_pengampu'));
    }
}
