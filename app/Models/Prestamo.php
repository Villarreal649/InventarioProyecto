<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestamos extends Model
{ 
    protected $perPage = 20;
    
    public $table = 'prestamos';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'name',
        'email',
    ];

    public function products()
    {
        return $this->belongsToMany(Producto::class)->withPivot(['quantity']);
    }
}
 
