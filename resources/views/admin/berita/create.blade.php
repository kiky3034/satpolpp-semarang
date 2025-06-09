@extends('layouts.admin')

@section('title', 'Tambah Berita')

@section('content')
  <h1>Tambah Berita</h1>

  <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="judul">Judul:</label>
    <input type="text" name="judul" value="{{ old('judul') }}" required>

    <label for="isi">Isi:</label>
    <textarea name="isi" rows="5" required>{{ old('isi') }}</textarea>

    <label for="gambar">Gambar (optional):</label>
    <input type="file" name="gambar" accept="image/*">

    <div class="form-buttons">
      <button type="submit">Simpan</button>
      <a href="{{ route('admin.berita') }}" class="cancel-btn">Batal</a>
    </div>
  </form>
@endsection
