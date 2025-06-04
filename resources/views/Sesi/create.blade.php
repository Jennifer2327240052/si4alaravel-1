@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Buat Sesi Baru</h2>
    <form action="{{ route('sesi.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Sesi</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('sesi.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection