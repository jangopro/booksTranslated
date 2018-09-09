<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /**
* Field to be mass-assigned.
*
* @var array
*/
protected $fillable = ['title', 'author', 'ISBN', 'lang'];
}
