<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Post';
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ID_POST',	'ID_NIN',	'ID_P'	,'NOM_POST'	,'GRADE_POST'	,'DATE_RECT'	,'ECHELLAN'	
    ];
    public function employe()
    {
        return $this->belongTo(Employe::class);
    }

}
