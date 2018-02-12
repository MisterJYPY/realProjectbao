<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\articles;
use App\personels;
use App\services;
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
        $nomUser=Auth::user()->name;
        $admin=Auth::user()->admin;
        $connect=true;
        session(['connect'=> 'connect']);
        if($admin) {
            return view('admin.dashbao', compact('nbreServices', 'nbrePersonnels', 'nbreArticles', 'nomUser'));
        }
        else{
            return view('homeContent');
        }
    }
}
