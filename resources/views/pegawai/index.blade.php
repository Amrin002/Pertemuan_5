<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pegawai</title>
</head>
<body>
    <h1>Data list</h1>
    <a href="{{route('pegawai.create')}}">Add new data</a>
    @if ($pegawai->count()>0)
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Pangkat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pegawai as $data)
            <tr>
                <td>{{$data->nama}}</td>
                <td>{{$data->alamat}}</td>
                <td>{{$data->pangkat}}</td>
                <td>
                    <a href="{{route('pegawai.edit',$data->id)}}">Edit</a>
                    <form action="{{route('pegawai.destroy',$data->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <h1>No data found</h1>
    @endif
</body>
</html>

