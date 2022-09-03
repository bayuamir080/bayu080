<?php

namespace App\Http\Controllers;

use App\Models\Akademik;
use Illuminate\View\ViewServiceProvider;
use Illuminate\Http\Request;

class AkademikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Akademik::all();
        return view('indexakademik', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahh');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Akademik::create($request->all());
        return redirect()->route('akademik');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Akademik::where('id_mhs', $id)->firstorfail();
        return view('editakademik', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Akademik::where('id_mhs', $id)
            ->update([
                'nim' => $request['nim'],
                'nama_mhs' => $request['nama_mhs'],
                'agama' => $request['agama'],
                'jenis_kelamin' => $request['jenis_kelamin'],
                'alamat' => $request['alamat']
            ]);
        return redirect()->route('akademik');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Akademik::where('id_mhs', $id)
            ->delete();
        return redirect()->route('akademik');
    }
}
