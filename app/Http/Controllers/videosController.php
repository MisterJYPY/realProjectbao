<?php

namespace App\Http\Controllers;

use App\videos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\publications;
use Illuminate\Support\Facades\Session;


class videosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //  $nomUser=Auth::user()->name;
        $admin=(Auth::user()!=null)?Auth::user()->admin:false;
        if($admin) {
           // $Allvideos=videos::all();
            $nomUser=Auth::user()->name;
            //  $liste=articles::all()->paginate(5);
            $allNewpost=publications::whereStatut('nonlu')->get();
            $Allvideos=videos::whereStatutOrStatut('actif','inactif')->paginate(5);
            return view('admin.videosModif',compact('Allvideos','nomUser','allNewpost'));
        }
        else{
            return view('homeContent');
          }

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

        $intitule = $request->intitule;
        $description = $request->description;
        $priorite = $request->priorite;
        $statut = $request->statut;

        $nomMoyen = $_FILES['imageMoyenne']['name'];

        /* cette partie concerne la recuperation des linfo temporaires des fichiers sources*/
        $sourceMoyenne = $_FILES['imageMoyenne']['tmp_name'];


        /**recupération du chemin absolu pour la source**/

        $CheminMoyen = "/var/www/html/bao-technologies/public/BdfrontendImage/videos/" . basename($_FILES['imageMoyenne']['name']);

        // $CheminMoyen="c:/laragon/www/bao-technologies/public/BdfrontendImage/imageMoyen/".basename($_FILES['imageMoyenne']['name']);
        if (!empty($sourceMoyenne)) {
            $tailleFichier =$_FILES['imageMoyenne']['size'];
            $tailleMo = ($tailleFichier / 1024) / 1024;
            if ($tailleMo <= 1.9) {
                if (copy($sourceMoyenne, $CheminMoyen)) {
                    $videoEnregistre= videos::firstOrCreate([
                        'intitule'=>$intitule,
                        'description'=>$description,
                        'priorite'=>$priorite,
                        'statut'=>$statut,
                        'lien'=>$CheminMoyen]);

                    Session::flash('SuccesVideo','Video Enregistré avec succes');

                    return redirect()->route('configvideo');

                }
            } else {
                Session::flash('EchecVideo','Echec Enregistrement verifier la taille de votre video svp!!!!!');
                return redirect()->route('configvideo');

            }
        }
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
