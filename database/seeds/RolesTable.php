<?php

use App\Users\Models\Role;
use Illuminate\Database\Seeder;

class RolesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
        	['slug' => 'developer', 'name' => 'Developer'],
        	['slug' => 'employer', 'name' => 'Employer'],
        	['slug' => 'admin', 'name' => 'Admin'],
        ];

        foreach($roles as $role) {
        	Role::create($role);
        }
    }
}
