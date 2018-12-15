<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    public function dondathang()
    {
        return $this->belongsTo(dondathang::class);
    }
}
