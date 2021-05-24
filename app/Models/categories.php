<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $table = 'categories';

    public function categoriesCompanies(){
        return $this->hasMany(Companies::class,'categori_id','categori_id');
    }
}
