<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = 'admin';
        $name = 'Jay Alvin Fermano Melgazo';
        $job = 'Web Developer & Photographer';
        $email = 'alvinthesniper@gmail.com';
        $birthday = 'January 22, 2003';
        $age = '21';
        $gender = 'Male';
        $phone = '639284546374';
        $address = 'San Roque, Hilongos, Leyte';
        $religion = 'Roman Catholic';
        $status = 'Single';
        $description = 'Improving my knowledge in Web Developer & Photographer.';
        $facebook = 'https://www.facebook.com/jayalvinmelgazo22';
        $instagram = 'https://www.instagram.com/jayalvinmelgazo22/?hl=en';
        $linkedin = 'https://www.linkedin.com/in/jay-alvin-f-melgazo-a434a7261/';
        $github = 'https://github.com/jayyyyvin';
        $youtube = 'https://www.youtube.com/channel/UCB8x4Qj6Jea79HTMLilezRA';

        DB::table('users')->insert ([
            [
                'role' => $role,
                'name' => $name,
                'job' => $job,
                'email' => $email,
                'birthday' => $birthday,
                'age' => $age,
                'gender' => $gender,
                'phone' => $phone,
                'address' => $address,
                'religion' => $religion,
                'status' => $status,
                'description' => $description,
                'facebook' => $facebook,
                'instagram' => $instagram,
                'linkedin' => $linkedin,
                'github' => $github,
                'youtube' => $youtube,
                'password' => Hash::make('12345678'),
                'remember_token' => NULL,
                'created_at' => now(),
                'updated_at' => now(),

            ],
        ]);
    }
}
