<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table ='products';
    public $fillable=['name','price','image','description','category'];
    public function cate(){
        return $this->belongsTo(Categories::class,'category','id');
    }
}
