<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    protected $table = "tintuc";

    // Thêm thuộc tính $fillable để bảo vệ trường hợp mass-assignment
    protected $fillable = [
        'TieuDe', 
        'TieuDeKhongDau', 
        'TomTat', 
        'NoiDung', 
        'Hinh', 
        'NoiBat', 
        'idLoaiTin', 
        'shopee_link', // Thêm 'shopee_link' vào đây
    ];

    public function LoaiTin()
    {
        return $this->belongsTo('App\LoaiTin','idLoaiTin','id');
    }

    public function Comment()
    {
        return $this->hasMany('App\Comment','idTinTuc','id');
    }
}

