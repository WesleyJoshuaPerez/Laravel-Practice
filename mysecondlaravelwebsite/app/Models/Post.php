<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //use to protect and to not allow user to edit table in the developers like xammp
    protected $fillable = ['title', 'body'];
}
