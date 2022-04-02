<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cate_Prod extends Model
{
    use HasFactory;
    protected $table ='cate_prod';

    public function cate(){
        return $this->hasMany(Cate_Prod::class,'post_id','id');
    }
}
