<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class poinPelanggaranModel extends Model
{
    use HasFactory;
    protected $primaryKey = "id_poinPelanggaran";

    protected $guarded = [];

    public function poinPelanggaranToDataSiswa(){
        return $this->belongsTo('App\Models\dataSiswaModel');
    }
}
