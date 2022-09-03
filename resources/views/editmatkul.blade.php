@extends('layouts.app')

@section('isi')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">EDIT DATA</div>

                <div class="card-body">
                    <form method="POST" action="{{route('matkul.update',$data['id_matkul'])}}">
                        @csrf
                        @method('PUT')
                        <legend>
                            <div class="form-group">
                                <input type="text" name="nim" value="{{$data['nim']}}" class="form-control" id="" placeholder="Nim">
                            </div>
                        </legend>
                        <legend>
                            <div class="form-group">
                                <input type="text" name="nama_mhs" value="{{$data['nama_mhs']}}" class="form-control" id="" placeholder="Nama">
                            </div>
                        </legend>
                        <legend>
                            <div class="form-group">
                                <input type="text" name="kode_matkul" value="{{$data['kode_matkul']}}" class="form-control" id="" placeholder="Kode_Matkul">
                            </div>
                        </legend>
                        <legend>
                            <div class="form-group">
                                <input type="text" name="matkul" value="{{$data['matkul']}}" class="form-control" id="" placeholder="Matakuliah">
                            </div>
                        </legend>
                        <legend>
                            <legend>
                                <div class="form-group">
                                    <input type="text" name="sks" value="{{$data['sks']}}" class="form-control" id="" placeholder="SKS">
                                </div>
                            </legend>
                            <legend>
                                <div>
                                    <button type="submit" class="btn btn-primary">EDIT</button>
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