<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    protected $primaryKey = 'customer_id';
    
    protected $fillable = [
            'customer_name',
            'address',
            'phone',
            'email',
            'image',
            'status',
            'created_by',
            'updated_by',
            'created_at',
            'updated_at',
    	];
}
