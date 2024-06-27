<?php

use App\Http\controllers\HomeController;
use App\Http\controllers\LoginController;
use App\Http\controllers\EmployeesController;
use App\Http\controllers\DepartmentController;
use App\Http\Controllers\EmployeControl;
use App\Http\Controllers\AddEmployeControll;
use App\Http\Controllers\BioEmployeControl;
use App\Http\Controllers\LogiinController;
use App\Http\Controllers\EmployeController;
use Illuminate\Support\Facades\Route;

/*
Formulaires de connexion/inscription: Utiliser Route::match(['get', 'post']) pour permettre l'affichage du formulaire (GET) et le traitement des données soumises (POST).
Affichage de données: Utiliser Route::get() pour des pages où les utilisateurs consultent simplement les données (comme des profils, des pages d'articles, des tableaux de bord, etc.).
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
En résumé, utilisez Route::get() lorsque vous avez besoin de gérer uniquement les requêtes GET pour afficher des ressources.
Utilisez Route::match(['get', 'post'])  lorsque vous avez besoin de la flexibilité pour gérer à la fois l'affichage initial
et la soumission des formulaires ou d'autres interactions nécessitant à la fois GET et POST.
*/




/*
Route::controller(LoginController::class)->group(function(){
    Route::get('/logout','logout')->name('app_logout');
    Route::post('/exist_email','existEmail')->name('app_exist_email');
    Route::post('/exist_username','existUsername')->name('app_exist_username');
    Route::match(['get', 'post'], '/activation_code/{token}','activationCode')->name('app_activation_code');
    Route::get('/user_checker','userChecker')->name('app_user_checker');
    Route::get('/resend_activation_code/{token}','resendActivateCode')->name('app_resend_activation_code');
    Route::get('/activation_account_link/{token}','activationAccountLink')->name('app_activation_account_link');
    Route::match(['get', 'post'],'/activation_account_change_email/{token}','activateAccountChangeEmail')->name('app_activation_account_change_email');
    Route::match(['get', 'post'], '/forgot_password', 'forgotPassword')->name('app_forgotPassword');
    [app_..] nom de la route dans la page; [forgotPassword]  nom de la fonction dans le controller; [forgot_password] nom de la page dans la quelle il vas t etre renvoyer
    });*/

  /*  Route::controller(HomeController::class)->group(function(){
        Route::get('/','home')->name('app_home');
        Route::get('/about', 'about')->name('app_about');
        Route::match(['get', 'post'], '/dashboard','dashboard')
             ->middleware('auth') //pour acceder a cette page il faut s'authentifier
             ->name('app_dashboard');
    });
*/
Route::controller(EmployeControl::class)->group(function(){
    Route::get('\liste','ListeEmply')->name('app_liste_emply');
    Route::get('\add','AddEmply')->name('app_add_emply');
});

Route::controller(DepartmentController::class)->group(function(){
    //Route::get('\list_depart','ListeDepart')->name('app_depart');
    Route::match(['get', 'post'], '/dashboard_depart/{dep_id}','dashboard_depart')
    ->name('app_dashboard_depart');
});
Route::get('/',[HomeController::class,'home'])->name('app_home');
Route::get('/',[HomeController::class,'about'])->name('app_about');
Route::get('/dashboard',[HomeController::class,'dashboard'])->name('app_dashboard');
Route::get('/logout',[LoginController::class,'logout'])->name('app_logout');
Route::get('/register',[LoginController::class,'register'])->name('register');
//Route::get('/login',[LoginController::class,'login'])->name('login');

//------------------------------------------------------------------------------------------------
Route::get('/Employe',[EmployeControl::class,'index']);
//Route::get('/Employe/by-birthday', [EmployeControl::class, 'getByBirthday']);
//Route::get('/Employe/by-birthday/{birthday}', [EmployeControl::class, 'getByBirthdayGET']);
//Route::get('/Employe/create',[EmployeControl::class,'create']);
Route::get('/addTemplate',[EmployeControl::class,'create'])->name('Employe.create');
Route::get('/addTemplate/formulaire',[EmployeControl::class,'createF'])->name('Employe.add');
//Route::get('/BioTemplate/{id}',[BioEmployeControl::class,'create'])->name('BioTemplate.index');
Route::post('/Employe/add',[AddEmployeControll::class,'add']);
Route::put('/BioTemplate/edit/{id}',[BioEmployeControl::class,'update'])->name('BioTemplate.update');
Route::get('/BioTemplate/search/{id}',[EmployeControl::class,'getall'])->name('BioTemplate.detail');
Route::post('/Employe/Travaill',[AddEmployeControll::class,'addToDep'])->name('Employe.travaill');
Route::get('/Employe/IsTravaill/{id}',[AddEmployeControll::class,'existToAdd'])->name('Employe.istravaill');




//login logout
Route::get('/login', [LogiinController::class,'login'])->name('login');
Route::post('/login',[LogiinController::class,'authentication'])->name('authentication');
Route::post('/logout',[LogiinController::class,'logout'])->name('logout');
Route::get('/logout',[LogiinController::class,'logout'])->name('logout');
Route::get('/login/forget',[LogiinController::class,'login'])->name('app_forgotPassword');
//liste des employes
Route::get('/employe/list',[EmployeControl::class,'listEmployes'])->name('listeEmployes');
Route::get('/employe/list/{id}',[EmployeControl::class,'fichetechemp'])->name('fichetechemp');

//liste des employes par departement
Route::get('/employe/listempdep/{dep_id}',[EmployeControl::class,'listeEmpDepart'])->name('empdepart');
//Route::get('/employe/listempdep',[EmployeControl::class,'listeEmpDepart'])->name('listempdep');
Route::get('/employe/view/{id}',[EmployeControl::class,'fichetechemp']);
//liste de fiche technique de chaque employé
Route::get('/employe/fich',[EmployeControl::class,'fichetech']);
Route::get('/employe/fichemp/{id}',[EmployeControl::class,'fichetechemp']);

//cherche employes
//Route::get('/employe/search',[EmployeControl::class,'searchemp'])->name('searchemp');

Route::get('/search', [EmployeControl::class,'showSearchResults'])->name('search');
