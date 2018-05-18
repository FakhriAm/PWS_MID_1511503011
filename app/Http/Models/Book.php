<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{

  protected $fillable = [
    "book_name" , "publisher" , "chapter" , 'writter'
];

protected $guarded = ['id'];
}
