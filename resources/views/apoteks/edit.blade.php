@extends('layouts.app')
@section('title', 'Edit Apotek')

@section('content')
    <div class="container">
        <h1>Edit Apotek</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('apoteks.update', $apotek->id) }}" method="POST">
            @csrf
            @method('PUT')
            @include('apoteks.form', ['submitButtonText' => 'Update'])
        </form>
    </div>
@endsection
