<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BookingType extends Model
{
    protected $table = 'booking_types';

    protected $primaryKey = 'booking_type_id';
    
    protected $fillable = [
            'booking_type_name',
            'status',
            'created_by',
            'updated_by',
            'created_at',
            'updated_at',
    	];
}
