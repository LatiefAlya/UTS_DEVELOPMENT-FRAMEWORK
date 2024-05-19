@extends('layouts.app')
@section('title', 'Details Hospital')

@section('content')
    <div class="container">
        <h1>Apotek Hospital</h1>
        <div class="card">
            <div class="card-header">
                {{ $hospital->nama }}
            </div>
            <div class="card-body">
                <p><strong>Kode:</strong> {{ $hospital->kode }}</p>
                <p><strong>Alamat:</strong> {{ $hospital->alamat }}</p>
                <p><strong>Hp:</strong> {{ $hospital->hp }}</p>
                <p><strong>Hp:</strong> {{ $hospital->pemilik }}</p>
                <p><strong>Hp:</strong> {{ $hospital->kelas }}</p>
            </div>
        </div>
        <a href="{{ route('hospitals.index') }}" class="btn btn-primary mt-3">Back</a>
    </div>
@endsection
