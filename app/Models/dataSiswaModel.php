<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataSiswaModel extends Model
{
    use HasFactory;

    protected $primaryKey = "id_dataSiswa";
    
    protected $guarded = [];

    public function dataSiswaToJurusan(){
        return $this->belongsTo('App\Models\jurusanModel');
    }
}
