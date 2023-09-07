<?php

namespace Database\Seeders;

use App\Models\roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        roles::create([
            'rolename' => 'master',
        ]);
        roles::create([
            'rolename' => 'admin',
        ]);
        roles::create([
            'rolename' => 'user',
        ]);
    }
}
