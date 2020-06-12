<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

       $this->call(RolesTablesSeeder::class);
       $this->call(UsersTablesSeeder::class);
       $this->call(ChannelsTableSeeder::class);
       $this->call(AccountsTableSeeder::class);


    }
}
