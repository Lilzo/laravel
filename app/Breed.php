<?php namespace Vinyl;

use Illuminate\Database\Eloquent\Model;

class Breed extends Model{
    public $timestamps = false;

    public function cats(){
        return $this->hasMany('Vinyl\Cat');
    }
}