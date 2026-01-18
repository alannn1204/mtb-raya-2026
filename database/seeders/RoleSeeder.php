<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User; // jangan lupa import User model

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1️⃣ Buat roles
        $superAdminRole = Role::firstOrCreate(['name' => 'super_admin']);
        $operatorRole   = Role::firstOrCreate(['name' => 'operator']);
        $agentRole      = Role::firstOrCreate(['name' => 'agent']);

        // 2️⃣ Buat user super admin (kalau belum ada)
        $user = User::firstOrCreate(
            ['email' => 'admin@myticketbus.my'], // unique key
            [
                'name' => 'Super Admin',
                'password' => bcrypt('admin123!@#'),
            ]
        );

        // 3️⃣ Assign role super_admin kepada user
        $user->assignRole('super_admin');
    }
}
