<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'admin','display_name'=>'Admin']);
        Role::create(['name' => 'writer','display_name'=>'Writer']);
        Role::create(['name' => 'user','display_name'=>'User']);
    }
}
