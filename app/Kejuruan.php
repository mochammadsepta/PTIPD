<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kejuruan extends Model
{
    protected $fillable=['nama','kategori','profil','program','ruangan','siswa'];
}
