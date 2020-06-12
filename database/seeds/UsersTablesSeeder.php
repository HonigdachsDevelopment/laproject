<?php

use Illuminate\Database\Seeder;

// required for password storement
    use Illuminate\Support\Facades\Hash;

// bring in the roles
    use App\User;
    use App\Role;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // runcating the User Model
        User::truncate();
        // Trun the linking table
        DB::table('role_user')->truncate();

        // assigning  the roles
        $adminRole = Role::where('name', 'admin')->first();
        $managerRole = Role::where('name', 'manager')->first();
        $authorRole = Role::where('name', 'author')->first();
        $memberRole = Role::where('name', 'member')->first();
        $userRole =  Role::where('name', 'user')->first();

        // storing the user roles
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            // password requires Support\Facades\Hash
            'password' => Hash::make('password')
        ]);

        $manager = User::create([
            'name' => 'Manager',
            'email' => 'manager@manager.com',
            // password requires Support\Facades\Hash
            'password' => Hash::make('password')
        ]);


        $author = User::create([
            'name' => 'Author User',
            'email' => 'author@author.com',
            // password requires Support\Facades\Hash
            'password' => Hash::make('password')
        ]);

        $member = User::create([
            'name' => 'Member User',
            'email' => 'member@member.com',
            // password requires Support\Facades\Hash
            'password' => Hash::make('password')
        ]);

        $user = User::create([
            'name' => 'Generic User',
            'email' => 'user@user.com',
            // password requires Support\Facades\Hash
            'password' => Hash::make('password')
        ]);

        // attaching the roles
        $admin->roles()->attach($adminRole);
        $manager->roles()->attach($managerRole);
        $author->roles()->attach($authorRole);
        $member->roles()->attach($memberRole);
        $user->roles()->attach($userRole);



    }
}
