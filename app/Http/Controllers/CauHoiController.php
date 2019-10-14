<?php

namespace App\Http\Controllers;

use App\CauHoi;
use Illuminate\Http\Request;

class CauHoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsCauHoi = CauHoi::all();
        return view('cau-hoi.index', compact('dsCauHoi'));
    }

    public function trashList()
    {
        $dsCauHoi = CauHoi::onlyTrashed()->get();
        return view('cau-hoi.trash-list', compact('dsCauHoi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cau-hoi.form');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CauHoi  $cauHoi
     * @return \Illuminate\Http\Response
     */
    public function show(CauHoi $cauHoi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CauHoi  $cauHoi
     * @return \Illuminate\Http\Response
     */
    public function edit(CauHoi $cauHoi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CauHoi  $cauHoi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CauHoi $cauHoi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CauHoi  $cauHoi
     * @return \Illuminate\Http\Response
     */
    public function destroy(CauHoi $cauHoi)
    {
        //
    }
}