<?php

namespace App\Http\Controllers;

use App\articles;
use App\articles_img;
use App\categories;
use App\videos;
use Illuminate\Http\Request;

class acceuilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $connect=false;
        session(['connect'=> 'non']);
        /**
         * Requete pour recupe image
         */
        $allMidleImages = articles::whereStatut('actif')->take(12)->get();
        $allBottomImages = articles_img::wheretype('petit')->take(6)->get();
        $uniqueVideo = videos::whereStatutAndPriorite('actif', 'eleve')->take(1)->get();
        //dd($uniqueVideo);
        //dd($allBottomImages);
        //dd($allMidleImages);
        $categories = categories::pluck('intitule','id');
        $allCategorie=categories::all();
        //dd($categories);
        return view('homeContent',compact('connect', 'allCategorie', 'categories', 'allMidleImages', 'allBottomImages', 'uniqueVideo'));
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
