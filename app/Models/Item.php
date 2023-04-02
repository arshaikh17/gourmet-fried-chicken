<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
		'name',
		'tagline',
		'thumbnail',
		'category_id',
		'disabled_at',
    ];

    protected $hidden = [
    	'deleted_at',
    	'updated_at',
    	'created_at',
    ];

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }
}
