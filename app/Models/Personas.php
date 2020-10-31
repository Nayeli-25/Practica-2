<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'personas';
    public $timestamps = false;

    public function relacionUsuarios()
    {
        /*varias personas pertenecen a un usuario*/
        return $this->belongsTo('App\Models\User');
    }
    public function relacionComentarios()
    {
        /*una persona tiene muchos comentarios*/
        return $this->hasMany('App\Models\Comentarios');
    }
}
