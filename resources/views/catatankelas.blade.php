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
            @foreach($catatankelas as $catatankelas)
                <tr>
                    <td>{{ $catatankelas->tanggal }}</td>
                    <td>{{ $catatankelas->status }}</td>
                    <td>{{ $catatankelas->keterangan }}</td>
                    <td>{{ $catatankelas->user->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
