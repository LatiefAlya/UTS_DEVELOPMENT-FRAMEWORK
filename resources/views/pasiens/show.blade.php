@extends('layouts.app')
@section('title', 'Details Pasien')

@section('content')
    <div class="container">
        <h1>Pasien Details</h1>
        <div class="card">
            <div class="card-header">
                {{ $pasien->nama }}
            </div>
            <div class="card-body">
                <p><strong>NIK:</strong> {{ $pasien->nik }}</p>
                <p><strong>Alamat:</strong> {{ $pasien->alamat }}</p>
                <p><strong>HP:</strong> {{ $pasien->hp }}</p>
            </div>
        </div>
        <a href="{{ route('pasiens.index') }}" class="btn btn-primary mt-3">Back</a>
    </div>
@endsection
