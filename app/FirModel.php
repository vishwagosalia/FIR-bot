<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FirModel extends Model
{
    protected $table = 'firs';
    protected $primaryKey = 'fir_id';
    protected $fillable = [
        'name','phone_no', 'aadhar_no', 'token', 'state', 'city', 'time_happened', 'crime_happened', 'type_id', 'complaint',
        'address', 'pincode',
    ];
}
