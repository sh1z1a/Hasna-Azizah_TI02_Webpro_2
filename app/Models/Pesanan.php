<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pesanan extends Model
{
    use HasFactory;
    //panggil table pesanan
    protected $table = 'pesanan';
    public $timestamps = false;
    protected $fillable = [
        'tanggal',
        'nama_pemesan',
        'alamat_pemesan',
        'no_hp',
        'email',
        'jumlah_pesanan',
        'deskripsi',
        'produk_id'
    ];
    public function Pesanan(){
        return $this->belongsTo(Pesanan::class);
    }

    public function getAllData(){
        return DB::table('pesanan')
        ->join('produk', 'pesanan.produk_id', '=', 'produk.id')
        ->select('pesanan.*', 'produk.nama as nama')
        ->get();
    }
}
