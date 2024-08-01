<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * Add Users
         *
         */
        if (User::where('email', '=', 'user@user.com')->first() === null) {
            $newUser = user::create(['name'  => 'User Test','email_verified_at'=>date("Y-m-d H:i:s"),'email' => 'user@user.com','password' =>bcrypt('password')]);
        }
    }
}
