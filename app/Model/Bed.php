<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Bed extends Model
{
    protected $table = 'beds';

    protected $primaryKey = 'bed_id';
    
    protected $fillable = [
            'bed_name',
            'status',
            'created_by',
            'updated_by',
            'created_at',
            'updated_at',
    	];
}
