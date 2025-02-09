<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Murid extends Model

{
    protected $table = 'murids';

    protected $fillable = [
        'no_murid', 
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
