<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\userinfo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class InfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $json = Storage::disk('local')->get('data.json');
        $datas = json_decode($json,true);

        foreach($datas as $data){
            User::query()->updateOrCreate([
                'name' => $data['name'],
                'phone' => $data['phone'],
                'email' => $data['email'],
                'password' => $data['password'],
                'username' => $data['username'],
                'company' => $data['company'],
                'nationality' => $data['nationality']
            ]);
        }
    }
}
