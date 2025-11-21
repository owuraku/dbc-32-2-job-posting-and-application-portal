<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasUuids; // this makes our model generate a uuid when creating a new record

    // public $table = 'company'; // use to change the table name
    protected $keyType = 'string'; // not needed when using HasUUid traits

    //protected $primaryKey = 'id'; // change this when your primary key is not 'id'

    protected $fillable = [
        'name',
        'address',
        'contact'
    ];
}
