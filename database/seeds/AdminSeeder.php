<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::where('email', '=', 'admin@tokendirecthubs.com')->first();
        if($admin === null){
            DB::table('users')->insert([
                'firstname' => 'Admin',
                'lastname' => 'Panel',
                'status' => 1,
                'username' =>'admin',
                'admin' => 1,
                'balance' => 500000,
                'profit' => 600000,
                'currency' => "$",
                'email' => 'admin@tokendirecthubs.com',
                'email_verified_at' => \Carbon\Carbon::now(),
                'password' => Hash::make('TOKENDIRECT12'),
            ]);
        }
    }

}
