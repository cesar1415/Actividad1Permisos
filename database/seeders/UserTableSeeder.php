<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make(123456789),
        ]);
        $user->assignRole('admin');

        $user = User::create([
            'name'=>'employed',
            'email'=>'employed@gmail.com',
            'password'=>Hash::make(123456789),
        ]);
        $user->assignRole('employed');

        $user = User::create([
            'name'=>'client',
            'email'=>'client@gmail.com',
            'password'=>Hash::make(123456789),
        ]);
        $user->assignRole('client');
    }
}
