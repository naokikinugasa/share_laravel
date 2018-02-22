<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getOwnerName()
    {
        return $this->user->name;
    }

    public function getOwnerAvatar()
    {
        return $this->user->avatar;
    }

    public function reservations()
    {
        return $this->hasMany('App\Reservation');
    }

    public function pic_thum()
    {
        $fnamebase = "/img/product/".$this->id."/thum.";

        if(file_exists(public_path().$fnamebase."gif")){
            return $fnamebase."gif";
        }else if(file_exists(public_path().$fnamebase."png")){
            return $fnamebase."png";
        }else if(file_exists(public_path().$fnamebase."jpg")){
            return $fnamebase."jpg";
        }else if(file_exists(public_path().$fnamebase."jpeg")){
            return $fnamebase."jpeg";
        }else{
            return "";
        }
    }

}
