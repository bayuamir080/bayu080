<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\View\ViewServiceProvider;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matakuliah = Matakuliah::all();
        return view('index', compact('matakuliah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Matakuliah::create($request->all());
        return redirect()->route('matkul');
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
        $data = Matakuliah::where('id_matkul', $id)->firstorfail();
        return view('editmatkul', compact('data'));
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
        $data = Matakuliah::where('id_matkul', $id)
            ->update([
                'nim' => $request['nim'],
                'nama_mhs' => $request['nama_mhs'],
                'kode_matkul' => $request['kode_matkul'],
                'matkul' => $request['matkul'],
                'sks' => $request['sks']
            ]);
        return redirect()->route('matkul');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Matakuliah::where('id_matkul', $id)
            ->delete();
        return redirect()->route('matkul');
    }
}
