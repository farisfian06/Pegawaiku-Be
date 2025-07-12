<?php

namespace Database\Seeders;

use App\Models\Division;
use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $divisionIds = Division::pluck('id')->toArray();

        $employees = [
            [
                'name' => 'Windah Basudara',
                'image' => 'https://assets.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/indizone/2023/04/02/lNsYkWp/windah-basudara-ditipu-bocil-pas-main-resident-evil-4-remake-wah-sesat-yang-nyuruh46.jpg',
                'phone' => '1234567890',
                'position' => 'Manager',
            ],
            [
                'name' => 'Sarah Johnson',
                'image' => 'https://media.istockphoto.com/id/1154642632/photo/close-up-portrait-of-brunette-woman.webp?a=1&b=1&s=612x612&w=0&k=20&c=a9F3JVJrROyXgTP4zgtxPnOiAOMrv9qRY4NF8n0hN7E=',
                'phone' => '0987654321',
                'position' => 'Senior Developer',
            ],
            [
                'name' => 'Michael Chen',
                'image' => 'https://images.unsplash.com/photo-1752118464988-2914fb27d0f0?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8cHJvZmVzaW9uYWwlMjBwcm9maWVsfGVufDB8fDB8fHww',
                'phone' => '5556667777',
                'position' => 'UI/UX Designer',
            ],
        ];

        foreach ($employees as $employee) {
            Employee::create([
                ...$employee,
                'division_id' => Arr::random($divisionIds),
            ]);
        }
    }
}
