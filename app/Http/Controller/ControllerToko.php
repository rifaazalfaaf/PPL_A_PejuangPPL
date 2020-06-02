<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerToko extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $data = \App\Toko::all();
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
        $nama_toko = $request->input('nama_toko');
        $alamat_toko = $request->input('alamat_toko');
        $bio_toko = $request->input('bio_toko');
        $rating_toko = $request->input('rating_toko');
        $no_wa_toko = $request->input('no_wa_toko');

        $data = new \App\Toko();

        $data->nama_toko = $nama_toko;
        $data->alamat_toko = $alamat_toko;
        $data->bio_toko = $bio_toko;
        $data->rating_toko = $rating_toko;
        $data->no_wa_toko = $no_wa_toko;

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
        $data = \App\Toko::where('id',$id)->get();

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
        $nama_toko = $request->input('nama_toko');
        $alamat_toko = $request->input('alamat_toko');
        $bio_toko = $request->input('bio_toko');
        $rating_toko = $request->input('rating_toko');
        $no_wa_toko = $request->input('no_wa_toko');

        $data = \App\Toko::where('id',$id)->first();

        $data->nama_toko = $nama_toko;
        $data->alamat_toko = $alamat_toko;
        $data->bio_toko = $bio_toko;
        $data->rating_toko = $rating_toko;
        $data->no_wa_toko = $no_wa_toko;

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
        $data = \App\Toko::where('id',$id)->first();

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
