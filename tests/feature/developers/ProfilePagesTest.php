<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProfilePagesTest extends TestCase
{
	use DatabaseMigrations;

	/** @test */
	public function create_profile()
	{
		// $this->visit('/developer/profile/create')
  //       	->seePageIs('developer/profile/show');
	}

}