<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Employe;
use \App\Models\Compt;
use \App\Models\Niveau;
use \App\Models\Post;
use Illuminate\Support\Facades\DB;

class BioEmployeControl extends Controller
{
    //
    public function create($id)
    {
        $employe=Employe::where('ID_NIN', $id)->firstOrFail();
        return view('BioTemplate.index',compact('employe'));
    }
    public function update(Request $request,$id)
    {

        $request->validate([
            'Prenom_O' => 'required|string',
        ]);

        $updated = DB::table('Employe')
                    ->where('ID_NIN', $id)
                    ->update([
                        'NOM_P'=>$request->input('Nom_P'), 
                        'PRENOM_O' => $request->input('Prenom_O'),                           
                            ]);

        if ($updated) {
            return response()->json(['success' => 'Employee Prenom updated successfully']);
        } else {
            return response()->json(['error' => 'Employee not found or update failed'], 404);
        }
    }
        
}
