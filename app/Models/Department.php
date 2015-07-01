<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'departments';

    protected $fillable = [
    	'code', 'name', 'description'
    ];

    public function programs()
    {
    	return $this->hasMany( 'App\Models\Program' );
    }
}
