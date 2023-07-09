<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class kategoriProduk extends Model
{
    use HasFactory;
    //panggil table kategori produk
    protected $table = 'kategori_produk';
    public $timestamps = false;
    protected $fillable = [
        'nama'
    ];

    //menerima relasi one to many dengan table produk
    public function produk(){
        return $this->hasMany(Produk::class);
    }

    public function getAllData(){
        return DB::table('kategori_produk')
        ->join('kategori_produk', 'produk.kategori_produk_id', '=', 'kategori_produk.id')
        ->select('produk.*', 'kategori_produk.nama as nama')
        ->get();
    }
}