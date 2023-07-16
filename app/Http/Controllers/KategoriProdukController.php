<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\kategoriProduk;
//use DB;
use Illuminate\Support\Facades\DB; //query builder
//eloquent
use Illuminate\Http\Request;

class KategoriProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //query builder
        $kategori_produk = DB::table('kategori_produk')->get();
        return view('admin.kategori.index', compact('kategori_produk'));
        //compact berfungsi mengumpulkan pada membuat array yang akan dipanggil didalam view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //ini sintaks eloquent
        $kategori_produk = DB::table('kategori_produk')->get();

        return view('admin.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //eloquent
        $kategori_produk = new kategoriProduk;
        $kategori_produk->nama = $request->nama;
        $kategori_produk->save();

        return redirect('kategori_produk');
    }


    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
       $kategori_produk = DB::table('kategori_produk')->where('id', $id)->get();

       return view('admin.kategori.edit', compact('kategori_produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $kategori_produk = kategoriProduk::find($request->id);
        $kategori_produk->nama = $request->nama;
        return redirect('kategori');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        DB::table('kategori_produk')->where('id', $id)->delete();
        return redirect('kategori');
    }
}
