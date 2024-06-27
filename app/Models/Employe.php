<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Employe';
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
          'ID_NIN', 'ID_P', 'NOM_P', 'PRENOM_O', 'DATE_NAIS_P', 'LIEU_N', 'ADDRESS','EMAIL','PHONE_PN'
    ];
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
