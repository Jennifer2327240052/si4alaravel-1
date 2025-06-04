@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Sesi</h2>
    <a href="{{ route('sesi.create') }}" class="btn btn-primary mb-3">Tambah Sesi</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Sesi</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($sesis as $index => $sesi)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $sesi->nama }}</td>
                <td>{{ $sesi->deskripsi }}</td>
                <td>
                    <a href="{{ route('sesi.edit', $sesi->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('sesi.destroy', $sesi->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus sesi ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center">Belum ada data sesi.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection