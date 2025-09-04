<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('employee')->insert([
            [
                'first_name'       => 'Iqbal',
                'last_name'        => 'Zainudin',
                'gender'           => 'L',
                'province'         => 'Jawa Barat',
                'city'             => 'Bandung',
                'address'          => 'Jl. Merdeka No. 123',
                'employee_id'      => 'EMP001',
                'position'         => 'Software Engineer',
                'devision'         => 'IT',
                'employee_status'  => 'Aktif',
                'email'            => 'iqbal@example.com',
                'password'         => Hash::make('password123'),
            ],
            [
                'first_name'       => 'Nur',
                'last_name'        => 'Afika',
                'gender'           => 'P',
                'province'         => 'Jawa Tengah',
                'city'             => 'Semarang',
                'address'          => 'Jl. Diponegoro No. 45',
                'employee_id'      => 'EMP002',
                'position'         => 'HRD',
                'devision'         => 'Human Resource',
                'employee_status'  => 'Aktif',
                'email'            => 'afika@example.com',
                'password'         => Hash::make('password123'),
            ],
        ]);
    }
}
