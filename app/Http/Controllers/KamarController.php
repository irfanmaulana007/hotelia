<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Kamar;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = Kamar::get();

        return view('kamar.index')->with('content', $content);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $param['id'] = null;
        $param['id_hotel'] = null;
        $param['tipe'] = null;
        $param['harga'] = null;

        $content = (object) $param;

        return view('kamar.create')->with('content', $content);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kamar = Kamar::orderBy('created_at', 'desc')->first();

        if($kamar != null){
            $lastid = (int) substr($kamar, -3);
        }else{
            $lastid = 0;
        }
        $newid = $lastid++;
        $id = 'KA' . $newid;

        $content = new Kamar();
        
        $content->id = $id;
        $content->id_hotel = $request->get('id_hotel');
        $content->tipe = $request->get('tipe');
        $content->harga = $request->get('harga');

        $content->save();

        return redirect('/kamar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kamar = Kamar::where('id', $id)->first();
        $param['id'] = $kamar->id;
        $param['id_hotel'] = $kamar->id_hotel;
        $param['tipe'] = $kamar->tipe;
        $param['harga'] = $kamar->harga;

        return view('kamar.show')->with('content', $content);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kamar = Kamar::where('id', $id)->first();
        $param['id'] = $kamar->id;
        $param['id_hotel'] = $kamar->id_hotel;
        $param['tipe'] = $kamar->tipe;
        $param['harga'] = $kamar->harga;

        return view('kamar.create')->with('content', $content);
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
        $content = Kamar::where('id', $id)->first();
        
        $content->id_hotel = $request->get('id_hotel');
        $content->tipe = $request->get('tipe');
        $content->harga = $request->get('harga');

        $content->save();

        return redirect('/kamar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $content = Kamar::where('id', $id)->first();
        $content->delete();

        return redirect('/kamar');
    }
}
