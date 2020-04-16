@extends("page/template")

@section("main")
    <main role="main" class="container mt-5">
        <h1 class="mt-5">Siswa {{$siswa->nama_siswa}}</h1>

        @if(!empty($siswa))
            <table class="table">
                <tr>
                    <th>NIM</th>
                    <td>{{$siswa->nim}}</td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>{{$siswa->nama}}</td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>{{$siswa->tgl_lahir}}</td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>{{$siswa->jenis_kelamin}}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{$siswa->alamat}}</td>
                </tr>
                <tr>
                    <th>Prodi</th>
                    <td>{{$siswa->prodi}}</td>
                </tr>
                <tr>
                    <th>Jurusan</th>
                    <td>{{$siswa->jurusan}}</td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <td>{{$siswa->kelas}}</td>
                </tr>
                <tr>
                    <th>Angkatan</th>
                    <td>{{$siswa->angkatan}}</td>
                </tr>
            </table>
        @endif
    </main>
@stop
