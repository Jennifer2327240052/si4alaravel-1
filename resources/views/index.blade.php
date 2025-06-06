@extends('layout.main')
@section('title', 'Program Studi')

@section('content')
    <!--begin::Row-->
    <div class="row">
        <div class="col-12">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">List Program Studi</h3>
            <div class="card-tools">
                <button
                type="button"
                class="btn btn-tool"
                data-lte-toggle="card-collapse"
                title="Collapse"
                >
                <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                </button>
                <button
                type="button"
                class="btn btn-tool"
                data-lte-toggle="card-remove"
                title="Remove"
                >
                <i class="bi bi-x-lg"></i>
                </button>
            </div>
            </div>
            <div class="card-body">
              <a href="{
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Singkatan</th>
                            <th>Kaprodi</th>
                            <th>Sekretaris</th>
                            <th>Fakultas</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($prodi as $item)
                        <tr>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->singkatan }}</td>
                            <td>{{ $item->kaprodi}}</td>
                            <td>{{ $item->sekretaris}}</td>
                            <td>{{ $item->fakultas->nama}}</td>
                                <a href="{{ route('prodi.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('prodi.destroy',$item->id) }}" method="POST" class="d-inline">
                        </tr>
                    @endforeach
                    </tbody>
                </table>
    
            </div>
            <!-- /.card-body -->
            <!-- <div class="card-footer">Footer</div> -->
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
        </div>
    </div>
    <!--end::Row-->
@endsection

