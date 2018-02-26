<?php

namespace App\Http\Controllers;

use App\articles;
use App\articles_img;
use App\services;
use App\categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\publications;

class articlesController extends Controller
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
            $categories=categories::all();
            $nomUser=Auth::user()->name;
            //  $liste=articles::all()->paginate(5);
            $liste=articles::whereStatutOrStatut('actif','inactif')->paginate(5);
            $allNewpost=publications::whereStatut('nonlu')->get();
            return view('admin.articlesInsert',compact('categories','nomUser','liste', 'allNewpost'));
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

       // $CheminMoyen="c:/laragon/www/bao-technologies/public/BdfrontendImage/imageMoyen/".basename($_FILES['imageMoyenne']['name']);
      //  $cheminPetit="c:/laragon/www/bao-technologies/public/BdfrontendImage/imagePetite/".basename($_FILES['imagePetite']['name']);

        $CheminMoyen="c:/laragon/www/bao-technologies/public/BdfrontendImage/imageMoyen/".basename($_FILES['imageMoyenne']['name']);
        $cheminPetit="c:/laragon/www/bao-technologies/public/BdfrontendImage/imagePetite/".basename($_FILES['imagePetite']['name']);

        $CheminMoyen="BdfrontendImage/imageMoyen/".basename($_FILES['imageMoyenne']['name']);
        $cheminPetit="BdfrontendImage/imagePetite/".basename($_FILES['imagePetite']['name']);
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
             * Insertions pour l'image moyen
             */
            articles_img::firstOrCreate([
                'nom'=>$nomMoyen,
                'url'=>$CheminMoyen,
                'type'=>'moyen',
                'articles'=>$articlesEnregistre->id]
                );

            /**
             * Insertions pour l'image moyen
             */
            articles_img::firstOrCreate([
                'nom'=>$nomPetit,
                'url'=> $cheminPetit,
                'type'=>'petit',
                'articles'=>$articlesEnregistre->id]);

            Session::flash('SuccesRapport','Article enregistré avec succes');

            return redirect()->route('insertNewArticle');

        } else{
            Session::flash('EchecRapport','Enregistrement');

            return redirect()->route('insertNewArticle');
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
