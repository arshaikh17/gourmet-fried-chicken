<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
    	'name',
    	'disabled_at',
    ];

    protected $hidden = [
    	'deleted_at',
    	'created_at',
    	'updated_at',
    ];

    public function items()
    {
    	return $this->hasMany(Item::class);
    }
}
