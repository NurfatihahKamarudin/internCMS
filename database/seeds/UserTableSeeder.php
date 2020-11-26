<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::where('name','admin')->first();
        $authorRole = Role::where('name','author')->first();

        User::truncate();

        $admin= User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password')
        ]);

        $teha= User::create([
            'name' => 'Teha',
            'email' => 'teha@teha.com',
            'password' => bcrypt('password')
        ]);

        $admin->roles()->attach($adminRole);
        $teha->roles()->attach($authorRole);
    }
}
