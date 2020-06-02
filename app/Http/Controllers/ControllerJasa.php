<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerJasa extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $data = \App\Jasa::all();
        if (count($data) > 0){
            $res['message'] = "Sucsess!";
            $res['values'] = $data;
            return response($res);
        }
        else{
            $res['message'] = "Empty!";
            return response($res);
        }
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
        $nama_jasa = $request->input('nama_jasa');
        $deskripsi_jasa = $request->input('deskripsi_jasa');
        $kategori_jasa = $request->input('kategori_jasa');
        $harga_jasa = $request->input('harga_jasa');
        $rating_jasa = $request->input('rating_jasa');

        $data = new \App\Jasa();

        $data->nama_jasa = $nama_jasa;
        $data->deskripsi_jasa = $deskripsi_jasa;
        $data->kategori_jasa = $kategori_jasa;
        $data->harga_jasa =$harga_jasa;
        $data->rating_jasa = $rating_jasa;

        if($data->save()){
            $res['message'] = "Success!";
            $res['value'] = "$data";
            return response($res);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = \App\Jasa::where('id',$id)->get();

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
        //
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
        $nama_jasa = $request->input('nama_jasa');
        $deskripsi_jasa = $request->input('deskripsi_jasa');
        $kategori_jasa = $request->input('kategori_jasa');
        $harga_jasa = $request->input('harga_jasa');
        $rating_jasa = $request->input('rating_jasa');

        $data = \App\Jasa::where('id',$id)->first();

        $data->nama_jasa = $nama_jasa;
        $data->deskripsi_jasa = $deskripsi_jasa;
        $data->kategori_jasa = $kategori_jasa;
        $data->harga_jasa =$harga_jasa;
        $data->rating_jasa = $rating_jasa;

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
        $data = \App\Jasa::where('id',$id)->first();

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
