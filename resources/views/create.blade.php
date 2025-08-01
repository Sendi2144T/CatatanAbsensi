<!DOCTYPE html>
<html>
<head>
    <title>Tambah Absensi</title>
</head>
<body>
    <h1>Form Tambah Absensi</h1>

    <form action="{{ route('absensi.store') }}" method="POST">
        @csrf

        <label>Nama Siswa:</label>
        <select name="user_id">
            @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select><br><br>

        <label>Tanggal:</label>
        <input type="date" name="tanggal"><br><br>

        <label>Status:</label>
        <select name="status">
            <option value="Hadir">Hadir</option>
            <option value="Izin">Izin</option>
            <option value="Sakit">Sakit</option>
            <option value="Alpha">Alpha</option>
        </select><br><br>

        <label>Keterangan:</label>
        <textarea name="keterangan"></textarea><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
