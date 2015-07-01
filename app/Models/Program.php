<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = 'programs';

    protected $fillable = [
    	'code', 'description', 'years', 'department_id'
    ];

    public function department()
    {
    	return $this->belongsTo( 'App\Models\Department' );
    }
}
