<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Containt extends Model
{
    use HasFactory;
    /**
    * The table associated with the model.
    *
    * @var string
    */
   protected $table = 'containt';
   public $timestamps = false;
   /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable=['ID_POST',	'ID_D',	];
   public function post()
   {
       return $this->hasMany(Bureau::class);
   }
   protected function departement()
   {
       return $this->hasMany(Travaill::class);
   }}
