<?php

namespace App\Http\Controllers;

use App\articles;
use App\articles_img;
use App\services;
use App\categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class articlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=categories::all();
        $nomUser=Auth::user()->name;
        return view('admin.articlesInsert',compact('categories','nomUser'));
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


        $intitule=$request->intitule;
        $description=$request->description;
        $priorite=$request->priorite;
        $services=$request->services;
        $statut=$request->statut;
        $code='';


        $nomMoyen=$_FILES['imageMoyenne']['name'];
        $nomPetit=$_FILES['imagePetite']['name'];


       /* cette partie concerne la recuperation des linfo temporaires des fichiers sources*/
        $sourceMoyenne=$_FILES['imageMoyenne']['tmp_name'];
        $sourcePetit=$_FILES['imagePetite']['tmp_name'];

        /**recupération du chemin absolu pour la source**/

        $CheminMoyen="/var/www/html/bao-technologies/public/BdfrontendImage/imageMoyen/".basename($_FILES['imageMoyenne']['name']);
        $cheminPetit="/var/www/html/bao-technologies/public/BdfrontendImage/imagePetite/".basename($_FILES['imagePetite']['name']);




        /** les informations pour la copie */
        if (copy($sourceMoyenne,   $CheminMoyen) && copy( $sourcePetit,   $cheminPetit)) {

           $articlesEnregistre= articles::firstOrCreate([
                'intitule'=>$intitule,
                'description'=>$description,
                'priorite'=>$priorite,
                'categories'=>$services,
                'statut'=>$statut,
                'lienImage'=>$CheminMoyen]);

            /**
             * Insertions pour
             */
            articles_img::firstOrCreate([
                'nom'=>$nomMoyen,
                'url'=>$CheminMoyen,
                'type'=>'moyen',
                'articles'=>$articlesEnregistre->id,
                'services'=>$services,
                'lienImage'=>$CheminMoyen]);
            Session::flash('SuccesRapport','Article enregistré avec succes');

            return redirect()->route('listeRapport');

        } else{
            Session::flash('EchecRapport','Echec  denvoi');

            return redirect()->route('listeRapport');
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
