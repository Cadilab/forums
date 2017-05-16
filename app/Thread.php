<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $fillable=['user_id', 'name', 'body', 'subcategory_id'];
}
