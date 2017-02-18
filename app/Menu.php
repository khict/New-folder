<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected  $table = 'menus';
    // primary key field
    protected  $primaryKey = 'MnuID';
    
    // unuse timestamps
    public $timestamps = false;
}
