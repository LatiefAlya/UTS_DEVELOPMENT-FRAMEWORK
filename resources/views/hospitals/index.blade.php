@extends('layouts.app')
@section('title', 'Data Hospital')

@section('content')
    <div class="container">
        <h1>Hospital</h1>
        <a href="{{ route('hospitals.create') }}" class="btn btn-primary">Add Hospital</a>
        @if ($message = Session::get('success'))
            <div class="alert alert-success mt-2">
                {{ $message }}
            </div>
        @endif
        <table class="table table-bordered mt-2">
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Hp</th>
                <th>Pemilik</th>
                <th>Kelas</th>
                <th>Actions</th>
            </tr>
            @foreach ($hospitals as $hospital)
                <tr>
                    <td>{{ $hospital->kode }}</td>
                    <td>{{ $hospital->nama }}</td>
                    <td>{{ $hospital->alamat }}</td>
                    <td>{{ $hospital->hp }}</td>
                    <td>{{ $hospital->pemilik }}</td>
                    <td>{{ $hospital->kelas }}</td>
                    <td>
                        <a href="{{ route('hospitals.show', $hospital->id) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('hospitals.edit', $hospital->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('hospitals.destroy', $hospital->id) }}" method="POST"
                            style="display:inline-block;">
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
