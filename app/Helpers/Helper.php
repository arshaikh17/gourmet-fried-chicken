<?php

use App\Models\Category;
use App\Models\Item;

function getMenu()
{
	return Category::with(['items' => function($query) {
		$query->whereNull('disabled_at');
	}])
	->whereNull('disabled_at')
	->get();
}