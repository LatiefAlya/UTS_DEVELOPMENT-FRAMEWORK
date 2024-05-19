@extends('layouts.app')
@section('title', 'Ubah Pasien')

@section('content')
    <div class="container">
        <h1>Edit Pasien</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('pasiens.update', $pasien->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nik">NIK</label>
                <input type="text" name="nik" class="form-control" value="{{ $pasien->nik }}">
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ $pasien->nama }}">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control" value="{{ $pasien->alamat }}">
            </div>
            <div class="form-group">
                <label for="hp">HP</label>
                <input type="text" name="hp" class="form-control" value="{{ $pasien->hp }}">
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
@endsection
