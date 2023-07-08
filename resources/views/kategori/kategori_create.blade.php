@extends('layouts.app')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Buat kategori</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">buat kategori</li>
        </ol>
        @if (session('success'))
        <div class="my-2">
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        </div>
    @endif
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('kategori/create', []) }}" method="POST">
                        @csrf
                        <div class="mb-2">
                            <label for="">Nama</label>
                            <input required type="text" name="nama" id="nama" class="form-control @error('nama')is-invalid @enderror"
                                placeholder="nama">
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-success me-2">Simpan</button>
                        <a href="{{ url('kategori', []) }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
