<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Auth;
USE DB;
use Illuminate\Http\Request;
use App\Models\compt;
use App\Models\login;
use Illuminate\Support\Facades\Hash;

class LogiinController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function authentication(Request $request)
    {
    //recupr form
      $username = $request->input('username');
      $password = $request->input('password');
      //dd($request);
      //depuis la bdd
      $compt = DB::table('compt')->where('USER_ID', $username)->first();

      //dd( $compt->USER_PASS);
      if ($compt && $compt->USER_PASS===$password) {
      
        $idcompt = $compt->ID_CMPT; // Récupérer l id usr
        $id_nin=$compt->ID_NIN;
        $id_p=$compt->ID_P;

        // Enregistrer les infos dans login
        DB::table('login')->insert([
            'ID_CMPT' => $idcompt,
            'ID_NIN'=>$id_nin,
            'ID_P'=>$id_p,
            'DATE_LOGIN' => now(), 
            'DATE_LOGOUT' => null, 
        ]);;
        return redirect()->route('app_dashboard');

          return 'Login successful';
          
          
      } else {
          dd($compt);
          return 'Invalid username or password';
      }
    
  }
  public function logout(Request $request)
  {

     
    $idcompt = $request->session()->get('ID_CMPT');
    if ($idcompt) {
      //update 
      DB::table('login')
      ->where('ID_COMPT',$idcompt)
      ->whereNull('DATA_LOGOUT')
      ->update(['DATA_LOGOUT'=>now()]);
 
    }

      return redirect()->route('login')->with('success', 'Logout successful');
  }

  
}

   
