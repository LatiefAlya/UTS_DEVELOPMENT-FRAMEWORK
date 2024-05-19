@extends('layouts.app')
@section('title', 'Tambah Apotek')

@section('content')
    <div class="container">
        <h1>Add Apotek</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('apoteks.store') }}" method="POST">
            @csrf
            @include('apoteks.form', ['submitButtonText' => 'Add'])
        </form>
    </div>
@endsection
