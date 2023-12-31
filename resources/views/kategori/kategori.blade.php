@extends('layouts.app')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Kategori arsip</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Kategori arsip</li>
        </ol>
        @if (auth()->user()->role == 'admin')
            <a href="{{ url('kategori/create', []) }}" class="btn btn-primary mb-2">Buat kategori arsip baru</a>
        @endif
        @if (session('success'))
            <div class="my-2">
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            </div>
        @endif
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Nama</th>

                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($datas as $data)
                            <tr>
                                <td>{{ $data->Nama }}</td>

                                <td>
                                    <a href="{{ url('kategori/delete', $data->id) }}" class="btn btn-danger mx-1">Hapus</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
