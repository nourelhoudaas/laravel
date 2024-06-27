<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function dashboard_depart($dep_id)
    {
        $empdep= DB::table('employe')
                ->join('travaill','employe.ID_NIN','=','travaill.ID_NIN')
                ->join('departement','travaill.ID_D','=','departement.ID_D')
                ->join('containt','departement.ID_D','=','containt.ID_D')
                ->join('post','containt.ID_POST','=','post.ID_POST')
                ->where ('departement.ID_D','=',$dep_id)
                ->select('employe.ID_NIN','employe.ID_P','employe.NOM_P','employe.PRENOM_O','departement.ID_D','departement.NOM_D','post.NOM_POST')
                ->get();

                $empdepart= DB::table('departement')
                ->get();

                $nom_d = DB::table('departement')
                ->where('ID_D', $dep_id)
                ->value('NOM_D');

        //le nbr total des employe pour chaque depart
                $totalEmpDep = $empdep->count();

        return view('Department.dashboard_depart', compact('empdep','totalEmpDep','empdepart','nom_d'));
    }
}
