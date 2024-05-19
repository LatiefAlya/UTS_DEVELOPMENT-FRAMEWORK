@extends('layouts.app')
@section('title', 'Edit Dokter')

@section('content')
    <div class="container">
        <h1>Edit Doctor</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('doctors.update', $doctor->id) }}" method="POST">
            @csrf
            @method('PUT')
            @include('doctors._form', ['submitButtonText' => 'Update'])
        </form>
    </div>
@endsection
