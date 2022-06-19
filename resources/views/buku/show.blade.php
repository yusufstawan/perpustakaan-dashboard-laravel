@extends('layouts.master')

@section('content')
    <div class="mt-3 ml-3">
        <h4>Nama: {{ $post->judul }}</h4>
        <h4>Umur: {{ $post->deskripsi }}</h4>
        <h4>Bio: {{ $post->pengarang }}</h4>
        <h4>Bio: {{ $post->tahun }}</h4>
    </div>
@endsection
