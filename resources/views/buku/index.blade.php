@extends('layouts.master')

@section('content')
    <div class="mt-3 ml-3">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List Buku</h3>
            </div>

            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <a class="btn btn-info primary mb-2" href="/buku/create">Create New Book</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">No</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Pengarang</th>
                            <th>Tahun</th>
                            <th style="width: 40px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($posts as $key => $post)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $post->judul }}</td>
                                <td>{{ $post->deskripsi }}</td>
                                <td>{{ $post->pengarang }}</td>
                                <td>{{ $post->tahun }}</td>
                                <td style="display: flex">
                                    <a href="/buku/{{ $post->id }}" class="btn btn-info btn-sm m-1">Show</a>
                                    <a href="/buku/{{ $post->id }}/edit" class="btn btn-default btn-sm m-1">Edit</a>
                                    <form action="/buku/{{ $post->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="delete" class="btn btn-danger btn-sm m-1">
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Tidak ada data</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
