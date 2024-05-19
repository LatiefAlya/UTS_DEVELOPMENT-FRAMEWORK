@extends('layouts.app')
@section('title', 'Tambah Dokter')

@section('content')
    <div class="container">
        <h1>Add Doctor</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('doctors.store') }}" method="POST">
            @csrf
            @include('doctors._form', ['submitButtonText' => 'Add'])
        </form>
    </div>
@endsection
