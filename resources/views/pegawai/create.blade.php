<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Pegawai</title>
</head>
<body>
    <h1>Tambah Pegawai Baru</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('pegawai.store')}}" method="post">
        @csrf
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama">
        <br>
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat">
        <br>
        <label for="pangkat">Pangkat</label>
        <select name="pangkat" id="pangkat">
            <option value="juru">juru</option>
            <option value="pengatur">pengatur</option>
            <option value="penata">penata</option>
        </select>
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
