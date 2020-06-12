<?php

use Illuminate\Database\Seeder;
use \App\Model\Account;
use \App\User;
    use Illuminate\Support\Str;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // runcating the User Model
        Account::truncate();



        // assigning  the us

        $adminAccount = Account::create([
            'id' => '1',
            'name' => 'Admin User',
            'description' => 'Admin Users Accpnt',
            'user_id' => '1'
        ]);

        $managerAccount = Account::create([
            'id' => '2',
            'name' => 'Manager User',
            'description' => 'Manager Users Account',
            'user_id' => '2'
        ]);

        $authorAccount = Account::create([
            'id' => '3',
            'name' => 'Author User',
            'description' => 'Author Users Account',
            'user_id' => '3'
        ]);

        $memberAccount = Account::create([
            'id' => '4',
            'name' => 'Member User',
            'description' => 'Member Users Account',
            'user_id' => '4'
        ]);

        $userAccount = Account::create([
            'id' => '5',
            'name' => 'Generic User',
            'description' => 'Generic Users Account',
            'user_id' => '5'

        ]);
    }
}
