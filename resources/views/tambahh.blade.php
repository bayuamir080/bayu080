@extends('layouts.app')

@section('isi')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">TAMBAH DATA MAHASISWA</div>

                <div class="card-body">
                    <form method="POST" action="{{route('akademik.store')}}">
                        @csrf
                        @method('PUT')
                        <legend>
                            <div class=" form-group">
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
                                <input type="text" name="agama" class="form-control" id="" placeholder="Agama">
                            </div>
                        </legend>
                        <legend>
                            <div class="form-group">
                                <input type="text" name="jenis_kelamin" class="form-control" id="" placeholder="Jk"> </input>
                            </div>
                        </legend>
                        <legend>
                            <div class="form-group">
                                <input type="text" name="alamat" class="form-control" id="" placeholder="Alamat">
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