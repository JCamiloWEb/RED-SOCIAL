<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    //QUÉ TABLA VA A ESTAR MODIFICANDO:
    protected $table = 'images'; 

    //Relación One to Many / de uno a muchos, una imagen puede tener muchos comentarios

    public function comments(){
        return $this->hasMany('App\Models\Comment'); //Me va a traer un array de comentarios de id images

    }

    //Relación Ont to Many / de uno a muchos

    public function likes(){
        return $this->hasMany('App\Models\Like'); //Me va a traer un array de likes de id images


    }

    //Relación de muchos a uno 

    public function user(){
        //BelongsTo: Pertenece a: segundo parámetro para relacionar
        //return $this->belongsTo('App\User', 'user_id'); //Vamos a sacar el objeto usuario que ha creado esa imagen
        /*Ahora las relaciones se definen así: */
        return $this->belongsTo(User::class, 'user_id'); //Vamos a sacar el objeto usuario que ha creado esa imagen

    }
}
