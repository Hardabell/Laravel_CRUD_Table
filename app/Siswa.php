<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'profile';

    protected $fillable = ['nim', 'nama', 'tgl_lahir', 'jenis_kelamin', 'alamat', 'prodi', 'jurusan', 'kelas', 'angkatan'];
}
