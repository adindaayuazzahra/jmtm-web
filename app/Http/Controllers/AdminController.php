<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Dirkom; // Pastikan use statement ini ada
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function login(){
        if (Auth::check()) {
            return redirect()->route('admin.home');
        }
        return view('admin.login');    
    }

    public function loginDo(Request $request){
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

    public function home(){
        return view('admin.home');
    }

    public function dirkom(){
        return view('admin.dirkom.index');

    }
    public function berita(){
        return view('admin.berita.index');
    }

    public function add_Kom(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'jabatan' => 'required|string',
            'foto_dirkom' => 'required|image|mimes:jpeg,png,jpg,gif',
            'dirkomSelect' => 'required',
        ]);
    
        $tb_dirkom = new Dirkom();
        $tb_dirkom->id_user = auth()->user()->id;
        $tb_dirkom->nama = $validatedData['nama'];
        $tb_dirkom->jabatan = $validatedData['jabatan'];
        $tb_dirkom->level = $validatedData['dirkomSelect'];
    
        $file = $request->file('foto_dirkom');
        $ext = $file->getClientOriginalExtension();
        $fileName = $request->input('nama') . '_' . $ext;
        Storage::putFileAs('images', $file, $fileName);
    
        $tb_dirkom->foto = $fileName;
        
        $tb_dirkom->save();
    
        $request->session()->flash('message', 'Data Berhasil Disimpan');
        $request->session()->flash('title', 'Berhasil');
        $request->session()->flash('icon', 'success');
        
        // return redirect()->route('dirkom');
        if ($tb_dirkom->save()) {
            return response()->json([
                'message' => 'Data Berhasil Disimpan'
            ]);
        } else {
            return response()->json([
                'message' => 'Terjadi kesalahan saat menyimpan data'
            ], 500);
        }
    }
    
    
}
