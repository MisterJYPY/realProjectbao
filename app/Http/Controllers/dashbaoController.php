<?php

namespace App\Http\Controllers;

use App\articles;
use App\personels;
use App\publications;
use App\services;
use Illuminate\Http\Request;

class dashbaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nbreServices=services::all()->count();
        $nbrePersonnels=personels::all()->count();
        $nbreArticles=articles::all()->count();
        $allNewpost=publications::whereStatut('nl')->get();
        
        return view('admin.dashbao',compact('nbreServices','nbrePersonnels','nbreArticles','allNewpost'));
    }
    public function getSessionDateCode()
    {
        $dateComplet="";
        $dateD=date("d");//jour
        $dateM=date("m");//mois
        $dateY=date("Y");//annee

        $dateComplet.=$dateD;
        $dateComplet.=$dateM;
        $dateComplet.=$dateY;



        return $dateComplet;

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
