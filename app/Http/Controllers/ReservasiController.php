<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Reservasi;

class ReservasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = Reservasi::get();

        return view('reservasi.index')->with('content', $content);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $param['id'] = null;
        $param['id_user'] = null;
        $param['id_ka'] = null;
        $param['tanggal'] = null;
        $param['checkin'] = null;
        $param['checkout'] = null;

        $content = (object) $param;

        return view('reservasi.create')->with('content', $content);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reservasi = Reservasi::orderBy('created_at', 'desc')->first();

        if($reservasi != null){
            $lastid = (int) substr($reservasi, -3);
        }else{
            $lastid = 0;
        }
        $newid = $lastid++;
        $id = 'RE' . $newid;

        $content = new Reservasi();
        
        $content->id = $id;
        $content->id_user = $request->get('id_user');
        $content->id_kamar = $request->get('id_kamar');
        $content->tanggal = $request->get('tanggal');
        $content->checkin = $request->get('checkin');
        $content->checkout = $request->get('checkout');

        $content->save();

        return redirect('/reservasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reservasi = Reservasi::where('id', $id)->first();
        $param['id'] = $reservasi->id;
        $param['id_user'] = $reservasi->id_user;
        $param['id_kamar'] = $reservasi->id_kamar;
        $param['tanggal'] = $reservasi->tanggal;
        $param['checkin'] = $reservasi->checkin;
        $param['checkout'] = $reservasi->checkout;

        return view('reservasi.show')->with('content', $content);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reservasi = Reservasi::where('id', $id)->first();
        $param['id'] = $reservasi->id;
        $param['id_user'] = $reservasi->id_user;
        $param['id_kamar'] = $reservasi->id_kamar;
        $param['tanggal'] = $reservasi->tanggal;
        $param['checkin'] = $reservasi->checkin;
        $param['checkout'] = $reservasi->checkout;

        return view('reservasi.create')->with('content', $content);
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
        $content = Reservasi::where('id', $id)->first();
        
        $content->id_user = $request->get('id_user');
        $content->id_kamar = $request->get('id_kamar');
        $content->tanggal = $request->get('tanggal');
        $content->checkin = $request->get('checkin');
        $content->checkout = $request->get('checkout');

        $content->save();

        return redirect('/reservasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $content = Reservasi::where('id', $id)->first();
        $content->delete();

        return redirect('/reservasi');
    }
}
