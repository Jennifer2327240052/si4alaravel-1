@extends('layout.main')

@extends('constant')
<div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Program Studi</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Program Studi</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
    <h1>Program Studi</h1>


    @foreach($prodi as $item)
        {{$item->nama }} | {{@item->singkatan}} |
        {{
            $item->fakultas->nama
            <br>
        }}
    @endforeach
@endsection

