@extends('layouts.app')
@section('title', 'Edit Hospital')

@section('content')
    <div class="container">
        <h1>Edit Hospital</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('hospitals.update', $hospital->id) }}" method="POST">
            @csrf
            @method('PUT')
            @include('hospitals.form', ['submitButtonText' => 'Update'])
        </form>
    </div>
@endsection
