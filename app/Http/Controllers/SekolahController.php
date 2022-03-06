<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Sekolah;


class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function homePage()
    {
        //
        return view('sekolah.main');
    }

    public function index()
    {
        //
        $budak=Sekolah::all();
        return view('/sekolah/list',['budak'=>$budak]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('sekolah.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $sekolah = new Sekolah();

        $sekolah->nama = $request->input('nama');
        $sekolah->ic_num = $request->input('ic_num');
        $sekolah->tel_no = $request->input('tel_no');
        $sekolah->the_sex = $request->input('the_sex');
        $sekolah->consent = $request->input('consent');
        $sekolah->complaint = $request->input('complaint');
        $sekolah->mh = $request->input('mh');
        $sekolah->dh = $request->input('dh');
        $sekolah->sh = $request->input('sh');
        $sekolah->ohpb = $request->input('ohpb');

        $sekolah->save();

        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        //
        return view('sekolah.searchbox');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $req)
    {
        //
        $search = $req->get('search');

        $pencarian = Sekolah::where('nama', 'like', '%'.$search.'%')->get();

        return view('sekolah.result', compact('pencarian'));
    }

    // public function serx(Request $req)
    // {
    //     $name = $req->get('search');
    //     $data=Sekolah::where('nama','LIKE','%'.$name.'%')->get();

    //     return view('sekolah.result',compact('data'));
    // }

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
