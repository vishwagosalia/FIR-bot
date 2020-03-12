<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CrimeTypes extends Model
{
    protected $table = 'crime_types';
    protected $primaryKey = 'type_id';
    protected $fillable = [
        'type', 'detail', 'ipc'
    ];
}
