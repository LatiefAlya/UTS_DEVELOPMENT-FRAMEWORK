@extends('layouts.app')
@section('title', 'Daftar Pasien')

@section('content')
    <div class="container">
        <h1>Pasiens</h1>
        <a href="{{ route('pasiens.create') }}" class="btn btn-primary">Add Pasien</a>
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
                <th>HP</th>
                <th>Actions</th>
            </tr>
            @foreach ($pasiens as $pasien)
                <tr>
                    <td>{{ $pasien->nik }}</td>
                    <td>{{ $pasien->nama }}</td>
                    <td>{{ $pasien->alamat }}</td>
                    <td>{{ $pasien->hp }}</td>
                    <td>
                        <a href="{{ route('pasiens.show', $pasien->id) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('pasiens.edit', $pasien->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('pasiens.destroy', $pasien->id) }}" method="POST" style="display:inline;">
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
