<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
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

        User::factory()->create([
            'name' => 'Edison Guzman',
            'email' => 'Edisonvpn17@gmail.com',
            'password' => Hash::make('123456789')

        ])->assignRole('admin');

        //User::factory(100)->create();
    }
}
