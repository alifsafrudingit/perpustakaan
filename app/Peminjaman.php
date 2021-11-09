<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    public function buku() {
        return $this->belongsToMany(Buku::class, 'detail_peminjamen', 'id_peminjaman', 'id_buku');
    }

    public function anggota() {
        return $this->belongsTo(Anggota::class, 'id_anggota');
    }
}
