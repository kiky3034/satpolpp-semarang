<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>@yield('title', 'Admin Dashboard')</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      display: flex;
      min-height: 100vh;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f4f4f4;
    }

    .sidebar {
      width: 220px;
      background-color: #2c3e50;
      color: #ecf0f1;
      padding: 20px;
      flex-shrink: 0;
    }

    .sidebar h2 {
      margin-bottom: 30px;
      font-size: 24px;
    }

    .sidebar a {
      display: block;
      color: #bdc3c7;
      text-decoration: none;
      margin: 10px 0;
      transition: 0.3s;
    }

    .sidebar a:hover {
      color: white;
    }

    .main {
      flex: 1;
      padding: 20px;
      overflow-y: auto;
    }

    /* Button Tambah Berita */
    .tambah-berita-btn {
      display: inline-block;
      margin-bottom: 20px;
      padding: 10px 15px;
      background-color: #2ecc71;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .tambah-berita-btn:hover {
      background-color: #27ae60;
    }

    /* Card Berita */
    .admin-berita-card {
      background-color: white;
      border-radius: 8px;
      padding: 15px;
      margin-bottom: 20px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .admin-berita-card img {
        width: 20%;
        aspect-ratio: 1 / 1;   /* Buat gambar tetap persegi */
        object-fit: cover;     /* Isi gambar ke dalam kotak */
        border-radius: 5px;
        margin-bottom: 10px;
    }



    .admin-berita-card h3 {
      margin-bottom: 10px;
      font-size: 20px;
    }

    .admin-berita-card p {
      margin-bottom: 10px;
    }

    .admin-berita-card a,
    .admin-berita-card button {
      display: inline-block;
      margin-right: 10px;
      padding: 12px 25px;
      border: none;
      border-radius: 4px;
      text-decoration: none;
      color: white;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .admin-berita-card a {
      background-color: #f1c40f;
    }

    .admin-berita-card a:hover {
      background-color: #d4ac0d;
    }

    .admin-berita-card button {
      background-color: #e74c3c;
    }

    .admin-berita-card button:hover {
      background-color: #c0392b;
    }

    /* FORM Create & Edit */
    form {
      background-color: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      max-width: 700px;
      margin: 0 auto;
    }

    form label {
      display: block;
      font-weight: 600;
      margin-bottom: 8px;
      margin-top: 15px;
      color: #34495e;
    }

    form input[type="text"],
    form textarea,
    form input[type="file"] {
      width: 100%;
      padding: 10px 12px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 5px;
      resize: vertical;
      transition: border-color 0.3s ease;
    }

    form input[type="text"]:focus,
    form textarea:focus,
    form input[type="file"]:focus {
      border-color: #2ecc71;
      outline: none;
    }

    form textarea {
      min-height: 150px;
    }

    form .form-buttons {
      margin-top: 20px;
      display: flex;
      gap: 10px;
    }

    form button[type="submit"] {
      background-color: #2ecc71;
      color: white;
      border: none;
      padding: 12px 25px;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    form button[type="submit"]:hover {
      background-color: #f36d00;
    }

    form a.cancel-btn {
      padding: 12px 25px;
      background-color: #e74c3c;
      color: white;
      border-radius: 5px;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-weight: 600;
      transition: background-color 0.3s ease;
    }

    form a.cancel-btn:hover {
      background-color: #c0392b;
    }

    /* Error validation message (optional) */
    .error-message {
      color: #e74c3c;
      font-size: 14px;
      margin-top: 5px;
    }

  </style>
</head>
<body>

  <div class="sidebar">
    <h2>Admin Panel</h2>
    <a href="{{ route('admin.berita') }}">Kelola Berita</a>
    {{-- <a href="{{ route('') }}">Kelola File</a> --}}
    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
    </form>
  </div>

  <div class="main">
    @yield('content')
  </div>

</body>
</html>
