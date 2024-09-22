<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LcDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'lc_id',
        'lc_indian_position',
        'lc_petral_parking',
        'lc_indian_custom',
        'lc_indian_border_continental',
        'lc_goods_unload_sheild_no',
        'lc_manydint',
        'lc_bill_ok_entry',
        'lc_examine',
        'lc_assesment',
        'lc_assesment_notice',
        'lc_after_duty'
    ];
}
