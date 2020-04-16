@extends("page/template")

@section("main")
    <main role="main" class="container mt-5">
        <h2 class="mt-5">List Mahasiswa</h2>
        <a href="/siswa/add" class="btn btn-info" style="float: right;margin-bottom:10px;">Tambah Mahasiswa</a>

        @if(!empty($siswa_list))
            <table class="table">
                <thead>
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Prodi</th>
                        <th>Jurusan</th>
                        <th>Kelas</th>
                        <th>Angkatan</th>
                        <th>View</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($siswa_list as $s)
                        <tr>
                            <td>{{$s -> nim}}</td>
                            <td>{{$s -> nama}}</td>
                            <td>{{$s -> alamat}}</td>
                            <td>{{$s -> tgl_lahir}}</td>
                            <td>{{$s -> jenis_kelamin}}</td>
                            <td>{{$s -> prodi}}</td>
                            <td>{{$s -> jurusan}}</td>
                            <td>{{$s -> kelas}}</td>
                            <td>{{$s -> angkatan}}</td>  
                            <td>
                                <a href="/siswa/{{$s->id}}" class="btn btn-info">Detail</a>
                            </td>
                            <td><a href="/siswa/edit/{{ $s -> id }}" class="btn btn-warning">Edit</a></td> 
                            <td><a href="/siswa/delete/{{$s->id}}" onclick="return confirm('Yakin ingin menghapus?')" class="btn btn-danger">Delete</a></td> 
                        </tr>
                    @endforeach
                </tbody>
            </table>
           <div class="row">
           <div class="col">
            <div class="paging">
            {{ $siswa_list->links() }}
            </div>
            </div>
            <div class="col">
            <h4 style="float:right;">Jumlah Semua Mahasiswa : {{$jumlah_siswa}}</h4>
            </div>
            </div>
            <br>
            <br>
        @endif
    </main>
@stop
