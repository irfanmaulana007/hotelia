<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = User::get();

        return view('user.index')->with('content', $content);
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
        $param['telepon'] = null;
        $param['email'] = null;

        $content = (object) $param;

        return view('user.create')->with('content', $content);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::orderBy('created_at', 'desc')->first();

        if($user != null){
            $lastid = (int) substr($user, -3);
        }else{
            $lastid = 0;
        }
        $newid = $lastid++;
        $id = 'US' . $newid;

        $content = new User();
        
        $content->id = $id;
        $content->nama = $request->get('nama');
        $content->telepon = $request->get('telepon');
        $content->email = $request->get('email');

        $content->save();

        return redirect('/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('id', $id)->first();
        $param['id'] = $user->id;
        $param['nama'] = $user->nama;
        $param['telepon'] = $user->telepon;
        $param['email'] = $user->email;

        return view('user.show')->with('content', $content);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        $param['id'] = $user->id;
        $param['nama'] = $user->nama;
        $param['telepon'] = $user->telepon;
        $param['email'] = $user->email;

        return view('user.create')->with('content', $content);
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
        $content = User::where('id', $id)->first();
        
        $content->nama = $request->get('nama');
        $content->telepon = $request->get('telepon');
        $content->email = $request->get('email');

        $content->save();

        return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $content = User::where('id', $id)->first();
        $content->delete();

        return redirect('/user');
    }
}
