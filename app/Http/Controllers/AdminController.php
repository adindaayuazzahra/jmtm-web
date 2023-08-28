<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use File;
use Illuminate\Support\Facades\Storage;


// Modelss all
use App\Models\DewanKomisaris;
use App\Models\Berita;
use App\Models\Dirkom; // Pastikan use statement ini ada
use App\Models\User; // Pastikan use statement ini ada
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

   // ===================== DIRKOM CONTROLLER ======================
    public function dirkom(){
        $tb_dirkom = Dirkom::all(); // Ambil data dari model Dirkom
        // $users= User::all();
        //   dd($tb_dirkom,$users); // Debugging
        return view('admin.dirkom.index', compact('tb_dirkom'));

    }
   

    public function add_Kom(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string',
            'jabatan' => 'required|string',
            'foto_dirkom' => 'required|image|mimes:jpeg,png',
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
        $edit_dirkomdata= Dirkom::find($id);
        dd($edit_dirkomdata);
        return view('admin.dirkom', compact('edit_dirkomdata'));
    }

    
    public function update_dirkom(Request $request, $id)
    {
        // dd($request);
        $request->validate([
            'edit_nama' => 'required|string',
            'edit_jabatan' => 'required|string',
            'edit_foto' => 'image|mimes:jpeg,png,jpg',
            'edit_dirkomSelect' => 'required',
        ]);

        $edit_data_dirkom = Dirkom::find($id);

        if ($request->edit_foto) {
            // Misalnya Anda mendapatkan nama file foto lama dari database atau model
            $oldFileName = $edit_data_dirkom->foto; // Gantikan dengan cara Anda mendapatkan nama file

            // Cek apakah foto lama ada, dan hapus
            if (File::exists(storage_path('app/public/images/' . $oldFileName))) {
                File::delete(storage_path('app/public/images/' . $oldFileName));//uji
            }

            $file = $request->file('edit_foto');
            $ext = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $ext;
            $file->move(storage_path('app/public/images/'), $fileName);
            $edit_data_dirkom->foto = $fileName;
        }

        $edit_data_dirkom->level = $request->edit_dirkomSelect;
        $edit_data_dirkom->nama = $request->edit_nama;
        $edit_data_dirkom->jabatan = $request->edit_jabatan;
        $edit_data_dirkom->save();

        $request->session()->flash('message', 'Anda Berhasil Mengedit Data!');
        $request->session()->flash('title', 'Selamat');
        $request->session()->flash('icon', 'success');
        return redirect()->route('admin.dirkom');
    }
    
    public function delete_dirkom(Request $request, $id)
    {
        $delete_data_dirkom = Dirkom::find($id);
        // Misalnya Anda mendapatkan nama file foto lama dari database atau model
        $oldFileName = $delete_data_dirkom->foto; // Gantikan dengan cara Anda mendapatkan nama file

        // Cek apakah foto lama ada, dan hapus
        if (File::exists(public_path('app/public/images/' . $oldFileName))) {
            File::delete(public_path('app/public/images/' . $oldFileName));
        }

        $delete_data_dirkom->delete();
        
        $request->session()->flash('message', 'Anda Berhasil Menghapus Data!');
        $request->session()->flash('title', 'Selamat');
        $request->session()->flash('icon', 'success');
        return redirect()->route('admin.dirkom');
    }
     // ===================== END DIRKOM CONTROLLER =====================


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
        $file->move(storage_path('app/public/berita/'), $fileName);
        // $file->move(public_path('assets/img/berita'), $fileName);

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
            if (File::exists(storage_path('app/public/berita/' . $oldFileName))) {
                File::delete(storage_path('app/public/berita/' . $oldFileName));
            }

            $file = $request->file('foto');
            $ext = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $ext;
            $file->move(storage_path('app/public/berita/'), $fileName);
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
        if (File::exists(storage_path('app/public/berita/' . $oldFileName))) {
            File::delete(storage_path('app/public/berita/' . $oldFileName));
        }

        $berita->delete();
        
        $request->session()->flash('message', 'Anda Berhasil Menghapus Data!');
        $request->session()->flash('title', 'Selamat');
        $request->session()->flash('icon', 'success');
        return redirect()->route('admin.berita');
    }

    




 

    
   
}
