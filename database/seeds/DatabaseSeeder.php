<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $admin_id = DB::table('customers')->insertGetId([
            'firstname' => 'admin',
            'lastname' => 'admin',
            'email' => 'admin@admin.com',
            'role' => 'admin',
            'password' => \Illuminate\Support\Facades\Hash::make('admin')
        ]);

        $user_id = DB::table('customers')->insertGetId([
            'name' => 'customer',
            'email' => 'customer@customer.com',
            'role' => 'customer',
            'password' => \Illuminate\Support\Facades\Hash::make('customer')
        ]);
    }
}
