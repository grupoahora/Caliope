<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name'=>'Admin',
            'slug'=>'admin',
            'special'=>'all-access',
        ]);

        $user = User::create([
            'name'=>'Cristian',
            'email'=>'Cristian@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        $user2 = User::create([
            'name'=>'Andres',
            'email'=>'aantiinoo@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        $user->roles()->sync(1);
        $user2->roles()->sync(1);
    }
}
