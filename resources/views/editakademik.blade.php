@extends('layouts.app')

@section('isi')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">EDIT DATA</div>

                <div class="card-body">
                    <form method="POST" action="{{route('akademik.update',$data['id_mhs'])}}">
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
                                <input type="text" name="agama" value="{{$data['agama']}}" class="form-control" id="" placeholder="Agama">
                            </div>
                        </legend>
                        <legend>
                            <div class="form-group">
                                <input type="text" name="jenis_kelamin" value="{{$data['jenis_kelamin']}}" class="form-control" id="" placeholder="JK">
                            </div>
                        </legend>
                        <legend>
                            <legend>
                                <div class="form-group">
                                    <input type="text" name="alamat" value="{{$data['alamat']}}" class="form-control" id="" placeholder="Alamat">
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