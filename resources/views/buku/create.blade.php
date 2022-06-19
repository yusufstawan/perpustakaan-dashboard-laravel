@extends('layouts.master')

@section('content')
    <div class="card card-primary ml-3 mt-3">
        <div class="card-header">
            <h3 class="card-title">Input Buku</h3>
        </div>

        <form action="/buku" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" name="judul" class="form-control" id="judul" value="{{ old('judul', '') }}"
                        placeholder="Masukkan judul">
                    @error('judul')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" id="deskripsi"
                        value="{{ old('deskripsi', '') }}" placeholder="Masukkan deskripsi">
                    @error('deskripsi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="pengarang">Pengarang</label>
                    <input type="text" name="pengarang" class="form-control" id="pengarang"
                        value="{{ old('pengarang', '') }}" placeholder="Masukkan pengarang">
                    @error('pengarang')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="tahun">Tahun</label>
                    <input type="text" name="tahun" class="form-control" id="tahun"
                        value="{{ old('tahun', '') }}" placeholder="Masukkan tahun">
                    @error('tahun')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
