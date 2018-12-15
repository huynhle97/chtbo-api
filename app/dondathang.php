<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dondathang extends Model
{
    public function sanphams(){
    	return $this->hasMany(sanpham::class);
    }
}
