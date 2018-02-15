<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\articles;
use App\articles_img;
use App\videos;
use App\categories;
use App\personels;
use App\services;
use App\publications;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * methode pour la deconnexion
     * error modif
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nbreServices=services::all()->count();
        $nbrePersonnels=personels::all()->count();
        $nbreArticles=articles::all()->count();
        $allNewpost=publications::whereStatut('nl')->get();
        $nomUser=Auth::user()->name;
        $admin=Auth::user()->admin;
        $connect=true;
        session(['connect'=> 'connect']);
        if($admin) {
            return view('admin.dashbao',compact('nbreServices','nbrePersonnels','nbreArticles','allNewpost','nomUser'));
        }
        else{
            //return view('homeContent');
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
    }
}
