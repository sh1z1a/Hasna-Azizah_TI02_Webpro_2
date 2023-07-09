<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controller\HomeController;

class Home extends Model
{
    use HasFactory;
    //panggil table produk
    protected $table = 'produk';
    protected $fillable = [
        'kode',
        'nama',
        'harga_jual',
        'harga_beli',
        'stok',
        'min_stok',
        'deskripsi',
        'kategori_produk_id'
    ];
    public function Home(){
        return $this->belongsTo(Home::class);
    }
}
