<?php

use Illuminate\Database\Seeder;
use App\Model\Channel;
use App\User;

class ChannelsTableSeeder extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // runcating the User Model
        Channel::truncate();
        // Trun the linking table




        $adminChannel = Channel::create([
            'id' => '1',
            'name' => 'Admin User',
            'description' => 'Admin Users Channel',
            'user_id' => '1'
        ]);

        $managerChannel = Channel::create([
            'id' => '2',
            'name' => 'Manager User',
            'description' => 'Manager Users Channel',
            'user_id' => '2'

        ]);

        $authorChannel = Channel::create([
            'id' => '3',
            'name' => 'Author User',
            'description' => 'Author Users Channel',
            'user_id' => '3'

        ]);

        $memberChannel = Channel::create([
            'id' => '4',
            'name' => 'Member User',
            'description' => 'Member Users Channel',
            'user_id' => '4'
        ]);

        $userChannel = Channel::create([
            'id' => '5',
            'name' => 'Generic User',
            'description' => 'Generic Users Channel',
            'user_id' => '5'

        ]);

       // //// attaching the roles
       // $adminChannel->channels()->attach($admin);
       // $managerChannel->channels()->attach($manager);
       // $authorChannel->channels()->attach($author);
       // $memberChannel->channels()->attach($member);
       // $userChannel->channels()->attach($user);
    }
}
