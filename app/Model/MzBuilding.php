<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MzBuilding extends Model
{
    protected $table = 'mz_building';
    
    protected $primaryKey = 'id';
    
    protected $fillable = ['manager_id', 'name', 'building_number', 
                            'unique_id', 'tax_id', 'address', 'city', 
                            'township', 'postal_code', 'entrance', 
                            'num_of_apartments', 'description', 'status'];
}
