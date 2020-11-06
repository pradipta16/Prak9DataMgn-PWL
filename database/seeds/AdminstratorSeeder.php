<?php

use Illuminate\Database\Seeder;

class AdminstratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\User;
        $admin->name = "administrator";
        $admin->email = "admin@gmail.com";
        $admin->password = \Hash::make("admin123");
        $admin->roles = "Adminstrator";

        $admin->save();

        $this->command->info("Admin berhasil ditambah");
    }
}
