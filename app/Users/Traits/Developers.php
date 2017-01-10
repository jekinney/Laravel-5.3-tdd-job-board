<?php

namespace App\Users\Traits;

trait Developers 
{
	public function portfolios()
	{
		return $this->hasMany(\App\Developers\Models\Portfolio::class);
	}

	public function resumes()
	{
		return $this->hasMany(\App\Developers\Models\Resume::class);
	}
}