<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bio extends Model
{
    protected $table = 'bios';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_ketua', 'nik_ketua', 'no_1', 'no_2', 'alamat', 'peserta', 'pemesanan_id'
    ];

    public function pemesanan(){
        return $this->belongsTo('App\Pemesanan');
    }
}
