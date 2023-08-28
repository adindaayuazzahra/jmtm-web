<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


// Modelss all
use App\Models\DewanKomisaris;
use App\Models\Dirkom; // Pastikan use statement ini ada
use App\Models\User; // Pastikan use statement ini ada
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
        $tb_dirkom = Dirkom::all(); // Ambil data dari model Dirkom
        // $users= User::all();
        //   dd($tb_dirkom,$users); // Debugging
        return view('admin.dirkom.index', compact('tb_dirkom'));

    }
    public function berita(){
        return view('admin.berita.index');
    }

    public function add_Kom(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string',
            'jabatan' => 'required|string',
            'foto_dirkom' => 'required|image|mimes:jpeg,png,jpg,gif',
            'dirkomSelect' => 'required',
        ]);
    
        if ($validator->fails()) {
            $errors = $validator->errors();
            $errors->add('pdf', true);
            return redirect()->route('admin.dirkom')->withErrors($errors)->withInput();
        } 
        
        $validatedData = $validator->validated(); // Menggunakan method validated() pada objek validator
    
        $levelExists = Dirkom::where('level', $validatedData['dirkomSelect'])->exists();
    
        if ($levelExists) {
            $request->session()->flash('message', 'Data dengan level yang sama sudah ada.');
            $request->session()->flash('title', 'Gagal');
            $request->session()->flash('icon', 'error');
        } else {
            $tb_dirkom = new Dirkom();
            $tb_dirkom->id_user = auth()->user()->id;
            $tb_dirkom->nama = $validatedData['nama'];
            $tb_dirkom->jabatan = $validatedData['jabatan'];
            $tb_dirkom->level = $validatedData['dirkomSelect'];
        
            $file = $request->file('foto_dirkom');
            $ext = $file->getClientOriginalExtension();
            $fileName = $validatedData['nama'] . '.' . $ext; // Menggunakan $validatedData['nama'] daripada $request->input('nama')
            Storage::putFileAs('public/images', $file, $fileName);
        
            $tb_dirkom->foto = $fileName;
        
            if ($tb_dirkom->save()) {
                $request->session()->flash('message', 'Data Berhasil Disimpan');
                $request->session()->flash('title', 'Berhasil');
                $request->session()->flash('icon', 'success');
            } else {
                $request->session()->flash('message', 'Terjadi kesalahan saat menyimpan data');
                $request->session()->flash('title', 'Gagal');
                $request->session()->flash('icon', 'error');
            }
        }
        
        return redirect()->route('admin.dirkom');
    }
 
    public function edit_dirkom($id)
{
    $dirkom = Dirkom::find($id);

    if (!$dirkom) {
        return redirect()->route('admin.dirkom')->with('error', 'Data tidak ditemukan');
    }

    return view('admin.edit_dirkom', compact('dirkom'));
}

public function update_dirkom(Request $request, $id)
{
    $dirkom = Dirkom::find($id);

    if (!$dirkom) {
        return redirect()->route('admin.dirkom')->with('error', 'Data tidak ditemukan');
    }

    $validator = Validator::make($request->all(), [
        'edit_nama' => 'required|string',
        'edit_jabatan' => 'required|string',
        'edit_dirkomSelect' => 'required',
        'edit_foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Proses update data

    if ($dirkom->save()) {
        return redirect()->route('admin.dirkom')->with('success', 'Data berhasil diperbarui');
    } else {
        return redirect()->route('admin.edit_dirkom', ['id' => $id])
            ->with('error', 'Terjadi kesalahan saat memperbarui data');
    }
}
}
