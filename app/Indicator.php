<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Indicator extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'name_dari', 'user_id'];
}
