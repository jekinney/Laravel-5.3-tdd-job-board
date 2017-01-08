<?php

use App\Users\Models\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegistrationTest extends TestCase
{
	use DatabaseMigrations;

    /** @test */
    public function register_a_new_user_as_developer()
    {
        factory(App\Users\Models\Role::class)->states('developer')->create();

        $this->visit('register')
        	->type('john doe', 'name')
        	->type('john@example.com', 'email')
        	->type('secret', 'password')
        	->type('secret', 'password_confirmation')
        	->select('developer', 'type')
        	->press('Register')
        	->seePageIs('developer/profile/create');
    }

    /** @test */
    public function register_a_new_user_as_employer()
    {
        factory(App\Users\Models\Role::class)->states('employer')->create();
        
        $this->visit('register')
            ->type('john doe', 'name')
            ->type('john@example.com', 'email')
            ->type('secret', 'password')
            ->type('secret', 'password_confirmation')
            ->select('employer', 'type')
            ->press('Register')
            ->seePageIs('employer/profile/create');
    }
}
