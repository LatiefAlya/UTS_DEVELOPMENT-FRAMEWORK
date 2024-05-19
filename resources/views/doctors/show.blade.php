@extends('layouts.app')
@section('title', 'Details Dokter')

@section('content')
    <div class="container">
        <h1>Doctor Details</h1>
        <div class="card">
            <div class="card-header">
                {{ $doctor->nama }}
            </div>
            <div class="card-body">
                <p><strong>NIK:</strong> {{ $doctor->nik }}</p>
                <p><strong>Alamat:</strong> {{ $doctor->alamat }}</p>
                <p><strong>Spesialis:</strong> {{ $doctor->spesialis }}</p>
            </div>
        </div>
        <a href="{{ route('doctors.index') }}" class="btn btn-primary mt-3">Back</a>
    </div>
@endsection
