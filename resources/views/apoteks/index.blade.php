@extends('layouts.app')
@section('title', 'Data Apotek')

@section('content')
    <div class="container">
        <h1>Apotek</h1>
        <a href="{{ route('apoteks.create') }}" class="btn btn-primary">Add Apotek</a>
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
                <th>Actions</th>
            </tr>
            @foreach ($apoteks as $apotek)
                <tr>
                    <td>{{ $apotek->kode }}</td>
                    <td>{{ $apotek->nama }}</td>
                    <td>{{ $apotek->alamat }}</td>
                    <td>{{ $apotek->hp }}</td>
                    <td>
                        <a href="{{ route('apoteks.show', $apotek->id) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('apoteks.edit', $apotek->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('apoteks.destroy', $apotek->id) }}" method="POST"
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
