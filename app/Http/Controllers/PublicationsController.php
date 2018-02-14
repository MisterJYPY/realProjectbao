<?php

namespace App\Http\Controllers;

use App\publications;
use Illuminate\Http\Request;
use App\articles;
use App\personels;
use App\services;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class PublicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        $nom=$request->nom;
        $mail=$request->mail;
        $message=$request->message;


        $messageEnregistre= publications::firstOrCreate([
            'intitule'=>$mail,
            'description'=>$message,
            'nom'=> $nom,
            'statut'=>'nl' //non lu
          ]);
        if( $messageEnregistre)
        {
            Session::flash('SuccesInsertMessage','Votre Message a été envoyé avec succes');

            return redirect()->route('home');
        }
        else{
            Session::flash('ErrorInsertMessage','Echec Insertion du message veuillez verifier vos champs');

            return redirect()->route('bao_contact');
        }
    }

    public function viewUserMessage($id)
    {
        $admin=(Auth::user()!=null)?Auth::user()->admin:false;
        $connect=true;
        session(['connect'=> 'connect']);
        if($admin) {

           // return view('admin.dashbao',compact('nbreServices','nbrePersonnels','nbreArticles','allNewpost','nomUser'));
            $data = array(
                'statut' =>'lu'
            );

            publications::where('id',$id)->update($data);

            $infoUserMessage=publications::whereId($id)->get();
            $allmessage=publications::all();

            //  Session::flash('sucessModif','Modification avec succes');
            session(['currentMessage'=>$id]);
           return redirect()->route('viewAllMessages');
           // return view('admin.userMessage',compact('nbreServices','nbrePersonnels','nbreArticles','allNewpost','nomUser'));

        }
        else{
            return view('homeContent');
        }
        /**
         * on fait le update
         */


    }
 public function viewAllMessages()
 {
     $admin=(Auth::user()!=null)?Auth::user()->admin:false;
     $nomUser=(Auth::user()!=null)?Auth::user()->name:'inconnu';
     $nbreServices=services::all()->count();
     $nbrePersonnels=personels::all()->count();
     $nbreArticles=articles::all()->count();
     $allNewpost=publications::whereStatut('nl')->paginate(5);
     $allReadPost=publications::whereStatut('lu')->paginate(5);
     $idMessage=session('currentMessage');
     $statutCurrentMesage=publications::select('statut')->whereId($idMessage)->get();
     //dd($allReadPost[0]['id']);
     //dd($allNewpost);
     /**
      * requete redondante arevoir avec celle du haut
      */
     $infCurrentMessage=($statutCurrentMesage!='del')?publications::whereId($idMessage)->get():null;
     $connect=true;
     session(['connect'=> 'connect']);
     if($admin) {
          if(!session::has('token_message_post'))
          {
              Session::flash('infCurrentMessage','Ce message Provient du site, Vous pouvez voir la liste des autres messages juste en dessous');
          }
         else{
             if(session('token_message_post')=="delete")
                 {
                     Session::flash('infCurrentMessage','Ce Message que vous apprecevez est condéré comme archive merci');
                     session(['token_message_post'=>'refresh']);
                }
             else{
                 Session::flash('infCurrentMessage','Ce message Provient du site, Vous pouvez voir la liste des autres messages juste en dessous');
             }
         }

         return view('admin.userMessage',compact('nbreServices','nbrePersonnels','nbreArticles','allNewpost','allReadPost','nomUser','infCurrentMessage'));
     }
 }

  public function archiveMessage($id)
  {
      $admin=(Auth::user()!=null)?Auth::user()->admin:false;
      $connect=true;
      session(['connect'=> 'connect']);
      if($admin) {

          // return view('admin.dashbao',compact('nbreServices','nbrePersonnels','nbreArticles','allNewpost','nomUser'));
          $data = array(
              'statut' =>'del'
          );
          session(['currentMessage'=>$id]);
          session(['token_message_post'=>'delete']);
          publications::where('id',$id)->update($data);

          $infoUserMessage=publications::whereId($id)->get();
          $allmessage=publications::all();

          //  Session::flash('sucessModif','Modification avec succes');

          session(['currentMessage'=>$id]);
          return redirect()->route('viewAllMessages');
          // return view('admin.userMessage',compact('nbreServices','nbrePersonnels','nbreArticles','allNewpost','nomUser'));

      }
      else{
          return view('homeContent');
      }
  }
    public function giveAllMessage()
    {
        $admin=(Auth::user()!=null)?Auth::user()->admin:false;
        $nomUser=(Auth::user()!=null)?Auth::user()->name:'inconnu';
        $nbreServices=services::all()->count();
        $nbrePersonnels=personels::all()->count();
        $nbreArticles=articles::all()->count();
        $allNewpost=publications::whereStatut('nl')->paginate(5);
        $allReadPost=publications::whereStatut('lu')->paginate(5);
        $allBackMessage=publications::whereStatut('del')->paginate(5);
    //  dd($allReadPost);

        $connect=true;
        session(['connect'=> 'connect']);
        if($admin) {

                Session::flash('infListePublications', 'Ci-dessous la liste de tous vos mesages');

                return view('admin.allMessage',compact('nbreServices','nbrePersonnels','nbreArticles','allNewpost','allReadPost','nomUser','allBackMessage'));

        }
        else{
            return 'oooo';
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\publications  $publications
     * @return \Illuminate\Http\Response
     */
    public function show(publications $publications)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\publications  $publications
     * @return \Illuminate\Http\Response
     */
    public function edit(publications $publications)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\publications  $publications
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, publications $publications)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\publications  $publications
     * @return \Illuminate\Http\Response
     */
    public function destroy(publications $publications)
    {
        //
    }
}
