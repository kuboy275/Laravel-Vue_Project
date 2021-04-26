<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use DateTime;



class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Admin Heroku';
        $user->email = 'admin@it.com';
        $user->password = bcrypt('admin');
        $user->is_admin = true;
        $user->created_at = new DateTime;
        $user->save();
    }
}
