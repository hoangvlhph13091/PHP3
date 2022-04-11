<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $table ='categories';
    public $fillable=['name','image','parent_id'];

    public function cate(){
        return $this->belongsTo(Categories::class,
        'parent_id',
        'id');
    }
}
