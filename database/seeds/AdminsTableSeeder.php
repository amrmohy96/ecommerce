<?php

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => ucwords('super admin'),
            'email' => 'root@gmail.com',
            'password' => bcrypt('12345678'),
            'phone' => '01002345678'
        ]);
    }
}
