<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Tambah Siswa</h2>
    <hr>
    <form action="/siswa/{{$siswa['id']}}" method="post">
        @method('PUT')
        @csrf
       <select name="kelas" id="" require>
        <option>Pilih Kelas</option>
        <option value="XI RPL 1" {{ $siswa['kelas']== 'XI RPL 1' ? 'selected' :''}} >XI RPL 1</option>
        <option value="XI RPL 2" {{ $siswa['kelas']== 'XI RPL 2' ? 'selected' :''}} >XI RPL 2</option>
        <option value="XI RPL 3" {{ $siswa['kelas']== 'XI RPL 3' ? 'selected' :''}} >XI RPL 3</option>
       </select>
        <br>

        <input type="text" name="nama" value="{{ $siswa['nama'] }}" require>
        <br>

        <button type="submit">Simpan</button>
        <button type="submit">Reset</button>
    </form>
    <a href="/siswa">kembali</a>
</body>
</html>