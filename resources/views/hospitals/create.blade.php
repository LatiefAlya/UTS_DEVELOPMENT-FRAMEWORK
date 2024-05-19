@extends('layouts.app')
@section('title', 'Tambah Hospital')

@section('content')
    <div class="container">
        <h1>Add Hospital</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('hospitals.store') }}" method="POST">
            @csrf
            @include('hospitals.form', ['submitButtonText' => 'Add'])
        </form>
    </div>
@endsection
