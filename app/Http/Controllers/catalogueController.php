<?php

namespace App\Http\Controllers;

use App\catalogue;
use Illuminate\Http\Request;
use App\videos;
use Illuminate\Support\Facades\Auth;
use App\publications;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

class catalogueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin=(Auth::user()!=null)?Auth::user()->admin:false;
        if($admin) {
            // $Allvideos=videos::all();
            $nomUser=Auth::user()->name;
            //  $liste=articles::all()->paginate(5);
            $allNewpost=publications::whereStatut('nonlu')->get();
            $Allvideos=videos::whereStatutOrStatut('actif','inactif')->paginate(5);

            Session::flash('welcomeCatalogue', 'BienVenu dans le menu de gestion de votre catalogue');

            return view('admin.catalogue',compact('Allvideos','nomUser','allNewpost'));
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
        $nomRubrique = $request->formulaire;
        $NomFormdescription = 'description' . $nomRubrique;
        $nomFormStatut = 'statut' . $nomRubrique;

        $description = (!empty($request->$NomFormdescription))?$request->$NomFormdescription:"Aucune";
        $statut = $request->$nomFormStatut;
        $nomFormCompletFichier = 'fichier' . $nomRubrique;

        $statutactif=($statut=='actif')?true:false;
        $nomMoyen = $_FILES[$nomFormCompletFichier]['name'];
        $sourceMoyenne = $_FILES[$nomFormCompletFichier]['tmp_name'];
        /**
         * copie dans le repertoire cible
         *
         */
        $CheminMoyen = "BdfrontendImage/catalogue/" . basename($nomMoyen);
        if (!empty($sourceMoyenne)) {
            $tailleFichier = $_FILES[$nomFormCompletFichier]['size'];
            $tailleMo = ($tailleFichier / 1024) / 1024;
            if ($tailleMo <= 1.9) {

                if (copy($sourceMoyenne, $CheminMoyen)) {
                    /**
                     * mise a jour a inactif de tous les catalogues actifs
                     */
                    if($statutactif)
                    {
                        $data = array(
                        'statut' =>'inactif'
                    );
                        catalogue::where('rubrique',$nomRubrique)->update($data);
                    }
                    
                    $catalogueEnregistre = catalogue::firstOrCreate([
                        'description' => $description,
                        'statut' => $statut,
                        'url' => $CheminMoyen,
                    'rubrique'=>$nomRubrique]);

                    Session::flash('succesInsertCatalogue', 'Votre Catalogue a bien été mise a jour');

                    return redirect()->route('admin.catalogue');

                }
            } else {
                Session::flash('EchecInsertCatalogue', 'Echec Enregistrement de ce catalogue verifier la taille de votre video svp!!!!!');
                return redirect()->route('admin.catalogue');

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
