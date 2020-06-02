<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerPengguna extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $data = \App\Pengguna::all();
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
        $username = $request->input('username');
        $password = $request->input('password');
        $email = $request->input('email');
        $nohp = $request->input('nohp');
        $alamat = $request->input('alamat');

        $data = new \App\Pengguna();

        $data->username = $username;
        $data->password = $password;
        $data->email = $email;
        $data->nohp = $nohp;
        $data->alamat = $alamat;

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
        $data = \App\Pengguna::where('id',$id)->get();

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
        $username = $request->input('username');
        $password = $request->input('password');
        $email = $request->input('email');
        $nohp = $request->input('nohp');
        $alamat = $request->input('alamat');

        $data = \App\Pengguna::where('id',$id)->first();

        $data->username = $username;
        $data->password = $password;
        $data->email = $email;
        $data->nohp = $nohp;
        $data->alamat = $alamat;

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
        $data = \App\Pengguna::where('id',$id)->first();

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
