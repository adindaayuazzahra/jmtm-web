<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('page.home');
    }

    public function profil()
    {
        return view('page.profil');
    }

    public function pengadaan()
    {
        return view('page.pengadaan');
    }

    public function bobcat()
    {
        return view('3d.bobcat');
    }

    public function berita()
    {
        return view('page.berita');
    }

    public function kontak()
    {
        return view('page.kontak_kami');
    }
    public function general_contractor()
    {
        return view('page.general_contractor');
    }
    public function kontrak_manajemen()
    {
        return view('page.kontrak_manajemen');
    }
    public function jasa_survey()
    {
        return view('page.jasa_survey');
    }
    public function jasa_sewa()
    {
        return view('page.alat_berat');
    }

    public function produk()
    {
        return view('page.produk');
    }

    public function disclaimer()
    {
        return view('page.disclaimer');
    }
}
