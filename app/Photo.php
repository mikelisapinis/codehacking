<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{

    protected $fillable = [ 'path' ];
    protected $uploads = '/images/';
    protected $placeholder = "placeholder.png";

    public function getPathAttribute($photo){

        if( $photo = $this->uploads . $photo ){

            return $photo;

        } else {

            return $this->uploads . $this->placeholder;

        }
        

    }

}
