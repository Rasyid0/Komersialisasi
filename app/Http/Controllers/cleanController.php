<?php
namespace App\Http\Controllers;
use App\Models\Clean;
use Illuminate\Http\Request;

class CleanController extends Controller
{
    public function index(){
        $cleans = Clean::all();
        return view('clean.index',['cleans' => $cleans]);
    }
    public function create(){
        return view('clean.create');
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'no_antrian'            => 'required|size:2|unique:cleans,no_antrian',
            'nama'                  => 'required|min:3|max:50',
            'jenis_kelamin'         => 'required|in:P,L',
            'jenis'                 => 'required',
            'no_telepon'            => 'required',
            'alamat'                => '',
        ]);

        // if($request->hasFile('foto')){
        //     $extFile=$request->file('foto');
        //     $namaFile='1'.time().".".$extFile->getClientOriginalExtension();
        //     $extFile->move('image',$namaFile);
        // }
        $clean = new Clean;
        $clean->no_antrian = $request['no_antrian'];
        $clean->nama = $request['nama'];
        $clean->jenis_kelamin = $request['jenis_kelamin'];
        $clean->jenis = $request['jenis'];
        $clean->no_telepon = $request['no_telepon'];
        $clean->alamat = $request['alamat'];

        $clean->save();
        return redirect()->route('cleans.index');
    }
    public function show(Clean $clean){
        return view('clean.show',['clean' => $clean]);
    }
    public function edit(Clean $clean){
        return view('clean.show',['clean' => $clean]);
    }
    public function update(Request $request,Clean $clean){
        $validateData = $request->validate([
            'no_antrian'            => 'required|size:3|unique:cleans,no_antrian'.$clean->id,
            'nama'                  => 'required|min:3|max:50',
            'jenis_kelamin'         => 'required|in:P,L',
            'jenis'                 => 'required',
            'no_telepon'            => 'required',
            'alamat'                => '',
        ]);

        // Mahasiswa::where('id', $mahasiswa->id)->update($validateData);
        // return redirect()->route('mahasiswas.show',['mahasiswa'=>$mahasiswa->id])
        //     ->with('pesan', "Update data {$validateData['nama']} berhasil");

        $clean->no_antrian = $validateData['no_antrian'];
        $clean->nama = $validateData['nama'];
        $clean->jenis_kelamin = $validateData['jenis_kelamin'];
        $clean->jenis = $validateData['jenis'];
        $clean->no_telepon = $validateData['no_telepon'];
        $clean->alamat = $validateData['alamat'];

        $clean->save();

        //Mahasiswa::where('id', $mahasiswa->id)->update($validateData);
        return redirect()->route('cleans.show',['clean'=>$clean->id])
            ->with('pesan', "Update data {$request->nama} berhasil");
    }
    public function destroy(Clean $clean)
    {
        $clean->delete();
        return redirect()->route('cleans.index')
                ->with('pesan',"Hapus data $clean->no_antrian berhasil");
    }
    // public function fileUpload(){
    //     return view('mahasiswa.create');
    // }
    // public function prosesFileUpload(Request $request){
    //     $request->validate([
    //         'foto' => 'required|file|image|max:1000',
    //     ]);
    //     $extFile = $request->berkas->getClientOriginalExtension();
    //     $namaFile = 'syaiful-'.time().".".$extFile;
    //     $path = $request->berkas->move('image',$namaFile);
    //     echo "Variabel path berisi: $path <br>";

    //     $pathBaru = asset('image/'.$namaFile);
    //     echo "Proses upload berhasil, file berada di:
    //                     <a href='$pathBaru'>$pathBaru";
    // }

    public function daftarClean(){
        return 'Form pendaftaran clean';
    }
    public function tabelClean(){
        return 'Tabel data clean';
    }
    public function blogClean(){
        return 'Halaman blog clean';
    }
}
