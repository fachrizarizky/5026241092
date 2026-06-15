<!-- Menghubungkan dengan view template -->
@extends('template')

@section('title', 'Kode Soal mypegawai')
@section('konten')
    <center>

        <a href="/mypegawai_tambah" class="btn btn-primary">Tambah Data</a>

        <table class="table table-striped table-hover">
            <tr>
                <th>Kode Pegawai</th>
                <th>Nama Lengkap</th>
                <th>Divisi</th>
                <th>Departemen</th>
                <th>Action</th>
            </tr>
            @foreach ($mypegawai as $p)
                <tr>
                    <td>{{ $p->kodepegawai }}</td>
                    <td>{{ $p->namalengkap }}</td>
                    <td>{{ $p->divisi }}</td>
                    <td>{{ $p->departemen }}</td>
                    <td>
                        <a href="/mypegawai_view/{{ $p->kodepegawai }}" class="btn btn-warning">View</a>
                    </td>
                </tr>
            @endforeach
        </table>

    </center>

@endsection
