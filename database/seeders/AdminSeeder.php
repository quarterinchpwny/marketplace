<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::truncate();

        $admins = [
          [
              'name' => 'Admin',
              'email' => 'admin@lexmeet.com',
              'password' => 'admin',
          ],
          [
              'name' => 'Admin 2',
              'email' => 'admin2@lexmeet.com',
              'password' => 'admin',
          ],
        ];

        for ($i = 0; $i < count($admins); $i++) {
            $admin = new Admin();
            $admin->name = $admins[$i]['name'];
            $admin->email = $admins[$i]['email'];
            $admin->password = Hash::make($admins[$i]['password']);
            $admin->save();
        }

        // php artisan db:seed --class=AdminSeeder
    }
}
