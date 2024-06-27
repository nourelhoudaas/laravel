<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Niveau';
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ID_N'	,'ID_POST',	'NOM_N',	'SPECIAL_N'	,'FILIERE_N'		
    ];
    public function posts()
    {
        return $this->belongTo(Post::class);
    }
}
