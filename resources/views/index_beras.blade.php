<!-- Menghubungkan dengan view template -->
@extends('template')

@section('title', 'Data Beras')
@section('konten')
    <center>

        <p>Cari Data Beras :</p>
        <form action="/beras_cari" method="GET">
            <input type="text" name="cari" placeholder="Cari Beras .." class="form-control">
            <input type="submit" value="CARI" class="btn btn-secondary">
        </form>

        <br />

        <table class="table table-striped table-hover">
            <tr>
                <th>Merk</th>
                <th>Stock</th>
                <th>Tersedia?</th>
                <th>Actions</th>
            </tr>
            @foreach ($beras as $b)
                <tr>
                    <td>{{ $b->merkberas }}</td>
                    <td>{{ $b->stockberas }}</td>
                    <td>{{ $b->tersedia }}</td>
                    <td>
                        <a href="/beras_edit/{{ $b->kodeberas }}" class="btn btn-warning">Edit</a>
                        |
                        <a href="/beras_hapus/{{ $b->kodeberas }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </table>
        <ul class="pagination justify-content-center" style="margin:20px 0">
            {{ $beras->links() }}
        </ul>
        <a href="/beras_tambah" class="btn btn-primary">Tambah Beras Baru</a>

    </center>

@endsection
