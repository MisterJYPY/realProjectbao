<?php

namespace App\Http\Controllers;

use App\articles;
use App\articles_img;
use App\categories;
use App\connexion;
use App\videos;
use Illuminate\Http\Request;

class acceuilController extends Controller
{

    public static function getIp(){
        foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key){
            if (array_key_exists($key, $_SERVER) === true){
                foreach (explode(',', $_SERVER[$key]) as $ip){
                    $ip = trim($ip); // just to be safe
                    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false){
                        return $ip;
                    }
                }
            }
        }
    }
    public function getClientIps()
    {
        $ip_address=null;
        if (!empty($_SERVER['HTTP_CLIENT_IP']))
        {
            $ip_address = $_SERVER['HTTP_CLIENT_IP'];
        }

        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ',') !== false) {
                $iplist = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
                foreach ($iplist as $ip) {
                    $ip_address = $ip;
                }
            } else {
                $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
            }
        }

        if (!empty($_SERVER['HTTP_X_FORWARDED'])) {
            $ip_address = $_SERVER['HTTP_X_FORWARDED'];
        } elseif (!empty($_SERVER['HTTP_X_CLUSTER_CLIENT_IP'])) {
            $ip_address = $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_FORWARDED_FOR'])) {
            $ip_address = $_SERVER['HTTP_FORWARDED_FOR'];
        } elseif (!empty($_SERVER['HTTP_FORWARDED'])) {
            $ip_address = $_SERVER['HTTP_FORWARDED'];
        } else {
            $ip_address = $_SERVER['REMOTE_ADDR'];
        }
        return  $ip_address;
    }
    static function get_client_ip_server() {
        $ipaddress = '';
        if ($_SERVER['HTTP_CLIENT_IP'])
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if($_SERVER['HTTP_X_FORWARDED_FOR'])
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if($_SERVER['HTTP_X_FORWARDED'])
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if($_SERVER['HTTP_FORWARDED_FOR'])
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if($_SERVER['HTTP_FORWARDED'])
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if($_SERVER['REMOTE_ADDR'])
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';

        return $ipaddress;
    }


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
         $UserAdress=$this->getClientIps();

        //enregistrement des informations de connexion
         $codeSession=$this->getSessionDateCode();
        $code= explode("_", $codeSession);
        $informationPersonne=connexion::where('ip',$UserAdress)->Where('code','like','%' .$code[1] . '%')->count();

        /**
         * s'il ne sai pas connecte de la journee on le fait
         */

        if($informationPersonne==0) {
            $userCnnecter = connexion::firstOrCreate([
                'ip' => $UserAdress,
                'fin' => "non defini",
                'code' =>  $codeSession
            ]);
        }
  else{

          $data = array(
              'fin' =>'non defini'
          );
          connexion::whereIp($UserAdress)->update($data);

      }
        /**
         * si non on met a jour la table
         */

        return view('homeContent',compact('connect', 'allCategorie', 'categories', 'allMidleImages', 'allBottomImages', 'uniqueVideo'));
    }
    public function getSessionDateCode()
    {
        $dateComplet="";
        $dateD=date("d");//jour
        $dateM=date("m");//mois
        $dateY=date("Y");//annee
        $nombreCree=rand(1,10000);

        $dateComplet.=$nombreCree;
        $dateComplet.="_";
        $dateComplet.=$dateD;
        $dateComplet.=$dateM;
        $dateComplet.=$dateY;
        $nbre=1;
         while($nbre!=0)
         {
             $nbre=connexion::whereCode($dateComplet)->count();
             $dateComplet="";
             $nombreCree=rand(1,10000);

             $dateComplet.=$nombreCree;
             $dateComplet.="_";
             $dateComplet.=$dateD;
             $dateComplet.=$dateM;
             $dateComplet.=$dateY;

         }

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
