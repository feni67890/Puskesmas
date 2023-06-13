@extends('main')
@section('content')

    <h1 class="text-center">Tambah Dokter</h1>
    <br>
    <a href="/dokter/{{ $dokter->id }}" class="btn btn-primary">
        < Back</a>
            <hr>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> Ada kesalahan input data! <br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }} </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="/dokter/{{ $dokter->id }}" method="post" class="mx-2">
                @method('PUT')
                <div class="form-group mt-3">
                    @csrf
                    <label for="name">nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Dokter"
                        value="{{ $dokter->nama }}">
                </div>

                <div class="form-group mt-3">
                    <label for="spesialis">spesialis</label>
                    <select class="form-control" name="spesialis">
                        <option>spesialis Jantung</option>
                        <option>spesialis hati</option>
                        <option>spesialis Kulit</option>
                        <option>spesialis Kandungan</option>
                        <option>spesialis Kelamin</option>
                        <option>spesialis Mata</option>
                        <option>spesialis Saraf</option>
                    </select>
                </div>

                <div class="form-group mt-3">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tgl_lahir" value="{{ $dokter->tgl_lahir }}">
                </div>

                <div class="form-group mt-3">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" name="alamat">{{ $dokter->alamat }}</textarea>
                </div>

                <div class="form-group mt-3">
                    <label for="telp">No. Telp</label>
                    <input type="text" class="form-control" name="telp" placeholder="Masukkan No. Telp"
                        value="{{ $dokter->telp }}">
                </div>

                <div class="form-group mt-3 d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>

        @endsection
