<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Murid extends Model

{
    protected $table = 'murids'; // Menentukan nama tabel yang benar
    protected $primaryKey = 'id_murid'; // Menentukan primary key yang benar
    public $incrementing = true; // Jika id_murid adalah auto-increment
    protected $keyType = 'int'; // Tipe data primary key

    protected $fillable = [
        'id_murid', 
        'nama', 
        'kelas', 
        'alamat',
        'tahun_masuk',
        'nama_wali'
    ];

    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime'
        ];
    }
};
