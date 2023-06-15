<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = [
            [
                'name' => 'Admin',
                'phone' => '0815556666',
                'email' => 'admin@admin.com',
                'password' => Hash::make('12345679'),
                'username' => 'Admin',
                'company' => 'Electronic Express',
                'nationality' => 'thai',
                'is_admin' => '1'
            ],
        ];

        foreach($user as $key => $value){
            User::create($value);
        }

    }
}
