@extends('layouts.app')

@section('isi')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">TAMBAH DATA MATAKULIAH</div>

                <div class="card-body">
                    <form method="POST" action="{{route('matkul.store')}}">
                        @csrf
                        @method('PUT')
                        <legend>
                            <div class=" form-group">
                            </div>
                        </legend>
                        <legend>
                            <div class="form-group">
                                <input type="text" name="id_mhs" class="form-control" id="" placeholder="ID">
                            </div>
                        </legend>
                        <legend>
                            <div class="form-group">
                                <input type="text" name="nim" class="form-control" id="" placeholder="NIM">
                            </div>
                        </legend>
                        <legend>
                            <div class="form-group">
                                <input type="text" name="nama_mhs" class="form-control" id="" placeholder="Nama Mahasiswa">
                            </div>
                        </legend>
                        <legend>
                            <div class="form-group">
                                <input type="text" name="kode_matkul" class="form-control" id="" placeholder="Kode Matakuliah">
                            </div>
                        </legend>
                        <legend>
                            <div class="form-group">
                                <input type="text" name="matkul" class="form-control" id="" placeholder="Matakuliah">
                            </div>
                        </legend>
                        <legend>
                            <div class="form-group">
                                <input type="text" name="sks" class="form-control" id="" placeholder="SKS">
                            </div>
                        </legend>

                        <legend>
                            <div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </legend>
                    </form>


                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection