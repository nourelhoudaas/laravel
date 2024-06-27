<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bureau;
use App\Models\Direction;
use App\Models\Employe;

class Travaill extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'travaill';
    public $timestamps = false;
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ID_NIN',	
'ID_P'	,
'ID_D'	,
'ID_B'	,
'DATE_INSTALLATION'	,
'DATE_CHANG'	,
'NOTATION'	,
    ];
    public function employe()
    {
        return $this->belongTo(Travaill::class);
    }
    protected function bureau()
    {
        return $this->belongTo(Bureau::class);
    }
    protected function direction()
    {
        $this->belongTo(Direction::class);
    }
}
