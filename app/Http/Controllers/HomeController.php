<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $beritas = Berita::orderBy('created_at', 'desc')->limit(4)->get();
        return view('page.home', compact('beritas'));
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
        $beritas = Berita::orderBy('created_at', 'desc')->paginate(12);
        return view('page.berita', compact('beritas'));
    }

    public function beritaDetail($id){
        $berita = Berita::find($id);
        // dd($berita);
        return view('page.berita_detail', compact('berita'));
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
