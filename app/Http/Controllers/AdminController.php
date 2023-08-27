<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('admin.home');
        }
        return view('admin.login');
    }

    public function loginDo(Request $request)
    {
        request()->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();
            if ($user->akses_level == 0) {
                $request->session()->flash('message', 'Anda Berhasil Login!');
                $request->session()->flash('title', 'Selamat');
                $request->session()->flash('icon', 'success');
                return redirect()->route('admin.home');
            }
            // elseif ($user->akses_level == 1) {
            //     return redirect()->route('home');
            // } 
        }
        $request->session()->flash('message', 'Username atau password yang anda masukkan salah');
        $request->session()->flash('title', 'Maaf');
        $request->session()->flash('icon', 'error');
        return redirect()->route('login');
    }

    public function logoutDo(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $request->session()->flash('message', 'Anda Berhasil Logout!');
        $request->session()->flash('title', 'Selamat');
        $request->session()->flash('icon', 'success');
        return redirect()->route('login')->with('error', "Berhasil Logout");
    }

    public function home()
    {
        return view('admin.home');
    }



    // ===================== BERITA CONTROLLER ==================

    public function berita()
    {
        $beritas = Berita::orderBy('created_at', 'desc')->get();
        return view('admin.berita.index', compact('beritas'));
    }

    public function beritaAdd()
    {
        return view('admin.berita.form');
    }

    public function beritaAddDo(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'foto' => 'required|mimes:png,jpg',
            'deskripsi' => 'required',
        ]);

        $file = $request->file('foto');
        $ext = $file->getClientOriginalExtension();
        $fileName = time().'.' . $ext;
        $file->move(public_path('assets/img/berita'), $fileName);

        $berita = new Berita();
        $berita->id_user = auth()->user()->id;
        $berita->judul = $request->judul;
        $berita->deskripsi = $request->deskripsi;
        $berita->foto = $fileName;
        $berita->save();

        $request->session()->flash('message', 'Anda Berhasil Menambahkan Data!');
        $request->session()->flash('title', 'Selamat');
        $request->session()->flash('icon', 'success');
        return redirect()->route('admin.berita');
    }

    public function beritaEdit($id)
    {
        $berita = Berita::find($id);
        return view('admin.berita.form', compact('berita'));
    }

    public function beritaEditDo(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        $berita = Berita::find($id);

        if ($request->foto) {
            // Misalnya Anda mendapatkan nama file foto lama dari database atau model
            $oldFileName = $berita->foto; // Gantikan dengan cara Anda mendapatkan nama file

            // Cek apakah foto lama ada, dan hapus
            if (File::exists(public_path('assets/img/berita/' . $oldFileName))) {
                File::delete(public_path('assets/img/berita/' . $oldFileName));
            }

            $file = $request->file('foto');
            $ext = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $ext;
            $file->move(public_path('assets/img/berita'), $fileName);
            $berita->foto = $fileName;
        }

        $berita->judul = $request->judul;
        $berita->deskripsi = $request->deskripsi;
        $berita->save();

        $request->session()->flash('message', 'Anda Berhasil Mengedit Data!');
        $request->session()->flash('title', 'Selamat');
        $request->session()->flash('icon', 'success');
        return redirect()->route('admin.berita');
    }

    public function beritaDeleteDo(Request $request, $id)
    {
        $berita = Berita::find($id);
        // Misalnya Anda mendapatkan nama file foto lama dari database atau model
        $oldFileName = $berita->foto; // Gantikan dengan cara Anda mendapatkan nama file

        // Cek apakah foto lama ada, dan hapus
        if (File::exists(public_path('assets/img/berita/' . $oldFileName))) {
            File::delete(public_path('assets/img/berita/' . $oldFileName));
        }

        $berita->delete();
        
        $request->session()->flash('message', 'Anda Berhasil Menghapus Data!');
        $request->session()->flash('title', 'Selamat');
        $request->session()->flash('icon', 'success');
        return redirect()->route('admin.berita');
    }

    // ===================== END BERITA CONTROLLER ==================





    // ===================== DRIKOM CONTROLLER ======================

    public function dirkom()
    {
        return view('admin.dirkom.index');
    }

    // ===================== END DRIKOM CONTROLLER ======================


}
