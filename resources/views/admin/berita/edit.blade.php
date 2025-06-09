@extends('layouts.admin')

@section('title', 'Edit Berita')

@section('content')
  <h1>Edit Berita</h1>

  <form action="{{ route('admin.berita.update', $berita) }}" method="POST" enctype="multipart/form-data" style="max-width: 600px;">
    @csrf
    @method('PUT')

    <div style="margin-bottom: 15px;">
      <label for="judul">Judul:</label><br>
      <input type="text" name="judul" value="{{ old('judul', $berita->judul) }}" required style="width: 100%; padding: 8px;">
    </div>

    <div style="margin-bottom: 15px;">
      <label for="isi">Isi:</label><br>
      <textarea name="isi" rows="5" required style="width: 100%; padding: 8px;">{{ old('isi', $berita->isi) }}</textarea>
    </div>

    <div style="margin-bottom: 15px;">
      <label for="gambar">Ganti Gambar (opsional):</label><br>
      <input type="file" name="gambar" accept="image/*">

      @if ($berita->gambar)
        <p style="margin-top: 10px;">Gambar saat ini:</p>
        <img src="{{ asset('storage/' . $berita->gambar) }}" alt="Gambar lama" style="max-width: 200px; margin-top: 5px;">
      @endif
    </div>

    <div class="form-buttons">
        <button type="submit" class="btn">Update</button>
        <a href="{{ route('admin.berita') }}" class="cancel-btn">Batal</a>
    </div>
  </form>
@endsection
