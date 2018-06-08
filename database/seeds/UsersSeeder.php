<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Users')->delete();
        
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('administrator')
        ]);
        User::create([
            'name' => 'serik1719',
            'email' => 'serik1719@mail.ru',
            'password' => bcrypt('Serik1719')
        ]);
    }
}
