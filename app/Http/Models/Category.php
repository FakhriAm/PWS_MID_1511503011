<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{

  // protected $table = 'categories';
  protected $fillable = [
    "name"
];

protected $guarded = ['id'];
}
