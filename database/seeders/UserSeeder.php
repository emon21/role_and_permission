<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = User::where('email','emonbd66@gmail.com')->first();
        if (is_null($user)) {
            $user = new User();
            $user->name = "Emon Raj";
            $user->email = "emonbd66@gmail.com";
            $user->password = hash::make('12345678');
            $user->save();
        }
       
    }
}
