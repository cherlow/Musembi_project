<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    public function attachee(){
        return $this->morphTo();
    }
}
