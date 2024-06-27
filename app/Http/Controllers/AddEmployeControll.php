<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Employe;
use App\Models\Bureau;
use App\Models\Direction;
use App\Models\Travaill;
use App\Modele\Containt;

class AddEmployeControll extends Controller
{
    //
        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

    public function add(Request $Request)
    {
       // dd($Request);
        $Request->validate([
            'ID_NIN' => 'required|integer',
            'Nom_P' => 'required|string',
            'Prenom_O' => 'required|string',
            'Date_Nais_P' => 'required|date',
            'Lieu_N' => 'required|string',
            'Address' => 'required|string',
            'EMAIL'=>'required|string',
            'PHONE_NB'=>'required|integer',
        ]);

        $employe = new Employe([
            'ID_NIN' => $Request->get('ID_NIN'),
            'ID_P' => rand(1, 100),
            'NOM_P' => $Request->get('Nom_P'),
            'PRENOM_O' => $Request->get('Prenom_O'),
            'DATE_NAIS_P' => $Request->get('Date_Nais_P'),
            'LIEU_N' => $Request->get('Lieu_N'),
            'ADDRESS' => $Request->get('Address'),
            'EMAIL'=>$Request->get('EMAIL'),
            'PHONE_PN'=>$Request->get('PHONE_NB'),
        ]);

        $bureau=new Bureau();
      // dd($employe);
        $Direction=new Direction();
     //   $Containt=new Containt();
        if($employe->save())
        {
            //$dbcontaint=$Containt->get();
            $dbbureau=$bureau->get();
            $dbdirection=$Direction->get(); 
            return view('addTemplate.travaill',compact('employe','dbbureau','dbdirection'));
        }
        else
        {
            return redirect()->back()->with('error', 'Failed to create department. Please try again.');
        }

        
    }



    public function addToDep(Request $Request)
    {
       
        $Request->validate([
            'ID_NIN' => 'required|integer',
            'ID_P' => 'required|integer|',
            'ID_D' => 'required|integer',
            'ID_B' => 'required|integer',
            'DatePV'=>'required|date'
        ]);
       // dd($Request);
        
try {
   $test= DB::table('travaill')->insert([
        'ID_NIN' => $Request->get('ID_NIN'),
        'ID_P' => $Request->get('ID_P'),
        'ID_D' => $Request->get('ID_D'),
        'ID_B' => $Request->get('ID_B'),
        'DATE_INSTALLATION'	=>$Request->get('DatePV'),
        'DATE_CHANG'	=>Carbon::now(),
        'NOTATION'	=>0,
    ]);
} catch (\Exception $e) {
    Log::error('Failed to insert user: ' . $e->getMessage());
}
return redirect()->route('Employe.create')->with('success', 'User created successfully!');
    }



  protected function existToAdd($id)
  {
    $employe=Employe::where('ID_NIN', $id)->firstOrFail();
    $bureau=new Bureau();
    $Direction=new Direction();
    $dbbureau=$bureau->get();
    $dbdirection=$Direction->get();
    return view('addTemplate.travaill',compact('employe','dbbureau','dbdirection'));
  }
}
