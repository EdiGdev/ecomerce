<?php

namespace Database\Seeders;

use GuzzleHttp\Promise\Create;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'cliente']); 
        $role3 = Role::create(['name' => 'recarga']);
      

       
    }
}
