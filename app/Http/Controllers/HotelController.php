<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Hotel;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = Hotel::get();

        return view('hotel.index')->with('content', $content);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $param['id'] = null;
        $param['nama'] = null;
        $param['alamat'] = null;

        $content = (object) $param;

        return view('hotel.create')->with('content', $content);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hotel = Hotel::orderBy('created_at', 'desc')->first();

        if($hotel != null){
            $lastid = (int) substr($hotel, -3);
        }else{
            $lastid = 0;
        }
        $newid = $lastid++;
        $id = 'HO' . $newid;

        $content = new Hotel();
        
        $content->id = $id;
        $content->nama = $request->get('nama');
        $content->alamat = $request->get('alamat');

        $content->save();

        return redirect('/hotel');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hotel = Hotel::where('id', $id)->first();
        $param['id'] = $hotel->id;
        $param['nama'] = $hotel->nama;
        $param['alamat'] = $hotel->alamat;

        return view('hotel.show')->with('content', $content);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hotel = Hotel::where('id', $id)->first();
        $param['id'] = $hotel->id;
        $param['nama'] = $hotel->nama;
        $param['alamat'] = $hotel->alamat;

        return view('hotel.create')->with('content', $content);
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
        $content = Hotel::where('id', $id)->first();
        
        $content->nama = $request->get('nama');
        $content->alamat = $request->get('alamat');

        $content->save();

        return redirect('/hotel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $content = Hotel::where('id', $id)->first();
        $content->delete();

        return redirect('/hotel');
    }
}
