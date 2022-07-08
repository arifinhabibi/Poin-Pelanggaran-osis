<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jurusanModel extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'jurusan',
        'kelas',
        'group',
        'logo'
    ];

    public function jurusanToDataSiswa(){
        return $this->hasMany('App\Models\dataSiswaModel');
    }
}
