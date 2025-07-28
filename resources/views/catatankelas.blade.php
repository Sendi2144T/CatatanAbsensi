<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>catatankelas</title>
</head>
<body>
  <h1>Catatan Kelas</h1>
  <p>Selamat datang di halaman Catatan Kelas!</p>
  <p>Silakan pilih opsi di bawah ini:</p>
  <ul>
    <li><a href="{{ route('absensi.create') }}">Tambah Absensi</a></li>
    <li><a href="{{ route('absensi.index') }}">Lihat Daftar Absensi</a></li>
  </ul>
</body>
</html>