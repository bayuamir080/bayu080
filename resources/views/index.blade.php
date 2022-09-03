@extends('layouts.app')

@section('isi')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">AKADEMIK</div>

                <div class="card-body">
                    <a href="{{route('matkul.tambah')}}" class="btn btn-primary">Tambah</a>
                    <a href=/akademik class="btn btn-primary">Mahasiswa</a>

                    <br />
                    <br />
                    <table class="table table-bordered table-hover table-striped">
                        <tr>
                            <th>No</th>
                            <th>Nim</th>
                            <th>Nama Mahasiswa</th>
                            <th>Kode Matakuliah</th>
                            <th>Matakuliah</th>
                            <th>SKS</th>
                            <th>Aksi</th>
                        </tr>
                        @php $no=0; @endphp
                        @foreach($matakuliah as $j)
                        @php $no++; @endphp
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$j['nim']}}</td>
                            <td>{{$j['nama_mhs']}}</td>
                            <td>{{$j['kode_matkul']}}</td>
                            <td>{{$j['matkul']}}</td>
                            <td>{{$j['sks']}}</td>

                            <td>
                                <a href="{{route('matkul.edit',$j['id_matkul'])}}" class=" btn btn-primary">EDIT</a>
                                <a href="{{route('matkul.hapus',$j['id_matkul'])}}" class="btn btn-primary">HAPUS</a>

                        </tr>

                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection