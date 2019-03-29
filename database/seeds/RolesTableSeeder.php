<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
    {
        $admin               = new Role();
        $admin->name         = 'Admin';
        $admin->description  = 'Admin';
        $admin->display_name = 'Admin';
        $admin->save();

        $member              = new Role();
        $member->name         = 'Member';
        $member->description  = 'Member';
        $member->display_name = 'Member';
        $member->save();
    }
}
