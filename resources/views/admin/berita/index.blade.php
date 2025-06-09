@extends('layouts.admin')

@section('title', 'Kelola Berita')

@section('content')
  <h1>Kelola Berita</h1>

  <a href="{{ route('admin.berita.create') }}" class="tambah-berita-btn">➕ Tambah Berita</a>

  @foreach ($beritas as $berita)
    <div class="admin-berita-card">
      @if ($berita->gambar)
        <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}">
      @endif
      <h3>{{ $berita->judul }}</h3>
      <p>{{ Str::limit($berita->isi, 150) }}</p>

      <a href="{{ route('admin.berita.edit', $berita) }}">✏️ Edit</a>

      <form action="{{ route('admin.berita.destroy', $berita) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Yakin hapus berita ini?')">🗑️ Hapus</button>
      </form>
    </div>
  @endforeach
@endsection
