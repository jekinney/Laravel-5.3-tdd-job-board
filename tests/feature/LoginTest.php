<?php

use App\Users\Models\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginTest extends TestCase
{
	use DatabaseMigrations;

    /** @test */
    public function login__user_that_is_developer()
    {
    	$user = factory(App\Users\Models\User::class)->create([
    		'email' => 'john@example.com',
    	]);
        $role = factory(App\Users\Models\Role::class)->states('developer')->create();

        $user->roles()->attach($role->id);

        $this->visit('login')
        	->type('john@example.com', 'email')
        	->type('secret', 'password')
        	->press('Login')
        	->seePageIs('developer/profile/create');
    }

    /** @test */
    public function login__user_that_is_employer()
    {
        $user = factory(App\Users\Models\User::class)->create([
    		'email' => 'john@example.com',
    	]);
        $role = factory(App\Users\Models\Role::class)->states('employer')->create();
        
        $user->roles()->attach($role->id);

        $this->visit('login')
        	->type('john@example.com', 'email')
        	->type('secret', 'password')
        	->press('Login')
        	->seePageIs('employer/profile/create');
    }
}
