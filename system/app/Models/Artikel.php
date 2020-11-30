<?php

namespace App\Models;

use App\Models\Artikel;

class artikel extends Model {
	protected $table = 'artikel';

	function seller(){
		return $this->belongsTo(User::class, 'id_user');
	}

}