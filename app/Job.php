<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = ['category_id', 'name', 'zipcode', 'execute_at'];

}
