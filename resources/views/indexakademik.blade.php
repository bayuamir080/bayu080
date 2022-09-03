@extends('layouts.app')

@section('isi')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">AKADEMIK</div>

                <div class="card-body">
                    <a href="{{route('akademik.tambahh')}}" class="btn btn-primary">Tambah</a>
                    <a href=/matkul class=" btn btn-primary">Matakuliah</a>

                    <br />
                    <br />
                    <table class="table table-bordered table-hover table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Nim</th>
                            <th>Nama Mahasiswa</th>
                            <th>Agama</th>
                            <th>JK</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                        @php $no=0; @endphp
                        @foreach($mahasiswa as $u)
                        @php $no++; @endphp

                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$u['nim']}}</td>
                            <td>{{$u['nama_mhs']}}</td>
                            <td>{{$u['agama']}}</td>
                            <td>{{$u['jenis_kelamin']}}</td>
                            <td>{{$u['alamat']}}</td>

                            <td>
                                <a href="{{route('akademik.edit',$u['id_mhs'])}}" class="btn btn-primary">EDIT</a>
                                <a href="{{route('akademik.hapus',$u['id_mhs'])}}" class="btn btn-primary">HAPUS</a>

                        </tr>

                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection