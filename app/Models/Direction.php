<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Travaill;
use App\Models\Bureau;

class Direction extends Model
{
    use HasFactory;
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'departement';
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable=['SPECIAL_D',	
    'ID_D'	,
    'NOM_D',	];
    public function bureau()
    {
        return $this->hasMany(Bureau::class);
    }
    protected function Travaill()
    {
        return $this->hasMany(Travaill::class);
    }
}
