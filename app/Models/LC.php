<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LC extends Model
{
    use HasFactory;
    protected $fillable = [
        'lc_number',
        'user_id',
        'lc_size',
        'lc_status',
        'lc_delivering_approx_time',
        'lc_delivering_driver_name',
        'lc_delivering_driver_contact_no',
        'lc_deivering_truck_no'
    ];
    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
