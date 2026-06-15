@extends('template')
@section('title', 'Kode Soal mypegawai')
@section('konten')

    <h2>Tambah Data</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/mypegawai_store" method="POST" onsubmit="return validasiForm()">
        @csrf
        <div class="row mb-3">
                        <label>Kode Pegawai</label><br>
            <input type="text" name="kodepegawai" id="kodepegawai" maxlength="9" value="{{ old('kodepegawai') }}">
                    </div>

                    <div class="row mb-3">
                        <label>Nama Lengkap</label><br>
            <input type="text" name="namalengkap" id="namalengkap" maxlength="50" value="{{ old('namalengkap') }}">
                    </div>

                    <div class="row mb-3">
                        <label>Divisi</label><br>
            <input type="text" name="divisi" id="divisi" maxlength="5" value="{{ old('divisi') }}">
                    </div>

                    <div class="row mb-3">
                        <label>Departemen</label><br>
            <input type="text" name="departemen" id="departemen" value="{{ old('departemen') }}">

                    </div>

        <button type="submit">Simpan</button>
        <a href="/eas">Kembali</a>
    </form>

    <script>
        function validasiForm() {
            let kodepegawai = document.getElementById('kodepegawai').value.trim();
            let namalengkap = document.getElementById('namalengkap').value.trim();
            let divisi = document.getElementById('divisi').value.trim();
            let departemen = document.getElementById('departemen').value;

            if (kodepegawai === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "kode pegawai wajib diisi!!",
                    icon: "error"
                });
                return false;
            }

            if (namalengkap === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Nama wajib diisi!!!",
                    icon: "error"
                });
                return false;
            }

            return true;
        }
    </script>
@endsection
