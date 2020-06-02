<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;



class ControllerProduk extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $data = \App\Produk::all();
        if (count($data) > 0){
            $res['message'] = "Sucsess!";
            $res['values'] = $data;
            // return response($res);
        }
        else{
            $res['message'] = "Empty!";
            // return response($res);
        }


        $produk=DB::table('produk')->get();

        // dd($res);
        return view('app/produk/buka_toko',['produk'=>$produk]);
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama_produk = $request->input('nama_produk');
        $deskripsi_produk = $request->input('deskripsi_produk');
        $kategori_produk = $request->input('kategori_produk');
        $url_foto_produk = $request->input('url_foto_produk');
        $harga_produk = $request->input('harga_produk');
        $stok_produk = $request->input('stok_produk');
        $bobot_produk = $request->input('bobot_produk');
        $rating_produk = $request->input('rating_produk');

        $data = new \App\Produk();

        $data->nama_produk = $nama_produk;
        $data->deskripsi_produk = $deskripsi_produk;
        $data->kategori_produk = $kategori_produk;
        $data->url_foto_produk = $url_foto_produk;
        $data->harga_produk = $harga_produk;
        $data->stok_produk = $stok_produk;
        $data->bobot_produk = $bobot_produk;
        $data->rating_prosuk = $rating_produk;

        if($data->save()){
            $res['message'] = "Success!";
            $res['value'] = "$data";
            // return response($res);
        }

         DB::table('produk')->insert([
            'nama_produk' => $request->nama_produk,
            'deskripsi_produk' => $request->deskripsi_produk,
            'stok_produk' => $request->stok_produk,
            'bobot_produk' => $request->bobot_produk,
            'foto_produk' => $request->foto_produk,
            'kategori_produk' => $request->kategori_produk,
            'harga_produk' => $request->harga_produk
        ]);
         return redirect('/buka_toko');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = \App\Produk::where('id',$id)->get();

        if(count($data) > 0){ //mengecek apakah data kosong atau tidak
            $res['message'] = "Success!";
            $res['values'] = $data;
            return response($res);
        }
        else{
            $res['message'] = "Failed!";
            return response($res);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = DB::table('produk')->where('id', decrypt($id))->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('app/produk/editproduk',['produk' => $produk]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nama_produk = $request->input('nama_produk');
        $deskripsi_produk = $request->input('deskripsi_produk');
        $kategori_produk = $request->input('kategori_produk');
        $url_foto_produk = $request->input('url_foto_produk');
        $harga_produk = $request->input('harga_produk');
        $stok_produk = $request->input('stok_produk');
        $bobot_produk = $request->input('bobot_produk');
        $rating_produk = $request->input('rating_produk');

        $data = \App\Produk::where('id',$id)->first();

        $data->nama_produk = $nama_produk;
        $data->deskripsi_produk = $deskripsi_produk;
        $data->kategori_produk = $kategori_produk;
        $data->url_foto_produk = $url_foto_produk;
        $data->harga_produk = $harga_produk;
        $data->stok_produk = $stok_produk;
        $data->bobot_produk = $bobot_produk;
        $data->rating_prosuk = $rating_produk;

        if($data->save()){
            $res['message'] = "Success!";
            $res['value'] = "$data";
            return response($res);
        }
        else{
            $res['message'] = "Failed!";
            return response($res);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = \App\Produk::where('id',$id)->first();

        if($data->delete()){
            $res['message'] = "Success!";
            $res['value'] = "$data";
            return response($res);
        }
        else{
            $res['message'] = "Failed!";
            return response($res);
        }
    }
}
