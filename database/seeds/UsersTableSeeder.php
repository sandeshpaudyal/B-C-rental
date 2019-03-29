<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin     = User::create([
            'name'     => 'Kabir',
            'email'    => 'kabir@gmail.com',
            'password' => bcrypt('123456'),
       
        ]);
        $adminRole = Role::whereName('Admin')->first();
        $admin->attachRole($adminRole);

        $member     = User::create([
            'name'     => 'member',
            'email'    => 'member@gmail.com',
            'password' => bcrypt('123456'),
           
        ]);
        $memberRole = Role::whereName('member')->first();
        $member->attachRole($memberRole);
     
    }
}
