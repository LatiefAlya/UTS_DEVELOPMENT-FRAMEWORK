@extends('layouts.app')
@section('title', 'Details Apotek')

@section('content')
    <div class="container">
        <h1>Apotek Details</h1>
        <div class="card">
            <div class="card-header">
                {{ $apotek->nama }}
            </div>
            <div class="card-body">
                <p><strong>Kode:</strong> {{ $apotek->kode }}</p>
                <p><strong>Alamat:</strong> {{ $apotek->alamat }}</p>
                <p><strong>Hp:</strong> {{ $apotek->hp }}</p>
            </div>
        </div>
        <a href="{{ route('apoteks.index') }}" class="btn btn-primary mt-3">Back</a>
    </div>
@endsection
