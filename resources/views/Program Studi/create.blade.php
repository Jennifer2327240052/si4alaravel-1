@extends('layout.main')
@section('title', 'Fakultas')

@section('content')
    <!--begin::Row-->
    <div class="row">
        <div class="col-12">
        <div class="card card-primary card-outline mb-4">
                  <!--begin::Header-->
                  <div class="card-header"><div class="card-title">Tambah Fakultas</div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
                  <form action="{{ route('fakultas.store') }}" method="POST">
                    @csrf
                    <!--begin::Body-->
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="Prodi" class="form-label">Nama Prodi</p></label>
                        <input type="text" class="form-control" name="Prodi" value="{{ old('Prodi') }}">
                        @error('Prodi')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="singkatan" class="form-label">Singkatan</label>
                        <input type="text" class="form-control" name="singkatan" value="{{ old('singkatan') }}">
                        @error('singkatan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="Kaprodi" class="form-label">Nama Kaprodi</label>
                        <input type="text" class="form-control" name="Kaprodi" value="{{ old('Kaprodi') }}">
                        @error('Kaprodi')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="Sekretaris" class="form-label">Nama Wakil Dekan</label>
                        <input type="text" class="form-control" name="Sekretaris" value="{{ old('Sekretaris') }}">
                        @error('Sekretaris')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="fakultas_id" class="form-label">Fakultas</label><select class=form-control" name="fakultas_id"> @foreach($fakultas as $item) <option value="{{ $item->id }} "> {{ $item->nama }} </option> @endforeach
                      </select>
                      @error('fakultas_id') <div class=

                      </div>
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary" fdprocessedid="s51n9k">Submit</button>
                    </div>
                    <!--end::Footer-->
                  </form>
                  <!--end::Form-->
                </div>
        </div>
    </div>
    <!--end::Row-->
@endsection