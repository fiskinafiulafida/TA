<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class create_users_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'Admin',
               'email'=>'admin@gmail.com',
               
               'password'=> bcrypt('123456'),
                'level'=>'1',
            ],
            [
               'name'=>'User',
               'email'=>'user@gmail.com',
               'password'=> bcrypt('123456'),
                'level'=>'2',
            ],
        ];
  
        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}
