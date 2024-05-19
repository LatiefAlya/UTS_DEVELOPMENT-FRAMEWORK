@extends('layouts.app')
@section('title', 'Data Dokter')

@section('content')
    <div class="container">
        <h1>Doctors</h1>
        <a href="{{ route('doctors.create') }}" class="btn btn-primary">Add Doctor</a>
        @if ($message = Session::get('success'))
            <div class="alert alert-success mt-2">
                {{ $message }}
            </div>
        @endif
        <table class="table table-bordered mt-2">
            <tr>
                <th>NIK</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Spesialis</th>
                <th>Actions</th>
            </tr>
            @foreach ($doctors as $doctor)
                <tr>
                    <td>{{ $doctor->nik }}</td>
                    <td>{{ $doctor->nama }}</td>
                    <td>{{ $doctor->alamat }}</td>
                    <td>{{ $doctor->spesialis }}</td>
                    <td>
                        <a href="{{ route('doctors.show', $doctor->id) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('doctors.edit', $doctor->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
