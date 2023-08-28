<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Dirkom;
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
        $tb_dirkom=Dirkom::whereBetween('level', [4, 7])->get();
        // dd($tb_dirkom);
        $komut = Dirkom::where('level', 1)->first();
        $kom2 = Dirkom::where('level', 2)->first();
        $kom3 = Dirkom::where('level', 3)->first();
        return view('page.profil',compact('komut', 'kom2', 'kom3','tb_dirkom'));
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
