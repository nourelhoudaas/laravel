<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //la page home.blade.php
    public function home()
    {

        return view('home.home');
    }

    //la page about.blade.php
    public function about()
    {
        return view('home.about');
    }

    //la page dashboard.blade.php
    public function dashboard()
    {
        $employe = DB::table('employe')
        ->join('post','employe.ID_NIN','=','post.ID_NIN')
        //->select('ID_NIN','ID_P','NOM_P','PRENOM_O','DATE_NAIS_P','LIEU_N','ADDRESS','EMAIL','PHONE_PN')
        ->join('travaill','travaill.ID_P',"=","post.ID_P")
        ->join('departement','departement.ID_D',"=","travaill.ID_D")
        ->select('employe.ID_NIN','employe.ID_P','employe.NOM_P','employe.PRENOM_O','post.NOM_POST','departement.NOM_D')
        ->get();

        $empdepart= DB::table('departement')
          ->get();

//le nbr total des employés
        $totalEmployes = $employe->count();


        return view('home.dashboard',compact('employe','totalEmployes','empdepart'));
    }



}

