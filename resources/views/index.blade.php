<!DOCTYPE html>
<html>
<head>
    <title>Daftar Absensi</title>
</head>
<body>
    <h1>Daftar Absensi</h1>
    <a href="{{ route('absensi.create') }}">Tambah Absensi</a>
    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($absensis as $absensi)
                <tr>
                    <td>{{ $absensi->user->name }}</td>
                    <td>{{ $absensi->tanggal }}</td>
                    <td>{{ $absensi->status }}</td>
                    <td>{{ $absensi->keterangan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
