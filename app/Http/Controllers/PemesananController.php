<?php

namespace App\Http\Controllers;

use App\Pemesanan;
use App\Gunung;
use App\Jalur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Support\Facades\Auth;


class PemesananController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gunungs = Gunung::all();
        
        // dd($gunungs->all());

        return view('pemesanan.create', compact('gunungs') );
    }

    public function input($gunung_id){

        $jalurs = Jalur::where('gunungs_id', $gunung_id)->get();
        // dd($jalurs);

        return view('pemesanan.input', compact(['jalurs', 'gunung_id']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $gunung_id)
    {
        $request->validate(
            [
                'jalur' => 'required',
                'tanggal_pendakian' => 'required',
                'nama_ketua' => 'required',
                'nik_ketua' => 'required',
                'no_1' => 'required',
                'no_2' => 'required',
                'alamat' => 'required',
                'peserta' => 'required',
            ],
            [
                'jalur.required' => 'Harus di isi',
                'tanggal_pendakian.required' => 'Harus di isi',
                'nama_ketua.required' => 'Harus di isi',
                'nik_ketua.required' => 'Harus di isi',
                'no_1.required' => 'Harus di isi',
                'no_2.required' => 'Harus di isi',
                'alamat.required' => 'Harus di isi',
                'peserta.required' => 'Harus di isi',
            ]
        );

        $user = Auth::user();
        
        // dd($user->id);

        DB::table('pemesanan')->insert(
            [
            'jalur' => $request['jalur'],
            'tanggal_pendakian' => $request['tanggal_pendakian'],
            'nama_ketua' => $request['nama_ketua'],
            'nik_ketua' => $request['nik_ketua'],
            'no_1' => $request['no_1'],
            'no_2' => $request['no_2'],
            'alamat' => $request['alamat'],
            'peserta' => $request['peserta'],
            'gunungs_id' => $gunung_id,
            'users_id' => $user->id
            ]
        );
        return redirect('/pemesanan')->withSuccessMessage('Pendafataran Berhasil');
    }

    public function index()
    {
        $user = Auth::user();
        $listpendaki = DB::table('pemesanan')->where('users_id', $user->id)->get();

        if(session( key: 'success_message')) {
            Alert::success('Selamat!!', session( key: 'success_message'));
        }

        return view('pemesanan.index', compact('listpendaki'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listpendaki = DB::table('pemesanan')->where('id', $id)->first();

        return view('pemesanan.show', compact('listpendaki'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listpendaki = DB::table('pemesanan')->where('id', $id)->first();
    
        return view('pemesanan.edit', compact('listpendaki'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('pemesanan')
              ->where('id', $id)
              ->update(
                    [
                        'jalur' => $request['jalur'],
                       'nama_ketua' => $request['nama_ketua'],
                        'nik_ketua' => $request['nik_ketua'],
                        'no_1' => $request['no_1'],
                        'no_2' => $request['no_2'],
                        'alamat' => $request['alamat'],
                        'peserta' => $request['peserta'],
                    ]
                       );

        return redirect('/pemesanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        DB::table('pemesanan')->where('id', $id)->delete();

        return redirect('/pemesanan');
    }

    public function pdf($id){
        $listpendaki = DB::table('pemesanan')->where('id', $id)->first();
        $pdf = PDF::loadView('pemesanan.show', compact('listpendaki'))->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->download('invoice.pdf');

    }
}
